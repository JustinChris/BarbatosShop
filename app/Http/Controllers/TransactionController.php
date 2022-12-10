<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetails;
use App\Models\TransactionHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class TransactionController extends Controller
{
    public function getTransactionCart(Request $req) {
        if ($req->session()->has('user') && $req->session()->get('user')->userRole == "Member") {
            $user = $req->session()->get('user');
            $product = DB::table("transaction_header")
                        ->join("transaction_details", "transaction_header.transactionID", "=", "transaction_details.transactionid")
                        ->join("products", "products.productid", "=", "transaction_details.productid")
                        ->select("productname", "quantity", "transaction_details.quantity", "productprice", "productphoto", "transaction_details.transactionid", "transaction_details.productid")
                        ->where("transaction_header.transactionstatus", "=", "on Progress")
                        ->where("transaction_header.userid", "=", $user->userID)
                        ->get();
            // dd($product);
            $total = 0;
            foreach($product as $single){
                $total += ($single->productprice * $single->quantity);
            }
            return view('cart', [
                'user' => $user,
                'products' => $product,
                'total' => $total,
            ]);
        }
        return Redirect::to('/');
    }

    public function addProductToCart(Request $req, $id) {
        if ($req->session()->has('user') && $req->session()->get('user')->userRole == "Member") {
            $user = $req->session()->get('user');
            //check ada transactionStatus yang on Progress dengan userID x atau ga
            $hasOnProgressTransaction = TransactionHeader::where('userID', '=', $user->userID)
                    ->where('transactionStatus','=','on Progress')
                    ->first();
            
            if (is_null($hasOnProgressTransaction)) {
                TransactionHeader::create([
                    'userID' => $user->userID,
                    'transactionDate' => date('Y-m-d H:i:s'),
                    'transactionStatus' => 'on Progress',
                ]);
            }

            $getOnProgressTransaction = TransactionHeader::where('userID', '=', $user->userID)
                    ->where('transactionStatus','=','on Progress')
                    ->first();

            //check if product already exist on cart
            $alreadyExist = TransactionDetails::where('transactionID', '=', $getOnProgressTransaction->transactionID)
                ->where('productID', '=', $id)->first();

            if (is_null($alreadyExist)) {
                TransactionDetails::create([
                    'transactionID' => $getOnProgressTransaction->transactionID,
                    'productID' => $id,
                    'quantity' => $req->quantity,
                ]);
            } else {
                $getExist = TransactionDetails::find($alreadyExist->id);
                $getExist->quantity += $req->quantity;
                $getExist->save();
            }

        }
        return Redirect::to('/');
    }

    public function removeProductFromCart(Request $req, $id) {
        if ($req->session()->has('user') && $req->session()->get('user')->userRole == "Member") {
            $user = $req->session()->get('user');

            $hasOnProgressTransaction = TransactionHeader::where('userID', '=', $user->userID)
                    ->where('transactionStatus','=','on Progress')
                    ->first();

            if (is_null($hasOnProgressTransaction)) {
                Redirect::to("/");
            }

            $getOnProgressTransaction = TransactionHeader::where('userID', '=', $user->userID)
                    ->where('transactionStatus','=','on Progress')
                    ->first();
            $alreadyExist = TransactionDetails::where('transactionID', '=', $getOnProgressTransaction->transactionID)
                    ->where('productID', '=', $id)->first();

            if (is_null($alreadyExist)) {
                Redirect::to("/");
            } else {
                $getExist = TransactionDetails::find($alreadyExist->id);
                $getExist->delete();
            }
        }
        return Redirect::to('/transaction/cart');
    }

    public function purchaseCartProduct(Request $req) {
        if ($req->session()->has('user') && $req->session()->get('user')->userRole == "Member") {
            $user = $req->session()->get('user');

            $hasOnProgressTransaction = TransactionHeader::where('userID', '=', $user->userID)
            ->where('transactionStatus','=','on Progress')
            ->first();
            // dd($hasOnProgressTransaction);
            if (is_null($hasOnProgressTransaction)) {
                return Redirect::to("/");
            }
            $getOnProgressTransaction = TransactionHeader::where('userID', '=', $user->userID)
                    ->where('transactionStatus','=','on Progress')
                    ->first();
            $getFinished = TransactionHeader::find($getOnProgressTransaction->transactionID);
            $getFinished->transactionStatus = "Complete";
            $getFinished->save();
        }
        return Redirect::to('/');
    }

    public function getTransactionHistory(Request $req) {
        if ($req->session()->has('user') && $req->session()->get('user')->userRole == "Member") {
            $user = $req->session()->get('user');
            $transaction = TransactionHeader::where('userID', '=', $user->userID)
                    ->where('transactionStatus', '=', 'Complete')->get();
            $details = DB::table("transaction_header")
                    ->join("transaction_details", "transaction_header.transactionID", "=", "transaction_details.transactionid")
                    ->join("products", "products.productid", "=", "transaction_details.productid")
                    ->select("productname", "transaction_details.quantity", "productprice", "transaction_details.transactionID")
                    ->where("transaction_header.transactionstatus", "=", "Complete")
                    ->where("transaction_header.userid", "=", $user->userID)
                    ->get();
            // dd($details);
            $totalPrice = 0;
            $totalItem = 0;
            
            foreach($details as $single){
                $totalPrice += ($single->productprice * $single->quantity);
                $totalItem += $single->quantity;
            }
                    
            return view('history', [
                'user' => $user,
                'transactions' => $transaction,
                'details' => $details,
                'totalPrice' => $totalPrice,
                'totalItem' => $totalItem,
            ]);
        }
        return Redirect::to('/');
    }
}

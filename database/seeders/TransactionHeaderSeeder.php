<?php

namespace Database\Seeders;

use App\Models\TransactionHeader;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TransactionHeader::create([
            'userID' => 2,
            'transactionDate' => '2013/03/15 00:00:00',
            'transactionStatus' => 'on Progress',
        ]);
        /*
            kalo userID x transaksi on Progress masih ada,
            berarti jadiin semua add to cartnya dia ke transaction itu.

            tapi kalo ga ada buat transactionHeader baru, kemudian masukin
            transaction ke header itu

            GET cart page
            SELECT productName, transaction_details.quantity, productPrice, productPhoto, transaction_details.transactionID, transaction_details.productID FROM transaction_header JOIN transaction_details ON transaction_details.transactionID = transaction_header.transactionID JOIN products ON products.productID = transaction_details.productID WHERE transaction_header.transactionStatus = 'on Progress' AND transaction_header.userID = 2;

            Purchase
            need: transactionID
            set transactionID = COMPLETE

            New Transaction
            create transactionHeader -> Set transaction_header.status = on Progress,

        */

        TransactionHeader::create([
            'userID' => 2,
            'transactionDate' => '2013/04/15 00:00:00',
            'transactionStatus' => 'Complete',
        ]);

        TransactionHeader::create([
            'userID' => 2,
            'transactionDate' => '2013/05/15 00:00:00',
            'transactionStatus' => 'Canceled',
        ]);
    }
}

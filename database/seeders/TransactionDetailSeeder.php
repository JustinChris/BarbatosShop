<?php

namespace Database\Seeders;

use App\Models\TransactionDetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TransactionDetails::create([
            'transactionID' => 1,
            'productID' => 1,
            'quantity' => 3,
        ]); // onprogress

        TransactionDetails::create([
            'transactionID' => 1,
            'productID' => 2,
            'quantity' => 3,
        ]); // onprogress

        TransactionDetails::create([
            'transactionID' => 1,
            'productID' => 3,
            'quantity' => 4,
        ]); // onprogress

        TransactionDetails::create([
            'transactionID' => 2,
            'productID' => 5,
            'quantity' => 1,
        ]); // complete

        TransactionDetails::create([
            'transactionID' => 2,
            'productID' => 4,
            'quantity' => 1,
        ]); // complete

        TransactionDetails::create([
            'transactionID' => 2,
            'productID' => 2,
            'quantity' => 4,
        ]); // complete
    }
}

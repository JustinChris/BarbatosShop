<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetails extends Model
{   
    protected $table = 'transaction_details';
    protected $primaryKey = 'id';
    protected $fillable = [
        'transactionID',
        'productID',
        'quantity',
    ];
    public $timestamps = false;

    public function transactionHeader() {
        return $this->belongsTo(TransactionHeader::class, 'transactionID');
    }

    public function product() {
        return $this->hasOne(Product::class, 'productID');
    }
    
}

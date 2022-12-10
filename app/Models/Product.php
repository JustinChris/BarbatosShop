<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'productID';
    protected $guarded = ['productID'];
    protected $fillable = [
        'categoryID',
        'productName',
        'productDetail',
        'productPrice',
        'productPhoto'
    ];
    public $timestamps = false;

    public function transactionDetail() {
        return $this->belongsTo(TransactionDetails::class, 'productID');
    }
}

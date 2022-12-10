<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
    protected $table = 'transaction_header';
    protected $primaryKey = 'transactionID';
    protected $guarded = ['transactionID'];
    protected $fillable = [
        'userID',
        'transactionDate',
        'transactionStatus',
    ];
    public $timestamps = false;

    public function transactionDetail() {
        return $this->hasMany(TransactionDetails::class, 'transactionID');
    }
}

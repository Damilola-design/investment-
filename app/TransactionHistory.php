<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionHistory extends Model
{
    protected $fillable = [
        'phone', 'category', 'product_id', 'amount',
    ];
}

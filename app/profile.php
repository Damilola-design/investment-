<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class profile extends Model
{
    protected $guarded = [];

    // protected $fillable = [
    //     'full_name', 'email', 'amount', 'plan', 'Period', 'country', 'address', 'number', 'valid_id', 'passport', 'status', 'deformity', 'details', 'ill', 'physician', 'bank_name', 'acc_name', 'acc_number', 'interest_payment', 'refer_name', 'cid_number', 'refer_number', 'terms',
    // ];

     public function user()
     {
         return $this->belongsTo(User::class);
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class enquiries extends Model
{
    protected $fillable = [
        'email', 'subject', 'message',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'name', 'mobile', 'address', 'gender', 'subject', 'district'
    ];
}

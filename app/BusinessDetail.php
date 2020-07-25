<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessDetail extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address_id',
        'address_status',
    ];
}

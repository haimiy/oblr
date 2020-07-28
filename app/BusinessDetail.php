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

    public function district(){
        return $this->belongsTo(District::class,'address_id');
    }
}

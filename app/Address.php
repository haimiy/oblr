<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'region_id',
        'district_id',
        'address_line_1',
        'address_line_2',
    ];

    public function addressable(){
        return $this->morphTo();
    }
}

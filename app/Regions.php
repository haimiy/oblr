<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    //
    public function districts(){
        return $this->hasMany(District::class, 'region_id');
    }
}

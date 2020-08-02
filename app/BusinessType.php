<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessType extends Model
{
    //
    public function permissions()
    {
        return $this->belongsToMany('App\Permission', 'business_type_permission', 'business_type_id', 'permission_id');
    }
}

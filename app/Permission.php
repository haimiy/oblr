<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function businessTypes()
    {
        return $this->belongsToMany('App\BusinessType', 'business_type_permission', 'permission_id', 'business_type_id');
    }
}

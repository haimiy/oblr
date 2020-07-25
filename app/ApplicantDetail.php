<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicantDetail extends Model
{
    protected $fillable =[
        'first_name',
        'last_name',
        'email',
        'phone',
        'gender',
        'dob',
        'nationality',
        'address_id',
    ];
    public function license(){
        return $this->hasOne(License::class,'applicant_details_id');
    }
}

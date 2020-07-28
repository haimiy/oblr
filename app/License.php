<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    protected $fillable = [
        'license_number',
        'business_type_id',
        'entity_id',
        'applicant_details_id',
        'business_details_id'
    ];

    public function applicantDetail(){
        return $this->belongsTo('App\ApplicantDetail','applicant_details_id');
    }
    public function businessDetail(){
        return $this->belongsTo(BusinessDetail::class,'business_details_id');
    }
    public function entityType(){
        return $this->belongsTo(EntityType::class,'entity_type_id');
    }
    public function businessType(){
        return $this->belongsTo(BusinessType::class,'business_type_id');
    }
    public function licenseHistory(){
        return $this->hasMany(LicenseHistory::class,'license_number');
    }
}


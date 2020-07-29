<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'applicant_id',
        'entity_type_id',
        'business_type_id',
        'applicant_details_id',
        'business_details_id',
        'status',
        'application_type',
        'comment'
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
    public function document(){
        return $this->hasMany(Document::class,'application_id');
    }
    public function applicationStatus(){
        return $this->hasOne(ApplicationStatus::class,'application_id');
    }
}

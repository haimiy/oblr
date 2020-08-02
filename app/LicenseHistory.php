<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LicenseHistory extends Model
{
    protected $fillable = [
        'license_number',
        'date_of_issue',
        'expiry_date',
        'application_id'
    ];
}

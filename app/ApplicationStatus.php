<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicationStatus extends Model
{
    protected $fillable =[
        'application_id',
        'is_accepted'
    ];
}

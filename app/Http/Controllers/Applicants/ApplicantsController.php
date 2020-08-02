<?php

namespace App\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicantsController extends Controller
{
    public function showApplicantProfileSetting(){
        return view('applicant.profile');
    }
}

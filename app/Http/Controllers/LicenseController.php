<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LicenseController extends Controller
{
    public function showAllApplicantLicense(){
        return view('applicant.view_license');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function showAllApplicantApplicationRequest(){
        return view('applicant.view_application_history');
    }
    public function showAllApplicantPendingApplicationRequest(){
        return view('applicant.pending_application');
    }
    public function showAllApplicantFailApplicationRequest(){
        return view('applicant.fail_application');
    }
    public function showApplicantApplicationRequestForm(){
        return view('applicant.application');
    }

}

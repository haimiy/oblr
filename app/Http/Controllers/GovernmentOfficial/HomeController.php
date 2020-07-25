<?php

namespace App\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function showApplicantHome(){
        return view('applicant.home');
    }

}

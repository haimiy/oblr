<?php

namespace App\Http\Controllers\GovernmentOfficial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function showApplicantHome(){
        return view('applicant.home');
    }

}

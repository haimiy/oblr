<?php

namespace App\Http\Controllers\GovernmentOfficial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GovernmentOfficialController extends Controller
{
    public function index(){
        return view('government_official.home');
    }

    public function showGovernmentOfficialProfile(){
        return view('government_official.profile');
    }
}

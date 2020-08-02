<?php

namespace App\Http\Controllers\GovernmentOfficial;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::GOVERNMENT_OFFICIAL;

    public function __construct()
    {
        $this->middleware('guest:web_government_official')->except('logout');
    }

    public function showLoginForm(){
        return view('government_official.auth.login');
    }

    protected function guard()
    {
        return Auth::guard('web_government_official');
    }
}

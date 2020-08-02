<?php

namespace App\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = RouteServiceProvider::APPLICANTS_HOME;

    public function __construct()
    {
        $this->middleware('guest:web_applicant')->except('logout');
    }
    public function showLoginForm(){
        return view('applicant.auth.login');
    }

    protected function loggedOut(Request $request)
    {
        return redirect(route('applicant.login'));
    }
}

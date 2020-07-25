<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::ADMIN_HOME;

    public function __construct()
    {
        $this->middleware('guest:web_admin')->except('logout');
    }

    public function showLoginForm(){
        return view('admin.auth.login');
    }

    protected function loggedOut(Request $request)
    {
        return redirect(route('admin.login'));
    }

    protected function guard()
    {
        return Auth::guard('web_admin');
    }

}

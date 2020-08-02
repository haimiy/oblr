<?php

namespace App\Http\Controllers\Applicants;

use App\Admin;
use App\Applicant;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::APPLICANTS_HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }


    public function showRegistrationForm(){
        return view('applicant.auth.register');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:applicants'],
            'phone' => ['required', 'string', 'max:20', 'unique:applicants'],
            'gender' => ['required', 'string', 'in:male,female'],
            'dob' => ['required', 'date'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return Applicant::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'gender' => $data['gender'],
            'dob' => $data['dob'],
            'address_id' => 12,
            'password' => Hash::make($data['password']),
        ]);
    }
}

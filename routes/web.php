<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/login', function () {
    return view('admin.auth.login');
});

Route::get('/applicants/login', function () {
    return view('applicant.auth.login');
});


Route::get('/applicants/register', 'Applicants\RegistrationController@showRegistrationForm')->name('applicants.register');
Route::post('/applicants/register', 'Applicants\RegistrationController@register');
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

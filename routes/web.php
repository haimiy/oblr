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

/** Applicant Routes **/
Route::prefix('applicants')->group(function (){

    /** Applicant Auth **/
    //register
    Route::get('/applicants/register', 'Applicants\RegistrationController@showRegistrationForm')->name('applicants.register');
    Route::post('/applicants/register', 'Applicants\RegistrationController@register');
    //loin
    Route::get('login', 'Applicants\LoginController@showLoginForm')->name('applicants.login');
    Route::post('login','Applicants\LoginController@login')->name('applicants.login');
    //logout
    Route::get('logout', 'Applicants\LoginController@logout')->name('applicants.logout');

    /** Auth routes **/
    Route::middleware(['auth'])->group(function (){
        /** Applicant Home **/
        Route::get('home','Applicants\HomeController@showApplicantHome')->name('applicants.home');
    });
});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

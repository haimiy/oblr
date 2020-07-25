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
    Route::get('register', 'Applicants\RegistrationController@showRegistrationForm')->name('applicants.register');
    Route::post('register', 'Applicants\RegistrationController@register');
    //loin
    Route::get('login', 'Applicants\LoginController@showLoginForm')->name('applicants.login');
    Route::post('login','Applicants\LoginController@login')->name('applicants.login');
    //logout
    Route::get('logout', 'Applicants\LoginController@logout')->name('applicants.logout');

    /** Auth routes **/
    Route::middleware(['auth'])->group(function (){
        /** Applicant Home **/
        Route::get('home','Applicants\HomeController@showApplicantHome')->name('applicants.home');
        /** Licences **/
        Route::get('licenses','LicenseController@showAllApplicantLicense')->name('applicants.licenses');

        /** Application Requesting **/
        Route::get('applications','ApplicationController@showAllApplicantApplicationRequest')->name('applicants.applications');
        Route::get('applications/request','ApplicationController@showApplicantApplicationRequestForm')->name('applicants.applications.request');
        Route::post('applications/request','ApplicationController@storeApplicantApplicationRequest')->name('applicants.applications.request');
        Route::get('applications/pending','ApplicationController@showAllApplicantPendingApplicationRequest')->name('applicants.applications.pending');
        Route::get('applications/fail','ApplicationController@showAllApplicantFailApplicationRequest')->name('applicants.applications.fail');

        Route::get('profile','Applicants\ApplicantsController@showApplicantProfileSetting')->name('applicants.profile');

        Route::prefix('ajax')->group(function (){
            //home
            Route::get('applications','Applicants\HomeController@ajaxLoadAllApplicationsDataTable')->name('applicants.ajax.application');
            Route::get('dashboard','Applicants\HomeController@ajaxLoadDashboardData')->name('applicants.ajax.dashboard');
            //application
            Route::get('sector/{sector_id}/categories','ApplicationController@ajaxLoadSectorCategories' );
            Route::get('categories/{category_id}/business_types','ApplicationController@ajaxLoadCategoryBusinessTypes' );
            Route::get('regions/{region_id}/districts','ApplicationController@ajaxLoadRegionDistricts' );
            Route::get('business_types/{business_type_id}/permissions','ApplicationController@ajaxLoadBusinessTypePermissions' );
        });
    });
});


Route::get('/home', 'HomeController@index')->name('home');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('file/view/{file}', function ($file) {
    return view('home',['file'=>$file]);
});

/** Applicant Routes **/
Route::prefix('applicant')->as('applicant.')->group(function (){

    /** Applicant Auth **/
    //register
    Route::get('register', 'Applicants\RegistrationController@showRegistrationForm')->name('register');
    Route::post('register', 'Applicants\RegistrationController@register');
    //loin
    Route::get('login', 'Applicants\LoginController@showLoginForm')->name('login');
    Route::post('login','Applicants\LoginController@login')->name('login');
    //logout
    Route::post('logout', 'Applicants\LoginController@logout')->name('logout');

    /** Auth routes **/
    Route::middleware(['auth'])->group(function (){
        /** Applicant Home **/
        Route::get('home','Applicants\HomeController@showApplicantHome')->name('home');
        /** Licences **/
        Route::get('licenses','LicenseController@showAllApplicantLicense')->name('licenses');

        /** Application Requesting **/
        Route::get('applications','ApplicationController@showAllApplicantApplicationRequest')->name('applications');
        Route::get('applications/request','ApplicationController@showApplicantApplicationRequestForm')->name('applications.request');
        Route::post('applications/request','ApplicationController@storeApplicantApplicationRequest')->name('applications.request');
        Route::get('applications/pending','ApplicationController@showAllApplicantPendingApplicationRequest')->name('applications.pending');
        Route::get('applications/fail','ApplicationController@showAllApplicantFailApplicationRequest')->name('applications.fail');

        Route::get('/','Applicants\HomeController@showApplicantHome')->name('home');

        Route::get('licenses','LicenseController@showAllApplicantLicense')->name('licenses');

        Route::get('applications','ApplicationController@showAllApplicantApplicationRequest')->name('applications');
        Route::get('applications/request','ApplicationController@showApplicantApplicationRequestForm')->name('applications.request');
        Route::get('applications/pending','ApplicationController@showAllApplicantPendingApplicationRequest')->name('applications.pending');
        Route::get('applications/fail','ApplicationController@showAllApplicantFailApplicationRequest')->name('applications.fail');


        Route::get('profile','Applicants\ApplicantsController@showApplicantProfileSetting')->name('profile');

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


// Admin Guest Routes
Route::as('admin.')->prefix('admin')->group(function (){
    Route::get('login', 'Admin\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Admin\LoginController@login');
});

// Authenticated Admin Routes
Route::namespace('Admin')->middleware('auth:web_admin')->as('admin.')->prefix('admin')->group(function (){
    Route::get('/', 'AdminController@index')->name('home');

    Route::post('logout', 'LoginController@logout')->name('logout');
});

// Government Officials Guest Routes
Route::as('gvt.')->prefix('governmentofficial')->group(function (){
    Route::get('login', 'GovernmentOfficial\LoginController@showLoginForm')->name('login');
    Route::post('login', 'GovernmentOfficial\LoginController@login');
});

// Authenticated Government Official Routes
Route::namespace('GovernmentOfficial')->middleware('auth:web_government_official')->as('gvt.')->prefix('governmentofficial')->group(function (){
    Route::get('/', 'GovernmentOfficialController@index')->name('home');

    //request review
    Route::get('applications/{id}/review','GovernmentOfficialController@applicationRequestReview');
    Route::post('applications/{id}/review','GovernmentOfficialController@applicationRequestReviewStore')->name('applications.review');
    //ajax
    Route::get('ajax/dashboard','GovernmentOfficialController@ajaxLoadDashboard');

    Route::post('logout', 'LoginController@logout')->name('logout');
});

Route::get('/home', 'HomeController@index')->name('home');

<?php

namespace App\Http\Controllers;

use App\Application;
use App\License;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LicenseController extends Controller
{
    public function showAllApplicantLicense(){
        $user_id = request()->user()->id;
        $licenses =
            DB::select(DB::raw("select * from applications  right join applicant_details on applications.applicant_details_id=applicant_details.id right join licenses on licenses.applicant_details_id=applicant_details.id where applications.applicant_id=$user_id"));

        return view('applicant.view_license',['licenses'=>$licenses]);
    }
}

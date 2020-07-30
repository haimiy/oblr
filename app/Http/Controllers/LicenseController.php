<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

use PDF;

class LicenseController extends Controller
{
    public function showAllApplicantLicense(){
        $user_id = request()->user()->id;
        $licenses =
            DB::select("select * from applications  right join applicant_details on applications.applicant_details_id=applicant_details.id right join licenses on licenses.applicant_details_id=applicant_details.id left join  license_histories on license_histories.id =(select id from license_histories where license_histories.license_number = licenses.license_number ORDER BY id DESC LIMIT 1) where applications.applicant_id=$user_id");
//        return $licenses;
        return view('applicant.view_license',['licenses'=>$licenses]);
    }

    public function downloadLicense(PDF $pdf,$id){
        $user_id = request()->user()->id;
        $license =
            DB::select("select  licenses.license_number,applicant_details.first_name,applicant_details.last_name,business_details.name as business_name,entity_types.name as entity_type_name,business_types.name as business_type_name,license_histories.date_of_issue,license_histories.expiry_date,districts.name as district_name,regions.name as region_name,permissions.issuing_agency from applications ".
                "right join applicant_details on applications.applicant_details_id=applicant_details.id ".
                "right join licenses on licenses.applicant_details_id=applicant_details.id ".
                "left join entity_types on entity_types.id = licenses.entity_id  ".
                "left join business_types on business_types.id = licenses.business_type_id ".
                "left join  license_histories on license_histories.id =(select id from license_histories  ORDER BY id DESC LIMIT 1) ".
                "left join business_details on business_details.id = licenses.business_details_id  ".
                "left join districts on districts.id = business_details.address_id ".
                "left join regions on regions.id = districts.region_id ".
                "left join business_type_permission on business_type_permission.business_type_id = business_types.id ".
                "left join permissions on permissions.id = business_type_permission.permission_id ".
                "where applications.applicant_id=$user_id and licenses.license_number = '$id'");
//        return $license;


        $pdf = PDF::loadView('layouts.license_layout',compact('license'));
        return $pdf->download('license.pdf');
//        return $pdf->download('disney.pdf');
//        return view('layouts.license_layout',['license'=>$license]);
    }
}

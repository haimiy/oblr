<?php

namespace App\Http\Controllers\GovernmentOfficial;

use App\Application;
use App\ApplicationStatus;
use App\Http\Controllers\Controller;
use App\License;
use App\LicenseHistory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class GovernmentOfficialController extends Controller
{
    public function index(){
        $address_id = request()->user()->address_id;
        $applications = DB::select("select applications.id,business_details.name,applicant_details.first_name,applicant_details.last_name,entity_types.name as entity_type_name,business_types.name as business_type_name,applications.status,applications.comment,applications.application_type from business_details  right join applications on applications.business_details_id = business_details.id left join applicant_details on applications.applicant_details_id=applicant_details.id left join entity_types on applications.entity_type_id =entity_types.id left join business_types on applications.business_type_id = business_types.id where business_details.address_id = $address_id and applications.status=false");
        return view('government_official.home',['applications'=>$applications]);
    }

    public function showGovernmentOfficialProfile(){
        return view('government_official.profile');
    }
    public function applicationRequestReview($id){
        $application =Application::find($id);
        return view('government_official.application_request_review',['application'=>$application]);
    }
    public function applicationRequestReviewStore(Request $request,$id){
        $license_id = "AAA111AA11";
        if (($license = License::latest()->first()) != null) {
            $license_id = ++$license->license_number;
        }

        if ($request->approve == "approve") {
            $application = Application::find($id);
            $application->status = true;
            $application->save();
            ApplicationStatus::create([
                'application_id'=>$application->id,
                'is_accepted'=>true,
            ]);
            if($application->application_type == 'renewal'){
                $license = $application->applicantDetail->license;
                LicenseHistory::create([
                    'license_number'=>$license->license_number,
                    'date_of_issue'=>Carbon::now(),
                    'expiry_date'=>Carbon::now()->addYear(1),
                    'application_id'=>$id
                ]);
            }
            else{


                $license = License::create([
                    'license_number'=>$license_id,
                    'business_type_id' => $application->business_type_id,
                    'entity_id' => $application->entity_type_id,
                    'applicant_details_id' => $application->applicant_details_id,
                    'business_details_id' => $application->business_details_id
                ]);

                LicenseHistory::create([
                    'license_number'=>$license->license_number,
                    'date_of_issue'=>Carbon::now(),
                    'expiry_date'=>Carbon::now()->addYear(1),
                    'application_id'=>$id
                ]);
            }

//
            return redirect(route('gvt.home'));
        }
        else if ($request->approve == "reject"){
            $application = Application::find($id);
            $application->status = true;
            $application->comment = $request->comment;
            $application->save();
            ApplicationStatus::create([
                'application_id'=>$application->id,
                'is_accepted'=>false,
            ]);
            return redirect(route('gvt.home'));
        }
        else {
            return back();
        }
    }
        //ajax
    public function ajaxLoadDashboard(){
        $address_id = request()->user()->address_id;
        $applications = DB::select("select * from business_details  right join applications on applications.business_details_id = business_details.id where business_details.address_id = $address_id and applications.status=false");
        $licenses =DB::select("select * from business_details  right join licenses on licenses.business_details_id = business_details.id where business_details.address_id = $address_id");;
        return response()->json(['total_applicant_applications'=>count($applications),'total_applicant_licenses'=>count($licenses)]);
    }
}

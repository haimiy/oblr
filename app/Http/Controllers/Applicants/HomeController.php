<?php

namespace App\Http\Controllers\Applicants;

use App\Application;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class HomeController extends Controller
{

    public function showApplicantHome(){
        $applications = Application::with(['applicantDetail','businessDetail','entityType','businessType'])->where('applicant_id',request()->user()->id)->get();


//        return $applications[0]->applicantDetail;
        return view('applicant.home',['applications' => $applications]);
    }

    public function ajaxLoadDashboardData(){
        $applications = Application::where('status',false)->where('applicant_id',\request()->user()->id)->get();
        $user_id = request()->user()->id;
        $licenses =
            DB::select("select * from licenses left join applicant_details on applicant_details.id=licenses.applicant_details_id where (select applications.applicant_id from applications where applications.applicant_details_id = applicant_details.id limit 1) = $user_id");
        return response()->json(['total_applicant_applications'=>count($applications),'total_applicant_licenses'=>count($licenses)]);
    }

    //ajax Processing
//    public function  ajaxLoadAllApplicationsDataTable(){
//        $applications = Application::with(['applicantDetail','businessDetail','entityType','businessType'])->where('applicant_id',request()->user()->id)->get();
//        $applications_data=[];
//        foreach ($applications as $application)
//        {
//            $data = [
//                'id'=> $application->id,
//                'business_name'=> $application->businessDetail->name,
//                'applicant'=> $application->applicantDetail->first_name." ".$application->applicantDetail->last_name,
//                'entity_type' => $application->entityType->name,
//                'business_type' => $application->businessType->name,
//                'status'=> $application->status ==0 ? "<b>pending</b>":"processed" ,
//                'comment'=>$application->comment==NULL? "No Comment":$application->comment
//            ];
//            array_push($applications_data,$data);
//        }
////        return $applications_data;
//        if(request()->ajax()){
//            $data = $applications_data;
////
//            try {
//                return Datatables::of($data)
//                    ->addIndexColumn()
//                    ->addColumn('action', function ($row) {
////                        $btn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
//                        $btn ="Button";
//                        return $btn;
//                    })
//                    ->rawColumns(['action'])
//                    ->make(false);
//            } catch (\Exception $e) {
//            }
//        }
//
////        return NULL;
//    }

}

<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\ApplicantDetail;
use App\Application;
use App\BusinessDetail;
use App\BusinessType;
use App\Category;
use App\District;
use App\Document;
use App\EntityType;
use App\Helper\Helper;
use App\Regions;
use App\Sector;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApplicationController extends Controller
{
    public function showAllApplicantApplicationRequest(){
        $applications = Application::with(['applicantDetail','businessDetail','entityType','businessType'])->where('applicant_id',request()->user()->id)->get();

        return view('applicant.view_application_history',['applications'=>$applications]);
    }
    public function showAllApplicantPendingApplicationRequest(){
        $applications = Application::with(['applicantDetail','businessDetail','entityType','businessType'])->where('applicant_id',request()->user()->id)->where('status',false)->get();

        return view('applicant.pending_application',['applications'=>$applications]);
    }
    public function showAllApplicantFailApplicationRequest(){
        return view('applicant.fail_application');
    }
    public function showApplicantApplicationRequestForm(){
        $entity_types = EntityType::all();
        $sectors = Sector::all();
        $regions = Regions::all();
        return view('applicant.application',['entity_types'=>$entity_types,'sectors'=>$sectors,'regions'=>$regions]);
    }

    public function storeApplicantApplicationRequest(Request $request){
        /* TODO: file validation (pdf) */
        $path = 'images/upload/document';

        $applicant_details=ApplicantDetail::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->applicant_email,
            'phone'=>$request->applicant_phone,
            'gender'=>$request->gender,
            'dob'=>$request->dob,
            'nationality'=>$request->nationality,
            'address_id'=>$request->applicant_district_id,
        ]);
        $business_details = BusinessDetail::create([
            'name'=> $request->business_name,
            'email'=> $request->business_email,
            'phone'=> $request->business_phone,
            'address_id'=> $request->business_district_id,
            'address_status'=> $request->address_status,
        ]);
        $application = Application::create([
            'applicant_id'=>$request->user()->id,
            'entity_type_id'=>$request->entity_type,
            'business_type_id'=>$request->business_type_id,
            'applicant_details_id'=>$applicant_details->id,
            'business_details_id'=>$business_details->id,
            'status'=>0,
            'application_type'=>$request->application_type,
        ]);


        $proof_doc = $request->file('proof_doc');
        $memorandum_doc = $request->file('memorandum_doc');
        $tin_doc = $request->file('tin_doc');


        $proof_doc_file_name = Helper::generateFilename('citizenship_or_residence_proof_doc',$proof_doc->getClientOriginalExtension());
        $memorandum_doc_file_name = Helper::generateFilename('memorandum_doc',$memorandum_doc->getClientOriginalExtension());
        $tin_doc_file_name = Helper::generateFilename('Tax_Identification_No',$tin_doc->getClientOriginalExtension());



        //save document
        if ($proof_doc->move($path,$proof_doc_file_name) && $memorandum_doc->move($path,$memorandum_doc_file_name) && $tin_doc->move($path,$tin_doc_file_name))
        {

            if ($request->has('permit_doc')){
                $permit_doc = $request->file('permit_doc');
                $permit_doc_file_name = Helper::generateFilename('permission_document',$permit_doc->getClientOriginalExtension());
                $permit_doc->move($path,$permit_doc_file_name);
                Document::create([
                    'file'=>$permit_doc_file_name,
                    'application_id'=>$application->id,
                    'document_type_id'=>4
                ]);
            }
            Document::create([
                    'file'=>$proof_doc_file_name,
                    'application_id'=>$application->id,
                    'document_type_id'=>3
                ]);
            Document::create([
                    'file'=>$memorandum_doc_file_name,
                    'application_id'=>$application->id,
                    'document_type_id'=>2
                ]);
            Document::create([
                    'file'=>$tin_doc_file_name,
                    'application_id'=>$application->id,
                    'document_type_id'=>1
                ]);
            return back();
        }
        return "fail";
    }

    //ajax calls
    public function ajaxLoadSectorCategories($sector_id){
        $sector_categories = Category::where('sector_id',$sector_id)->get();
        return response()->json(['sector_categories'=>$sector_categories]);
    }
    public function ajaxLoadCategoryBusinessTypes($category_id){
        $category_business_types = BusinessType::where('category_id','=',$category_id)->get();
        return response()->json(['category_business_types'=>$category_business_types]);
    }

    public function ajaxLoadRegionDistricts($region_id)
    {
        $district = District::where('region_id',$region_id)->get();
        return response()->json(['districts'=>$district]);
    }

    public function ajaxLoadBusinessTypePermissions($business_type_id){
        $business_type =BusinessType::find($business_type_id);
        if ($business_type != null)
        {
            $permissions = BusinessType::find($business_type_id)->permissions;
            return response()->json(['permissions'=>$permissions]);
        }
        return null;
    }

}

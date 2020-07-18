<?php

namespace App\Http\Controllers;

use App\BusinessType;
use App\Category;
use App\District;
use App\EntityType;
use App\Regions;
use App\Sector;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function showAllApplicantApplicationRequest(){
        return view('applicant.view_application_history');
    }
    public function showAllApplicantPendingApplicationRequest(){
        return view('applicant.pending_application');
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

    public function ajaxLoadBusinessTypePermit($business_type_id){
        
    }

}

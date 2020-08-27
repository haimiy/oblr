<?php

namespace App\Http\Controllers\Admin;

use App\District;
use App\Http\Controllers\Controller;
use App\Regions;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home');
    }
    public function showAdminProfile(){
        return view('admin.profile');
    }
    public function manageAddress(){
        $region = Regions::all();
        return view('admin.manage_address',['regions'=>$region]);
    }
    public function addAddress(Request $request){
//        District::all()
        District::create($request->all());
        return back();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Address;
use App\District;
use App\GovernmentOfficial;
use App\Http\Controllers\Controller;
use App\Regions;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function MongoDB\BSON\toJSON;

class GovernmentOfficialController extends Controller
{
    public function index()
    {
        $gvt = GovernmentOfficial::all();
        $regions = Regions::all();
        return view('admin.governmentofficial.index', ['gvt'=>$gvt,'regions'=>$regions ]);
    }


    public function create()
    {
        $regions = Regions::all('id', 'name');
        $districts = District::all('id', 'name', 'region_id');
        return view('admin.governmentofficial.create', compact('regions', 'districts'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:government_officials',
            'gender' => 'required',
            'dob' => 'required|date|before:'. Carbon::now()->subYear(18),
            'password' => 'required|min:6|confirmed',
            'address_id' => 'required|integer|exists:districts,id',
        ]);

        $data = $request->all();

        $data['created_by'] = Auth::id();
        $data['password']=Hash::make($data['password']);
        $gvtofficial = GovernmentOfficial::create($data);

        $gvt = GovernmentOfficial::all();

        return view('admin.governmentofficial.index', compact('gvt'));
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
    public function ajaxLoadRegionDistricts($region_id)
    {
        $district = District::where('region_id',$region_id)->get();
        return response()->json(['districts'=>$district]);
    }
}

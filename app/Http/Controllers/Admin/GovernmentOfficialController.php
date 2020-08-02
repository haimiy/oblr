<?php

namespace App\Http\Controllers\Admin;

use App\Address;
use App\District;
use App\GovernmentOfficial;
use App\Http\Controllers\Controller;
use App\Regions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function MongoDB\BSON\toJSON;

class GovernmentOfficialController extends Controller
{
    public function index()
    {
        $gvt = GovernmentOfficial::all();

        return view('admin.governmentofficial.index', compact('gvt'));
    }


    public function create()
    {
        $regions = Regions::all('id', 'name');
        $districts = District::all('id', 'name', 'region_id');
        return view('admin.governmentofficial.create', compact('regions', 'districts'));
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $address = Address::create($data);

        $data['address_id'] = $address->id;
        $data['created_by'] = Auth::id();
        $gvtofficial = GovernmentOfficial::create($data);
        $gvtofficial->password = Hash::make($data['password']);
        $gvtofficial->save();

        $address->addressable_id = $gvtofficial->id;
        $address->addressable_type = 'App\GovernmentOfficial';

        $address->save();

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
}

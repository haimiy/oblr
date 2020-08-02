<?php

namespace App\Http\Controllers\Admin;

use App\District;
use App\GovernmentOfficial;
use App\Http\Controllers\Controller;
use App\Regions;
use Illuminate\Http\Request;

class GovernmentOfficialController extends Controller
{
    public function index()
    {
        $gvt = GovernmentOfficial::all();

        return view('admin.governmentofficial.index', compact('gvt'));
    }


    public function create()
    {
        $regions = Regions::all();
        $districts = District::all('id', 'name')->toJson();
//        return $districts;
        return view('admin.governmentofficial.create', compact('regions', 'districts'));
    }


    public function store(Request $request)
    {
        return $request;
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

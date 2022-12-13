<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(){
        $locations = Location::all();
        return view('Admin.location',compact('locations'));
    }

    public function store(Request $request)
    {
        $valide = $request->validate(['name'=>'required']);
        Location::create($valide);

        return redirect()->back();
    }
}

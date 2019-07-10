<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Location\District;
use App\Location\Provinces;
use App\Location\Regency;
use App\Location\Village;

class LocationController extends Controller
{
    public function provinces()
    {
        $provinces = Provinces::all();
        return view('auth.register', compact('provinces'));
    }

    public function regencies()
    {
        $provincies_id = Input::get('province_id');
        $regencies = Regencies::where('province_id', '=', $provincies_id)->get();
        return response()->json($regencies);
    }
}

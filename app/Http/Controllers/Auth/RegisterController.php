<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Location\District;
use App\Location\Provinces;
use App\Location\Regency;
use App\Location\Village;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function provinces()
    {
        $provinces = Provinces::all();
        return view('auth.register', compact('provinces'));
    }

    public function regency(): JsonResponse
    {
        $regencies = Regency::whereProvinceID(request('province'))->orderBy('name', 'ASC')->get();

        return response()->json($regencies);
    }

    public function district(): JsonResponse
    {
        $districts = District::whereRegencyId(request('regency'))->orderBy('name','ASC')->get();

        return response()->json($districts);
    }

    public function village(): JsonResponse
    {
        $villages = Village::whereDistrictId(request('district'))->orderBy('name', 'ASC')->get();

        return response()->json($villages);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'province' => 'required|integer|exits:provinces, id',
            'regency' => 'required|integer|exits:regencies, id',
            'district' => 'required|integer|exits:districts, id',
            'village' => 'required|integer|exits:villages, id',
            'no_hp' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'alamat' => $data['alamat'],
            'province' => $data['province'],
            'regency' => $data['regency'],
            'district' => $data['district'],
            'village' => $data[''],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}

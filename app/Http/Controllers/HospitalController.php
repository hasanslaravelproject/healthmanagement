<?php

namespace App\Http\Controllers;

use App\Hospital;
//use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index()
    {
      // products = Post::where('user_id', Auth::User()->id)->where('company_id', Auth::User()->company_id)->get();
     //dd(products);

       $hospitals = Hospital::latest()->paginate(5);
       // return view('company.index', compact('companys', 'products'))
        return view('hospital.index', compact('hospitals'))
       ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $hos=Hospital::all();
        return view('hospital.create', compact('hos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'branch_code' => 'required',
            'address' => 'required',
            'contact_number' => 'required',
            'email' => 'required',
            'status' => 'required',

        ]);
        $userData = $request->except(['profile_photo']);
        if ($request->profile_photo) {
            $userData['profile_photo'] = parse_url($request->profile_photo, PHP_URL_PATH);
        }
        Hospital::create($userData);
//Hospital::create($request->all());

        return redirect()->route('hospitals.index')
                        ->with('success','company created successfully.');
    }

    public function show(Hospital $hospital)
    {
        //
    }


    public function edit(Hospital $hospital){

     return view('hospital.edit',compact('hospital'));
    }

    public function update(Request $request, Hospital $hospital)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'branch_code' => 'required',
            'address' => 'required',
            'contact_number' => 'required',
            'email' => 'required',
            'status' => 'required',

        ]);
        $userData = $request->except(['profile_photo']);
        if ($request->profile_photo) {
            $userData['profile_photo'] = parse_url($request->profile_photo, PHP_URL_PATH);
        }
        $hospital->update($userData);
//$hospital->update($request->all());
        return redirect()->route('hospitals.index')
                        ->with('success','hospital updated successfully');
    }

    public function destroy(Hospital $hospital)
    {
        $hospital->delete();
        return redirect()->route('hospitals.index')
                        ->with('success','hospital deleted successfully');

    }
}

<?php

namespace App\Http\Controllers;

use App\Patient;
//use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
      // products = Post::where('user_id', Auth::User()->id)->where('company_id', Auth::User()->company_id)->get();
     //dd(products);

       $patients = Patient::latest()->paginate(5);
       // return view('company.index', compact('companys', 'products'))
        return view('patient.index', compact('patients'))
       ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $patients=Patient::all();
        return view('patient.create', compact('patients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'contact_number' => 'required',
            'email' => 'required',
            'seat_no' => 'required',
            'status' => 'required',

        ]);
        $userData = $request->except(['profile_photo']);
        if ($request->profile_photo) {
            $userData['profile_photo'] = parse_url($request->profile_photo, PHP_URL_PATH);
        }
        Patient::create($userData);
//Hospital::create($request->all());

        return redirect()->route('patients.index')
                        ->with('success','patient created successfully.');
    }

    public function show(Patient $patient)
    {
        //
    }


    public function edit(Patient $patient){

     return view('patient.edit',compact('patient'));
    }

    public function update(Request $request, patient $patient)
    {
        $request->validate([
           'name' => 'required',
            'address' => 'required',
            'contact_number' => 'required',
            'email' => 'required',
            'seat_no' => 'required',
            'status' => 'required',

        ]);
        $userData = $request->except(['profile_photo']);
        if ($request->profile_photo) {
            $userData['profile_photo'] = parse_url($request->profile_photo, PHP_URL_PATH);
        }
        $patient->update($userData);
//$patient->update($request->all());
        return redirect()->route('patients.index')
                        ->with('success','patient updated successfully');
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index')
        ->with('success','patient delete successfully.');

    }
}

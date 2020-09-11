<?php

namespace App\Http\Controllers;

use App\Doctor;
//use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
      // products = Post::where('user_id', Auth::User()->id)->where('company_id', Auth::User()->company_id)->get();
     //dd(products);

       $doctors = Doctor::latest()->paginate(5);
       // return view('company.index', compact('companys', 'products'))
        return view('doctor.index', compact('doctors'))
       ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $doctors=Doctor::all();
        return view('doctor.create', compact('doctors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'hospital_name' => 'required',

            'department' => 'required',

            'email' => 'required',
            'status' => 'required',

        ]);
        $userData = $request->except(['profile_photo']);
        if ($request->profile_photo) {
            $userData['profile_photo'] = parse_url($request->profile_photo, PHP_URL_PATH);
        }
        Doctor::create($userData);
//Doctor::create($request->all());

        return redirect()->route('doctors.index')
                        ->with('success','company created successfully.');
    }

    public function show(Doctor $doctor)
    {
        //
    }


    public function edit(Doctor $doctor){

     return view('doctor.edit',compact('doctor'));
    }

    public function update(Request $request, Doctor $doctor)
    {
        $request->validate([
            'name' => 'required',
            'hospital_name' => 'required',

            'department' => 'required',

            'email' => 'required',
            'status' => 'required',

        ]);
        $userData = $request->except(['profile_photo']);
        if ($request->profile_photo) {
            $userData['profile_photo'] = parse_url($request->profile_photo, PHP_URL_PATH);
        }
        $doctor->update($userData);
//$Doctor->update($request->all());
        return redirect()->route('doctors.index')
                        ->with('success','Doctor updated successfully');
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('doctors.index')
                        ->with('success','Doctor deleted successfully');

    }
}

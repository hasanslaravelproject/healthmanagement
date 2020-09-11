<?php

namespace App\Http\Controllers;

use App\Patientadmission;
use App\Patient;
use App\Doctor;
use App\Hospital;
use App\Seat;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
class PatientadmissionController extends Controller
{
    public function index()
    {
        $patientadmissions = Patientadmission::latest()->paginate(5);
        dd($patientadmissions);
        return view('patientadmission.index', compact('patientadmissions'))
        ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function create()
    {
   $serials = IdGenerator::generate(['table' => 'patientadmissions', 'length' => 10, 'field'=>'case_id','prefix' =>date('dmy')]);
   // $serials = IdGenerator::generate(['table' => 'patientadmissions', 'length' => 10, 'field'=>'case_id','prefix' =>date('dmyy').'-'.'Has']);
       $patients=Patient::all();
       $doctors=Doctor::all();
       $hospitals=Hospital::all();
       $seats=Seat::all();
        return view('patientadmission.create', compact('patients','doctors','hospitals','seats','serials'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'case_id' => 'required',
            'patient_id' => 'required',
            'hospital_id' => 'required',
            'reffered_by' => 'required',
            'doctor_id' => 'required',
            'seat_id' => 'required',
            'admitted_by' => 'required',
            'status' => 'required',

        ]);
        $userData = $request->except(['profile_photo']);
        if ($request->profile_photo) {
            $userData['profile_photo'] = parse_url($request->profile_photo, PHP_URL_PATH);
        }
        Patientadmission::create($userData);
        return redirect()->route('patientadmissions.index')
                        ->with('success','admission created successfully.');
    }

    public function show(Patientadmission $patientadmission)
    {
        //
    }


    public function edit(Patientadmission $patientadmission){

     return view('patientadmission.edit',compact('patientadmission'));
    }

    public function update(Request $request, Patientadmission $patientadmission)
    {
        $request->validate([
            'case_id' => 'required',
            'case_history' => 'required',
            'patient_id' => 'required',
            'reffered_by' => 'required',
            'hospital_id' => 'required',
            'doctor_id' => 'required',
            'seat_id' => 'required',
            'admitted_by' => 'required',
            'status' => 'required',

        ]);
        $userData = $request->except(['profile_photo']);
        if ($request->profile_photo) {
            $userData['profile_photo'] = parse_url($request->profile_photo, PHP_URL_PATH);
        }
        Patientadmission::update($userData);
        return redirect()->route('patientadmissions.index')
                        ->with('success','Patientadmission updated successfully');
    }

    public function destroy(Patientadmission $patientadmission)
    {
        $doctor->delete();
        return redirect()->route('patientadmissions.index')
                        ->with('success','Patientadmission deleted successfully');

    }
}

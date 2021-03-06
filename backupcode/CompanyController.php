<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companys = Company::latest()->paginate(5);  
        return view('company.index', compact('companys'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('company.create');
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
            //'status' => 'required',
        ]);
  
        Company::create($request->all());
   
        return redirect()->route('companys.index')
                        ->with('success','company created successfully.');
    }

    public function show(Company $company)
    {
        //
    }

    public function edit(Company $company)
    {
       
            return view('company.edit',compact('company'));
    }

    public function update(Request $request, Company $company)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'branch_code' => 'required',
            'address' => 'required',
            'contact_number' => 'required',
            'email' => 'required',
            //'status' => 'required',
        ]);
  
        $company->update($request->all());
  
        return redirect()->route('companys.index')
                        ->with('success','company updated successfully');
    }
      
    public function destroy(Company $company)
    {
        $company->delete();        
        return redirect()->route('companys.index')
                        ->with('success','company deleted successfully');
                        
    }
}

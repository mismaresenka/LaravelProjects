<?php

namespace App\Http\Controllers;
use App\Models\Doctor;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::latest()->paginate(5);
      return view ('doctors.index',compact('doctors'))
      ->with('i',(request()->input('page',1)-1)*5);
    }
 
    
    public function create()
    {
        return view('doctors.create');
    }
 
  
    public function store(Request $request)
    {
        $request->validate([
            'DoctorID'=>'required',
            'Firstname'=>'required',
            'LastName'=>'required',
            'Sex'=>'required',
            'Specialization'=>'required',
            'BirthDate'=>'required',
            'Address'=>'required',
            'ContactNumber'=>'required',
        ]);
        Doctor::create($request->all());
        return redirect()->route('doctors.index')
        ->with('success','Doctor record is added successfully!');  
    }
 
    
    public function show(Doctor $doctor)
    {
        
        return view('doctors.show',compact('doctor'));
    }
 
    
    public function edit(Doctor $doctor)
    {
     
        return view('doctors.edit',compact('doctor'));
    }
 
  
    public function update(Request $request, Doctor $doctor)
    {
        $request->validate([]); 
     
     $doctor->update($request->all());
     return redirect()->route('doctors.index')
     ->with('success','Doctor record successfully updated');
    }
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('doctors.index')
        ->with('success','Doctor record deleted');  
    }
 }
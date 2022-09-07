<?php

namespace App\Http\Controllers\Admin;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DoctorFormRequest;

class DoctorController extends Controller
{
    public function index() {
        return view('admin.doctor.index');
    }
    public function create() {
        return view('admin.doctor.create');
    }
    public function store(DoctorFormRequest $request) {
        $validatedData = $request->validated();
        
        $doctor = new Doctor;
        $doctor->name = $validatedData['name'];
        $doctor->surname = $validatedData['surname'];
        $doctor->area = $validatedData['area'];
        $doctor->save();

        return redirect('admin/doctor')->with('message', 'Doctor Added Successfully!');
    }

    public function edit(Doctor $doctor) {
        return view('admin.doctor.edit', compact('doctor'));
    }

    public function update(DoctorFormRequest $request, $doctor) {
        $validatedData = $request->validated();

        $doctor = Doctor::findOrFail($doctor);
        
        $doctor->name = $validatedData['name'];
        $doctor->surname = $validatedData['surname'];
        $doctor->area = $validatedData['area'];
        $doctor->update();

        return redirect('admin/doctor')->with('message', 'Doctor Edited Successfully!');
    
    }
}
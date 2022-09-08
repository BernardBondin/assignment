<?php

namespace App\Http\Controllers\Admin;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeFormRequest;

class EmployeeController extends Controller
{
    public function index() {
        return view('admin.employee.index');
    }
    public function create() {
        return view('admin.employee.create');
    }
    public function store(EmployeeFormRequest $request) {
        $validatedData = $request->validated();
        $employee = new Employee;
        
        $employee->name = $validatedData['name'];
        $employee->surname = $validatedData['surname'];
        $employee->age = $validatedData['age'];

        $employee->address = $validatedData['address'];
        $employee->locality = $validatedData['locality'];
        $employee->area = $validatedData['area'];
        $employee->doctor = $validatedData['doctor'];

        $employee->save();

        return redirect('admin/employee')->with('message', 'Employee Added Successfully!');
    }

    public function edit(Employee $employee) {
        return view('admin.employee.edit', compact('employee'));
    }
    public function update(EmployeeFormRequest $request, $employee) {
        $employee = Employee::findOrFail($employee);

        $validatedData = $request->validated();

        $employee->name = $validatedData['name'];
        $employee->surname = $validatedData['surname'];
        $employee->age = $validatedData['age'];

        $employee->address = $validatedData['address'];
        $employee->locality = $validatedData['locality'];
        $employee->area = $validatedData['area'];
        $employee->doctor = $validatedData['doctor'];

        $employee->update();

        return redirect('admin/employee')->with('message', 'Employee Updated Successfully!');
    }
}
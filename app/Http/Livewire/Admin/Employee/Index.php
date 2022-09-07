<?php

namespace App\Http\Livewire\Admin\Employee;

use Livewire\Component;
use App\Models\Employee;
use Livewire\WithPagination;


class Index extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;

    public $employee_id;

    public function deleteEmployee($employee_id) {
        $this->employee_id = $employee_id;
    }

    public function destroyEmployee() {
        $employee = Employee::find($this->employee_id);
        $employee->delete();
        session()->flash('message', 'Employee Deleted Successfully!');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        $employees = Employee::orderBy('id', 'DESC')->paginate(5);
        return view('livewire.admin.employee.index', ['employees' => $employees]);
    }
}
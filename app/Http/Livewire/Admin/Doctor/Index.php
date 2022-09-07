<?php

namespace App\Http\Livewire\Admin\Doctor;

use App\Models\Doctor;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $doctor_id;

    // public function rules() {
    //     return [
    //         'name' => 'required|string',
    //         'surname' => 'required|string',
    //         'area' => 'required|string'
    //     ];
    // }
    // public function resetInput() {
    //     $this->name = NULL;
    //     $this->surname = NULL;
    //     $this->area = NULL;
    //     $this->doctor_id = NULL;
    // }
    // public function storeDoctor() {
    //     $validatedData = $this->validate();
    //     Doctor::create([
    //         'name' => $this->name,
    //         'surname' => $this->surname,
    //         'area' => $this->area
    //     ]);
    //     session()->flash('message', 'Doctor Added Successfully!');
    //     $this->dispatchBrowserEvent('close-modal');
    //     $this->resetInput();
    // }
    // public function closeModal() {
    //     $this->resetInput();
    // }
    // public function openModal() {
    //     $this->resetInput();
    // }
    // public function editDoctor(int $doctor_id) {
    //     $this->$doctor_id = $doctor_id;
    //     $doctor = Doctor::findOrFail($doctor_id);
    //     $this->name = $doctor->name;
    //     $this->surname = $doctor->surname;
    //     $this->area = $doctor->area;
    // }
    // public function updateDoctor() {
    //     $validatedData = $this->validate();
    //     Doctor::findOrFail($this->doctor_id)->update([
    //         'name' => $this->name,
    //         'surname' => $this->surname,
    //         'area' => $this->area,
    //     ]);
    //     session()->flash('message', 'Doctor Updated Successfully!');
    //     $this->dispatchBrowserEvent('close-modal');
    //     $this->resetInput();
    // }
    public function deleteDoctor($doctor_id) {
        $this->doctor_id = $doctor_id; 
    }
    public function destroyDoctor() {
        $doctor = Doctor::findOrFail($this->doctor_id);
        $doctor->delete();
        session()->flash('message', 'Doctor Deleted Successfully!');
        $this->dispatchBrowserEvent('close-modal');
    }
    public function render() {
        $doctors = Doctor::orderBy('id', 'DESC')->paginate(5);
        return view('livewire.admin.doctor.index', ['doctors' => $doctors])
        ->extends('layouts.admin')
        ->section('content');
    }
}
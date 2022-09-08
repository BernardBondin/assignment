@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Edit Employee
                    <a href="{{ url('admin/employee') }}" class="btn btn-danger btn-sm text-white float-end">BACK</a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/employee/'.$employee->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Name</label>
                            <input type="text" name="name" value="{{ $employee->name }}" class="form-control">
                            @error('name') <small class="text-danger">{{ $message }} </small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Surname</label>
                            <input type="text" name="surname" value="{{ $employee->surname }}" class="form-control">
                            @error('surname') <small class="text-danger">{{ $message }} </small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Age</label>
                            <input type="integer" name="age" value="{{ $employee->age }}" class="form-control">
                            @error('age') <small class="text-danger">{{ $message }} </small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Address</label>
                            <input type="text" name="address" value="{{ $employee->address }}" class="form-control">
                            @error('address') <small class="text-danger">{{ $message }} </small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Locality</label>
                            <input type="text" name="locality" value="{{ $employee->locality }}" class="form-control">
                            @error('locality') <small class="text-danger">{{ $message }} </small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Area</label>
                            <input type="text" name="area" value="{{ $employee->area }}" class="form-control">
                            @error('area') <small class="text-danger">{{ $message }} </small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Doctor</label>
                            <input type="text" name="doctor" value="{{ $employee->doctor }}" class="form-control">
                            @error('doctor') <small class="text-danger">{{ $message }} </small>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-success float-end">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
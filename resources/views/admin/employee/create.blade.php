@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Add New Employee Details:
                    <a href="{{ url('admin/employee/') }}" class="btn btn-danger btn-sm text-white float-end">BACK</a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/employee/') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                            @error('name') <small class="text-danger">{{ $message }} </small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Surname</label>
                            <input type="text" name="surname" class="form-control">
                            @error('surname') <small class="text-danger">{{ $message }} </small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Age</label>
                            <input type="integer" name="age" class="form-control">
                            @error('age') <small class="text-danger">{{ $message }} </small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control">
                            @error('address') <small class="text-danger">{{ $message }} </small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Locality</label>
                            <input type="text" name="locality" class="form-control">
                            @error('locality') <small class="text-danger">{{ $message }} </small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Area</label>
                            <input type="text" name="area" class="form-control">
                            @error('area') <small class="text-danger">{{ $message }} </small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Doctor</label>
                            <input type="text" name="doctor" class="form-control">
                            @error('doctor') <small class="text-danger">{{ $message }} </small>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-success float-end">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
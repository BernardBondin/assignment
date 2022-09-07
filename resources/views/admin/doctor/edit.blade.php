@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Edit Doctor Details:
                    <a href="{{ url('admin/doctor') }}" class="btn btn-danger btn-sm text-white float-end">BACK</a>
                </h3>
            </div>
            <div class="card-body">

                <form action="{{ url('admin/doctor/'.$doctor->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Name</label>
                            <input type="text" name="name" value="{{ $doctor->name }}" class="form-control">
                            @error('name') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Surname</label>
                            <input type="text" name="surname" value="{{ $doctor->surname }}" class="form-control">
                            @error('surname') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Area</label>
                            <input type="text" name="area" value="{{ $doctor->area }}" class="form-control">
                            @error('area') <small class="text-danger">{{$message}}</small>@enderror
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
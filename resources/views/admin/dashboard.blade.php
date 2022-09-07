@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="d-flex justify-content-between flex-wrap">
        <div class="d-flex align-items-end flex-wrap">
          <div class="me-md-3 me-xl-5">

            @if (session('message'))
            <h2 class="alert alert-success">{{ session('message') }}</h2>
            @endif
            
          <div class="d-flex">
            <i class="mdi mdi-home text-muted hover-cursor"></i>
            <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
            <p class="text-primary mb-0 hover-cursor">Analytics</p>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-end flex-wrap">
          <button type="button" class="btn btn-light bg-white btn-icon me-3 d-none d-md-block">
            <i class="mdi mdi-download text-muted"></i>
          </button>
          <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
            <i class="mdi mdi-clock-outline text-muted"></i>
          </button>
          <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
            <i class="mdi mdi-plus text-muted"></i>
          </button>
          <button class="btn btn-primary mt-2 mt-xl-0">Generate report</button>
        </div>
      </div>
    </div>
  </div>

  <div>
    <div class="row">
        <div class="col-md-12">

            @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <div class="card">
                <div class="card-header">
                   <h3>Employee's Doctor</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Address</th>
                                <th>Locality</th>
                                <th>Area</th>
                                <th>Doctor</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            {{-- @foreach ($employees as $employee) --}}
                                
                            <tr>
                              <td>example</td>
                                {{-- <td>{{ $employee->id }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->surname }}</td>
                                <td>{{ $employee->address }}</td>
                                <td>{{ $employee->locality }}</td>
                                <td>{{ $employee->area }}</td>
                                <td>{{ $employee->doctor }}</td> --}}

                                {{-- <td>
                                    <a href="{{ url('admin/employee/'.$employee->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" wire:click="deleteEmployee({{ $employee->id }})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger btn-sm">Delete</a>
                                </td> --}}
                            </tr>

                            {{-- @endforeach --}}

                        </tbody>
                    </table>
                    <div>
                    {{-- {{ $employees->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @push('script')

<script>
    window.addEventListener('close-modal', event => {
        $('#deleteModal').modal('hide');
    });
</script>

@endpush --}}


    
@endsection
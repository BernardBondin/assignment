<div>
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Employee Delete Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

            <form wire:submit.prevent="destroyEmployee">
                <div class="modal-body">
                    <h6>Delete permanently?</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Yes, understood!</button>
                </div>
            </form>
        
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3>Employees
                        <a href="{{ url('admin/employee/create') }}" class="btn btn-primary btn-sm float-end">Add New Employee</a>
                    </h3>
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

                            @foreach ($employees as $employee)
                                
                            <tr>
                                <td>{{ $employee->id }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->surname }}</td>
                                <td>{{ $employee->address }}</td>
                                <td>{{ $employee->locality }}</td>
                                <td>{{ $employee->area }}</td>
                                <td>{{ $employee->doctor }}</td>

                                <td>
                                    <a href="{{ url('admin/employee/'.$employee->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" wire:click="deleteEmployee({{ $employee->id }})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                    <div>
                    {{ $employees->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')

<script>
    window.addEventListener('close-modal', event => {
        $('#deleteModal').modal('hide');
    });
</script>

@endpush
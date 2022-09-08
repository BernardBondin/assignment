<div>
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Doctor Delete</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

        <form wire:submit.prevent="destroyDoctor">
    
            <div class="modal-body">
              <h6>Delete Permanently?</h6>
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

            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3>Doctors
                        <a href="{{ url('admin/doctor/create') }}" class="btn btn-sm btn-primary float-end">Add New Doctor</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Area</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($doctors as $doctor)
                            <tr>
                                <td>{{ $doctor->id }}</td>
                                <td>{{ $doctor->name }}</td>
                                <td>{{ $doctor->surname }}</td>
                                <td>{{ $doctor->area }}</td>

                                <td>
                                    <a href="{{ url('admin/doctor/'.$doctor->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="#" wire:click="deleteDoctor({{$doctor->id}})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    <div>
                        {{ $doctors->links() }}
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
<div>
    <x-record-list :records="$records">
    <div class="table-responsive">
       <table id="datatable" class="table table-bordered dt-responsive  w-100">
        <thead>
          <tr class="table-primary">
            <th>Student Name</th>
            <th>Prescription Name</th>
            <th>Prescribe By</th>
            <th>Log</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($records as $record)
                <tr>
                    <td>{{ $record->Student->name ?? 'Studnet Name'}}</td>
                    <td>{{ $record->pres_name }}</td>
                    <td>{{ $record->doctor->name }}</td>
                    <td>{{ $record->created_at }}</td>
                    <td>
                        <a href="{{ route('prescription.show', $record->id) }}" target="_blank"
                            rel="noopener noreferrer"
                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="mdi mdi-eye"></i>
                        </a>

                        <a href="{{ route('prescription.edit', $record->id) }}" target="_blank"
                            rel="noopener noreferrer"
                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="mdi mdi-pencil"></i>
                        </a>
                        <button type="button" wire:click="confirmDelete({{ $record->id }})"
                            class="btn btn-sm m-1 btn-danger btn-rounded waves-effect waves-light">
                            <i class="fas fa-trash-alt"></i>
                        </button>

                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    </x-record-list>
</div>
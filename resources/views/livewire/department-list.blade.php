<div>
  <x-record-list :records="$records">
    <div class="table-responsive">
        <table class="table table-bordered w-100">
          <thead>
            <tr class="table-primary">
                <th>Department Name</th>
                <th>Deaprtmental Head </th>
                <th>Description</th>
                <th>Log</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($records as $record)
                <tr>
                    <td>{{ $record->department_name}}</td>
                    <td>{{ $record->head_of_department}}</td>
                    <td>{{ $record->description}}</td>
                    <td>{{ $record->created_at}}</td>
                    <td>
                        <button type="button" wire:click="toggleApprove({{$record->id}})"
                          class="btn btn-sm btn-{{$record->is_approved ? 'danger' : 'info'}} btn-rounded waves-effect waves-light mb-2 me-1">
                          <i class="fas fa-check"></i>
                        </button>
                        <a href="{{ route('department.edit', $record->id) }}" target="_blank"
                            rel="noopener noreferrer"
                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="mdi mdi-pencil"></i>
                        </a>
                        <button type="button" wire:click="confirmDelete({{$record->id}})"
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

<div>
    <x-record-list :records="$records">
        <table id="datatable" class="table table-bordered dt-responsive w-100">
            <thead>
                <tr class="table-primary">
                    <th>Name</th>
                    <th>Description</th>
                    <th>Log</th>
                    <th>action</th </tr>
            </thead>
            <tbody>
                @foreach ($records as $record)
                    <tr>
                        <td>{{ $record->title }}</td>
                        <td>{{ $record->parent }}</td>
                        <td>{{ $record->created_at }}</td>
                        <td>
                            <a href="{{ route('budget-head.edit', $record->id) }}" target="_blank"
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
    </x-record-list>

</div>

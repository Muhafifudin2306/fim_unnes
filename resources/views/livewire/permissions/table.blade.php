<table class="table table-hover">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody class="table-border-bottom-0">
        @foreach ($permissions as $permission)

        <tr>
            <td>
                <strong>{{ $permission->name }}</strong>
            </td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-sm btn-danger" wire:click="delete({{ $permission->id }})">
                        <i class="bx bx-trash me-1"></i>
                        Delete
                    </button>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    {{-- Content --}}
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Roles /</span> Roles</h4>

        <!-- Hoverable Table rows -->
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="">Daftar Role</h5>
                    <div class="d-flex">
                        <a href="{{ route('roles.create') }}" class="btn btn-primary">Tambah Role</a>
                        <a href="{{ route('roles.permissions') }}" class="btn ms-2 btn-secondary">Permissions</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Permissions</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($roles as $role)

                        <tr>
                            <td>
                                <strong>{{ $role->name }}</strong>
                            </td>
                            <td>
                                @foreach ($role->permissions as $permission)
                                <span class="badge bg-primary me-1">{{ $permission->name }}</span>
                                @endforeach
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('roles.edit', $role) }}"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <form action="{{ route('roles.destroy', $role) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="dropdown-item" type="submit">
                                                <i class="bx bx-trash me-1"></i>
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Hoverable Table rows -->
    </div>
    {{-- End Content --}}

</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="content-wrapper">

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><a href="{{ route('roles.index') }}" class="text-muted fw-light">Roles /</a>
            Create Role</h4>

        <!-- Basic Layout -->
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Create new role</h5>
                <a href="{{ route('roles.permissions') }}" class="btn ms-2 btn-secondary">Permissions</a>
            </div>
            <div class="card-body">
                <form action="{{ route('roles.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">Role Name</label>
                        <div class="input-group input-group-merge">
                            <span id="name" class="input-group-text"><i class="bx bx-lock"></i></span>
                            <input type="text" required class="form-control @error('name') is-invalid @enderror"
                                id="name" placeholder="Admin" name="name" aria-describedby="name" />
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="table-responsive">
                            <table class="table table-striped table-borderless">
                                <thead>
                                    <tr>
                                        <th class="text-nowrap">Permission</th>
                                        <th class="text-nowrap text-center">Check</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permissions as $per)
                                    <tr>
                                        <td class="text-nowrap">{{ $per->name }}</td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center">
                                                <input class="form-check-input" name="permissions[]" type="checkbox"
                                                    id="defaultCheck1" value="{{ $per->name }}" />
                                            </div>
                                        </td>

                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="d-flex">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('roles.index') }}" class="btn btn-secondary ml-3">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
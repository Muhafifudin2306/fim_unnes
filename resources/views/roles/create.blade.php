@extends('layouts.app')

@section('content')
<div class="content-wrapper">

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Roles/</span> Create Role</h4>

        <!-- Basic Layout -->
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Create new role</h5>
                <small class="text-muted float-end">Merged input group</small>
            </div>
            <div class="card-body">
                <form action="{{ route('roles.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">Role Name</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-lock"></i></span>
                            <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Admin"
                                name="name" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
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

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
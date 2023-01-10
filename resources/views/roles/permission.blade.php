@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    {{-- Content --}}
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Roles /</span> Permissions</h4>

        <!-- Hoverable Table rows -->
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="">Daftar Role</h5>
                    <div class="d-flex">
                        <a href="{{ route('roles.index') }}" class="btn btn-secondary">Roles</a>
                        @livewire('permissions.create')
                    </div>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                @livewire('permissions.table', ['permissions' => $permissions])
            </div>
        </div>
        <!--/ Hoverable Table rows -->
    </div>
    {{-- End Content --}}

</div>
@endsection
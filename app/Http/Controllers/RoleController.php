<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{

    //construct
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }


    public function create()
    {
        $permissions = Permission::all()->sortBy('name');
        return view('roles.create', compact('permissions'));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:roles,name',
        ]);

        $role = Role::create($validator->validated());

        if ($role) {
            $role->syncPermissions($request->permissions);
            notify()->success('Role created successfully', 'Success');
        } else {
            notify()->error('Role not created', 'Error');
        }
        return back();
    }


    public function show($id)
    {
        //
    }


    public function edit(Role $role)
    {
        $permissions = Permission::all()->sortBy('name');
        return view('roles.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, Role $role)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:roles,name',
        ]);

        $update = $role->update($validator->validated());

        if ($update) {
            $role->syncPermissions($request->permissions);
            notify()->success('Role updated successfully', 'Success');
        } else {
            notify()->error('Role not updated', 'Error');
        }

        return back();
    }

    public function destroy(Role $role)
    {
        $del = $role->delete();
        if ($del) {
            notify()->success('Role deleted successfully', 'Success');
        } else {
            notify()->error('Role not deleted', 'Error');
        }
        return back();
    }

    public function permissions()
    {
        $permissions = Permission::all();
        return view('roles.permission', compact('permissions'));
    }
}

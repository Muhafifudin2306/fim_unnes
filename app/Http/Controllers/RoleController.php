<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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
        $role = Role::create([
            'name' => $request->name
        ]);
        $role->syncPermissions($request->permissions);
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
        $role->update($request->all());
        $role->syncPermissions($request->permissions);
        return back();
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return back();
    }

    public function permissions()
    {
        $permissions = Permission::all();
        return view('roles.permission', compact('permissions'));
    }
}

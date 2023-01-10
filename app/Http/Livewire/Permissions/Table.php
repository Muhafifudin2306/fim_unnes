<?php

namespace App\Http\Livewire\Permissions;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class Table extends Component
{
    public $permissions, $name;
    protected $listeners = ['rerender_permission' => 'render'];

    public function render()
    {
        $this->permissions = Permission::all();
        return view('livewire.permissions.table', [
            'permissions' => $this->permissions
        ]);
    }

    public function delete($id)
    {
        $permission = Permission::find($id);
        $permission->delete();
        $this->emit('rerender_permission');
    }

    public function edit($id)
    {
        $permission = Permission::find($id);
        $this->name = $permission->name;
    }

    public function update($id)
    {
        $permission = Permission::find($id);
        $permission->update([
            'name' => $this->name
        ]);
        $this->emit('rerender_permission');
    }
}

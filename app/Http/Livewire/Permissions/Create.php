<?php

namespace App\Http\Livewire\Permissions;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class Create extends Component
{


    public $name;

    protected $rules = [
        'name' => 'max:100|min:3'
    ];

    public function render()
    {
        return view('livewire.permissions.create');
    }

    public function store()
    {
        $this->validate();
        Permission::create([
            'name' => $this->name
        ]);

        $this->name = '';
        $this->emit('rerender_permission');
    }
}

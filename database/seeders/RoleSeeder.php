<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Role::truncate();
        Permission::truncate();
        Schema::enableForeignKeyConstraints();

        Permission::create(['name' => 'create post']);
        Permission::create(['name' => 'edit post']);
        Permission::create(['name' => 'delete post']);

        Role::create([
            'name' => 'individu',
        ])->syncPermissions(['create post', 'edit post', 'delete post']);
        Role::create([
            'name' => 'sekolah',
        ])->syncPermissions(['create post', 'delete post']);
        Role::create([
            'name' => 'mahasiswa',
        ])->syncPermissions(['create post']);

        Role::create(['name' => 'admin'])
            ->syncPermissions(['create post', 'edit post', 'delete post']);
        Role::create(['name' => 'panitia'])
            ->syncPermissions(['create post', 'edit post', 'delete post']);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Grade;
use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grade::create([
            'name'         => 'MCES',
            'price'        => 45000,
            'description'  => 'Mathematic Competition for Elementary School'
        ]);
        Grade::create([
            'name'         => 'MCJHS',
            'price'        => 45000,
            'description'  => 'Mathematic Competition for Junior High School'
        ]);
        Grade::create([
            'name'         => 'MCSHS',
            'price'        => 45000,
            'description'  => 'Mathematic Competition for Senior High School'
        ]);
        Grade::create([
            'name'         => 'MPC',
            'price'        => 65000,
            'description'  => 'Mathematic Paper Competition'
        ]);
    }
}

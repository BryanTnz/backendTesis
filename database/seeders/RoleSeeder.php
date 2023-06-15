<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rols = ['especialista','paciente'];

        for($i=0 ; $i<2 ; $i++)
        {
            Role::create([
                'name' => $rols[$i],
                'slug' => $rols[$i],
            ]);
        }
    }
}














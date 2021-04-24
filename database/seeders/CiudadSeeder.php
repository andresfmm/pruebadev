<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ciudad')->insert([
            'ciudad' =>  'Cali',
            'estado' => 1,
            'created_by'  => 'me', 
            'updated_by' => 'me',
            'fk_departamento' => 1
        ]);

        DB::table('ciudad')->insert([
            'ciudad' =>  'Yumbo',
            'estado' => 1,
            'created_by'  => 'me', 
            'updated_by' => 'me',
            'fk_departamento' => 1
        ]);

        DB::table('ciudad')->insert([
            'ciudad' =>  'Palmira',
            'estado' => 1,
            'created_by'  => 'me', 
            'updated_by' => 'me',
            'fk_departamento' => 1
        ]);

        DB::table('ciudad')->insert([
            'ciudad' =>  'Medellin',
            'estado' => 1,
            'created_by'  => 'me', 
            'updated_by' => 'me',
            'fk_departamento' => 2
        ]);

        DB::table('ciudad')->insert([
            'ciudad' =>  'Bogota',
            'estado' => 1,
            'created_by'  => 'me', 
            'updated_by' => 'me',
            'fk_departamento' => 3
        ]);


    }
}

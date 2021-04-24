<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamento')->insert([
            'departamento' =>  'Valle del Cauca',
            'estado' => 1,
            'created_by'  => 'me', 
            'updated_by' => 'me'
        ]);

        DB::table('departamento')->insert([

            'departamento' =>  'Antioquia',
            'estado' => 1,
            'created_by'  => 'me', 
            'updated_by' => 'me'
        ]);

        DB::table('departamento')->insert([
            
            'departamento' =>  'Bogotá DC',
            'estado' => 1,
            'created_by'  => 'me', 
            'updated_by' => 'me',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosicionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('posicion')->insert([
            'nombre' => 'Bipedo Posterior',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('posicion')->insert([
            'nombre' => 'Bipedo Anterior',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('posicion')->insert([
            'nombre' => 'Lateral',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('posicion')->insert([
            'nombre' => 'Sedente',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('posicion')->insert([
            'nombre' => 'Evaluacion Marcha',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

    }
}

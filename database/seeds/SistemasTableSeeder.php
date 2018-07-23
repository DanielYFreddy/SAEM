<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SistemasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sistema')->insert([
            'nombre' => 'Cardiovascular/pulmonar',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('sistema')->insert([
            'nombre' => 'Renal/hepaticas',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('sistema')->insert([
            'nombre' => 'Inmunologicas/hematologicas',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('sistema')->insert([
            'nombre' => 'Gastrointestinal',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('sistema')->insert([
            'nombre' => 'Ortopedia',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('sistema')->insert([
            'nombre' => 'Otros',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
    }
}

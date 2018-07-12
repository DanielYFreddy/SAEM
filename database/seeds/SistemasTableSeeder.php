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
        ]);
        DB::table('sistema')->insert([
            'nombre' => 'Renal/hepaticas',
        ]);
        DB::table('sistema')->insert([
            'nombre' => 'Inmunologicas/hematologicas',
        ]);
        DB::table('sistema')->insert([
            'nombre' => 'Gastrointestinal',
        ]);
        DB::table('sistema')->insert([
            'nombre' => 'Ortopedia',
        ]);
        DB::table('sistema')->insert([
            'nombre' => 'Otros',
        ]);
    }
}

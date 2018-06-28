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
        DB::table('sistemas')->insert([
            'nombre' => 'Cardiovascular/pulmonar',
        ]);
        DB::table('sistemas')->insert([
            'nombre' => 'Renal/hepaticas',
        ]);
        DB::table('sistemas')->insert([
            'nombre' => 'Inmunologicas/hematologicas',
        ]);
        DB::table('sistemas')->insert([
            'nombre' => 'Gastrointestinal',
        ]);
        DB::table('sistemas')->insert([
            'nombre' => 'Ortopedia',
        ]);
        DB::table('sistemas')->insert([
            'nombre' => 'Otros',
        ]);
    }
}

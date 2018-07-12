<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatologiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
                //cardiovascular/pulmonar
        DB::table('patologia')->insert([
            'sistema_id' => '1',
            'nombre' => 'Flebitis/trombosis',
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '1',
            'nombre' => 'HTA',
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '1',
            'nombre' => 'Enf. Vascular',
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '1',
            'nombre' => 'Asma/bronquitis',
        ]);

        //renal/hepaticas
        DB::table('patologia')->insert([
            'sistema_id' => '2',
            'nombre' => 'DM',
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '2',
            'nombre' => 'Hiper/Hipo',
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '2',
            'nombre' => 'Gota ',
        ]);

        //Inmunológicas/ hematológicas
        DB::table('patologia')->insert([
            'sistema_id' => '3',
            'nombre' => 'AR',
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '3',
            'nombre' => 'Fibromialgia',
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '3',
            'nombre' => 'Osteoartrosis',
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '3',
            'nombre' => 'Lupus',
        ]);

        //Gastrointestinal
        DB::table('patologia')->insert([
            'sistema_id' => '4',
            'nombre' => 'Ulceras',
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '4',
            'nombre' => 'Gastritis',
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '4',
            'nombre' => 'Colitis',
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '4',
            'nombre' => 'Estreñimiento',
        ]);

        //Ortopedia
        DB::table('patologia')->insert([
            'sistema_id' => '5',
            'nombre' => 'Lx cadera',
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '5',
            'nombre' => 'Lx rodilla',
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '5',
            'nombre' => 'Lx hombro',
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '5',
            'nombre' => 'Espalda',
        ]);

        //Otros
        DB::table('patologia')->insert([
            'sistema_id' => '6',
            'nombre' => 'CA',
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '6',
            'nombre' => 'Alergias',
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '6',
            'nombre' => 'Ndegenerativas',
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '6',
            'nombre' => 'Trans. Mentales',
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '6',
            'nombre' => 'Trans. Sueño',
        ]);
    }
}

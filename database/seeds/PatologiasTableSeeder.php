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
        DB::table('patologias')->insert([
            'sistema_id' => '1',
            'nombre' => 'Flebitis/trombosis',
        ]);
        DB::table('patologias')->insert([
            'sistema_id' => '1',
            'nombre' => 'HTA',
        ]);
        DB::table('patologias')->insert([
            'sistema_id' => '1',
            'nombre' => 'Enf. Vascular',
        ]);
        DB::table('patologias')->insert([
            'sistema_id' => '1',
            'nombre' => 'Asma/bronquitis',
        ]);

        //renal/hepaticas
        DB::table('patologias')->insert([
            'sistema_id' => '2',
            'nombre' => 'DM',
        ]);
        DB::table('patologias')->insert([
            'sistema_id' => '2',
            'nombre' => 'Hiper/Hipo',
        ]);
        DB::table('patologias')->insert([
            'sistema_id' => '2',
            'nombre' => 'Gota ',
        ]);

        //Inmunológicas/ hematológicas
        DB::table('patologias')->insert([
            'sistema_id' => '3',
            'nombre' => 'AR',
        ]);
        DB::table('patologias')->insert([
            'sistema_id' => '3',
            'nombre' => 'Fibromialgia',
        ]);
        DB::table('patologias')->insert([
            'sistema_id' => '3',
            'nombre' => 'Osteoartrosis',
        ]);
        DB::table('patologias')->insert([
            'sistema_id' => '3',
            'nombre' => 'Lupus',
        ]);

        //Gastrointestinal
        DB::table('patologias')->insert([
            'sistema_id' => '4',
            'nombre' => 'Ulceras',
        ]);
        DB::table('patologias')->insert([
            'sistema_id' => '4',
            'nombre' => 'Gastritis',
        ]);
        DB::table('patologias')->insert([
            'sistema_id' => '4',
            'nombre' => 'Colitis',
        ]);
        DB::table('patologias')->insert([
            'sistema_id' => '4',
            'nombre' => 'Estreñimiento',
        ]);

        //Ortopedia
        DB::table('patologias')->insert([
            'sistema_id' => '5',
            'nombre' => 'Lx cadera',
        ]);
        DB::table('patologias')->insert([
            'sistema_id' => '5',
            'nombre' => 'Lx rodilla',
        ]);
        DB::table('patologias')->insert([
            'sistema_id' => '5',
            'nombre' => 'Lx hombro',
        ]);
        DB::table('patologias')->insert([
            'sistema_id' => '5',
            'nombre' => 'Espalda',
        ]);

        //Otros
        DB::table('patologias')->insert([
            'sistema_id' => '6',
            'nombre' => 'CA',
        ]);
        DB::table('patologias')->insert([
            'sistema_id' => '6',
            'nombre' => 'Alergias',
        ]);
        DB::table('patologias')->insert([
            'sistema_id' => '6',
            'nombre' => 'Ndegenerativas',
        ]);
        DB::table('patologias')->insert([
            'sistema_id' => '6',
            'nombre' => 'Trans. Mentales',
        ]);
        DB::table('patologias')->insert([
            'sistema_id' => '6',
            'nombre' => 'Trans. Sueño',
        ]);
    }
}

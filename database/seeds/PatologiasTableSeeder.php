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
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '1',
            'nombre' => 'HTA',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '1',
            'nombre' => 'Enf. Vascular',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '1',
            'nombre' => 'Asma/bronquitis',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        //renal/hepaticas
        DB::table('patologia')->insert([
            'sistema_id' => '2',
            'nombre' => 'DM',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '2',
            'nombre' => 'Hiper/Hipo',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '2',
            'nombre' => 'Gota ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        //Inmunológicas/ hematológicas
        DB::table('patologia')->insert([
            'sistema_id' => '3',
            'nombre' => 'AR',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '3',
            'nombre' => 'Fibromialgia',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '3',
            'nombre' => 'Osteoartrosis',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '3',
            'nombre' => 'Lupus',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        //Gastrointestinal
        DB::table('patologia')->insert([
            'sistema_id' => '4',
            'nombre' => 'Ulceras',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '4',
            'nombre' => 'Gastritis',
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '4',
            'nombre' => 'Colitis',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '4',
            'nombre' => 'Estreñimiento',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        //Ortopedia
        DB::table('patologia')->insert([
            'sistema_id' => '5',
            'nombre' => 'Lx cadera',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '5',
            'nombre' => 'Lx rodilla',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '5',
            'nombre' => 'Lx hombro',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '5',
            'nombre' => 'Espalda',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        //Otros
        DB::table('patologia')->insert([
            'sistema_id' => '6',
            'nombre' => 'CA',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '6',
            'nombre' => 'Alergias',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '6',
            'nombre' => 'Ndegenerativas',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '6',
            'nombre' => 'Trans. Mentales',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '6',
            'nombre' => 'Trans. Sueño',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
    }
}

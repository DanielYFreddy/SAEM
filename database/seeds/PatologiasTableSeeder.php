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
            'nombre' => 'Flebitis',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '1',
            'nombre' => 'Trombosis',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '1',
            'nombre' => 'Hipertensión Arterial',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '1',
            'nombre' => 'Venas Varicosas',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '1',
            'nombre' => 'Asma',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '1',
            'nombre' => 'Bronquitis',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        //renal/hepaticas
        DB::table('patologia')->insert([
            'sistema_id' => '2',
            'nombre' => 'Diabetes Mellitus',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '2',
            'nombre' => 'Hipertiroidismo',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '2',
            'nombre' => 'Hipotiroidismo',
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
            'nombre' => 'Artritis Reumatoide',
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
            'nombre' => 'Úlceras',
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
            'nombre' => 'Hombro',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '5',
            'nombre' => 'Codo',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '5',
            'nombre' => 'Muñeca',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '5',
            'nombre' => 'Columna',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '5',
            'nombre' => 'Cadera',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '5',
            'nombre' => 'Rodilla',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '5',
            'nombre' => 'Tobillo',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        //Otros
        DB::table('patologia')->insert([
            'sistema_id' => '6',
            'nombre' => 'Cáncer',
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
            'nombre' => 'Neurodegenerativas ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '6',
            'nombre' => 'Trastornos. Mentales',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '6',
            'nombre' => 'Trastornos. Sueño',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        DB::table('patologia')->insert([
            'sistema_id' => '6',
            'nombre' => 'Otros',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
    }
}

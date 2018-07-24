<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovimientoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // bipedo posterior
        DB::table('movimiento')->insert([
            'nombre' => 'Inclinacion cabeza',
            'posicion_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Rotacion cabeza',
            'posicion_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Hombro caido elevado',
            'posicion_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Hombro rotado medial',
            'posicion_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Escapula aducida',
            'posicion_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Escapula abducida',
            'posicion_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Escapula alada',
            'posicion_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Tronco Escoliosis',
            'posicion_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Tronco Pelvis',
            'posicion_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Tronco Inclinación Lat.',
            'posicion_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Tronco Rotada',
            'posicion_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Cadera Adbducción',
            'posicion_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Cadera Aducción',
            'posicion_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Rodilla Genu Varum',
            'posicion_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Rodilla Genu Valgum',
            'posicion_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Tobillo pie - Pie plano ',
            'posicion_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
        
        DB::table('movimiento')->insert([
            'nombre' => 'Tobillo pie - Pie cavo',
            'posicion_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);


        //bipedo anterior

        DB::table('movimiento')->insert([
            'nombre' => 'Inclinación cabeza',
            'posicion_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Cabeza rotada',
            'posicion_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Cabeza  - Asim Mandibula',
            'posicion_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Hombro caído',
            'posicion_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Hombro elevado',
            'posicion_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Codo cúbito valgo',
            'posicion_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Codo cúbito varo',
            'posicion_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Cadera rotación lateral',
            'posicion_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Cadera rotación medial',
            'posicion_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Rodilla torsión tibial ext',
            'posicion_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Rodilla torsión tibial int',
            'posicion_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Tobillo y pie - Halux valgus',
            'posicion_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Tobillo y pie - Dedos en garra',
            'posicion_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);  

        DB::table('movimiento')->insert([
            'nombre' => 'Tobillo y pie - Dedos martillo',
            'posicion_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);   

        //lateral
        DB::table('movimiento')->insert([
            'nombre' => 'Cabeza adelandata',
            'posicion_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Cabeza lordosis aplan',
            'posicion_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Cabeza lordosis exces',
            'posicion_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Hombro antepulsióm',
            'posicion_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Hombro retropulsión',
            'posicion_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Tórax cifosis',
            'posicion_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Tórax pectus excavat',
            'posicion_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Tórax tonel',
            'posicion_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Tórax pectus carinat',
            'posicion_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Zona lumbar - Lordosis',
            'posicion_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Zona lumbar - Aplanada',
            'posicion_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Pelvis Inclinación Anterior',
            'posicion_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Pelvis Inclinación Posterior',
            'posicion_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Rodilla genu recurv',
            'posicion_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Rodilla Flexionada',
            'posicion_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Tobillo postura adel',
            'posicion_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        //Sedente
        DB::table('movimiento')->insert([
            'nombre' => 'Sentado - Inclinacion pélvica anterior',
            'posicion_id' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Sentado - Inclinacion pélvica posterior',
            'posicion_id' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => '4 puntos - Escápula alada',
            'posicion_id' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Tronco Lor. Lumbar',
            'posicion_id' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Tronco Cifosis tor.',
            'posicion_id' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Tronco Rotado',
            'posicion_id' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Tronco Flex. Lat.',
            'posicion_id' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Cadera Flx Dism.',
            'posicion_id' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Cadera Flx Aum.',
            'posicion_id' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Cadera Rotada',
            'posicion_id' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Cadera - Torsión Tibial Ext.',
            'posicion_id' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Tobillo y pie - Dorsiflex',
            'posicion_id' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Tobillo y pie - Invertido',
            'posicion_id' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Tobillo y pie - Evertido',
            'posicion_id' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        //evaluacion marcha

        DB::table('movimiento')->insert([
            'nombre' => 'Zancada - Long. desigual',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Zancada - Cadencia lenta',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Zancada - F. ortostática lenta',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Cabeza Flexionada',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Cabeza Desviada lateral',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Hombro - Balanc. no recíproco',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Hombro - Desiguales',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Tronco Flexionado adelante',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Tronco Desviado Lateral',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Pelvis - Rot. Excesiva',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Pelvis - Incl. Latel Excesiva',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Pelvis - Incl. Post Excesiva',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Caderas Rotadas',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Caderas Aducidas',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Caderas Adbducidas',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Caderas Flexionadas',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Rodillas Hiperextendidas',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Rodillas Flex Exagerada',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Rodillas genu varum',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Rodillas genu Valgum',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Tobillo pie - Prebalanceco aum.',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);


        DB::table('movimiento')->insert([
            'nombre' => 'Tobillo pie - Prebal. Dism.',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Tobillo pie - Golpeo de pies',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Tobillo pie - Pies caídos',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Tobillo pie - Dorsiflex Exces.',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Pies planos',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);

        DB::table('movimiento')->insert([
            'nombre' => 'Pies cavos',
            'posicion_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'), 
        ]);
    }
}

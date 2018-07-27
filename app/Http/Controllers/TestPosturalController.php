<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestPosturalController extends Controller
{


    public function createBipedoPosterior($paciente_id)
    {
        //
        $paciente = DB::table('paciente')->where('id', $paciente_id)->first();
        $posicion = DB::table('posicion')->where('nombre', 'like', '%Bipedo Posterior%' )->first();
        $movimientos = DB::table('movimiento')->where('posicion_id', $posicion->id)->get(); 

        return view('consultamedica.testpostural.bipedoposterior')->with('movimientos', $movimientos)->with('paciente',$paciente);
    }

    public function storeBipedoPosterior(Request $request)
    {
        //

        foreach ($request->izquierda as $movimiento_izquierda) {
            
            DB::table('testpostural')->insert(
                [
                    'paciente_id' => $request->paciente_id,
                    'movimiento_id' => $movimiento_izquierda,
                    'lado' => 'Izquierda',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }

        foreach ($request->derecha as $movimiento_derecha) {
            DB::table('testpostural')->insert(
                [
                    'paciente_id' => $request->paciente_id,
                    'movimiento_id' => $movimiento_derecha,
                    'lado' => 'Derecha',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }


        if ($request->ninguno !== null) {
            foreach ($request->ninguno as $movimiento_ninguno) {
                DB::table('testpostural')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'movimiento_id' => $movimiento_ninguno,
                        'lado' => 'Ninguno',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),  

                    ]
                );
            }
        }



        alert()->success('El test postural bipedo posterior del paciente ha sido registrado', 'Test Postural registrado')->persistent('Close');

        return redirect()->route('consultamedica.index', $request->paciente_id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

}

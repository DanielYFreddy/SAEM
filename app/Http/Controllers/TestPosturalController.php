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



        alert()->success('El test postural bipedo posterior del paciente ha sido registrado', 'Test Postural registrado')->persistent('Cerrar');

        return redirect()->route('consultamedica.index', $request->paciente_id);
    }

    public function createBipedoAnterior($paciente_id)
    {
        //
        $paciente = DB::table('paciente')->where('id', $paciente_id)->first();
        $posicion = DB::table('posicion')->where('nombre', 'like', '%Bipedo Anterior%' )->first();
        $movimientos = DB::table('movimiento')->where('posicion_id', $posicion->id)->get(); 

        return view('consultamedica.testpostural.bipedoanterior')->with('movimientos', $movimientos)->with('paciente',$paciente);
    }

    public function storeBipedoAnterior(Request $request)
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



        alert()->success('El test postural bipedo anterior del paciente ha sido registrado', 'Test Postural registrado')->persistent('Cerrar');

        return redirect()->route('consultamedica.index', $request->paciente_id);
    }

    public function createLateral($paciente_id)
    {
        //
        $paciente = DB::table('paciente')->where('id', $paciente_id)->first();
        $posicion = DB::table('posicion')->where('nombre', 'like', '%Lateral%' )->first();
        $movimientos = DB::table('movimiento')->where('posicion_id', $posicion->id)->get(); 

        return view('consultamedica.testpostural.lateral')->with('movimientos', $movimientos)->with('paciente',$paciente);
    }

    public function storeLateral(Request $request)
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



        alert()->success('El test postural lateral del paciente ha sido registrado', 'Test Postural registrado')->persistent('Cerrar');

        return redirect()->route('consultamedica.index', $request->paciente_id);
    }

    public function createSedente($paciente_id)
    {
        //
        $paciente = DB::table('paciente')->where('id', $paciente_id)->first();
        $posicion = DB::table('posicion')->where('nombre', 'like', '%Sedente%' )->first();
        $movimientos = DB::table('movimiento')->where('posicion_id', $posicion->id)->get(); 

        return view('consultamedica.testpostural.sedente')->with('movimientos', $movimientos)->with('paciente',$paciente);
    }

    public function storeSedente(Request $request)
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



        alert()->success('El test postural sedente del paciente ha sido registrado', 'Test Postural registrado')->persistent('Cerrar');

        return redirect()->route('consultamedica.index', $request->paciente_id);
    }

    public function createMarcha($paciente_id)
    {
        //
        $paciente = DB::table('paciente')->where('id', $paciente_id)->first();
        $posicion = DB::table('posicion')->where('nombre', 'like', '%Evaluacion Marcha%' )->first();
        $movimientos = DB::table('movimiento')->where('posicion_id', $posicion->id)->get(); 

        return view('consultamedica.testpostural.marcha')->with('movimientos', $movimientos)->with('paciente',$paciente);
    }

    public function storeMarcha(Request $request)
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



        alert()->success('El test postural evaluación marcha del paciente ha sido registrado', 'Test Postural registrado')->persistent('Cerrar');

        return redirect()->route('consultamedica.index', $request->paciente_id);
    }
    

}

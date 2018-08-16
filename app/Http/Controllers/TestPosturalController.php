<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestPosturalController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }
    
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
        if ($request->izquierda !== null) {
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
        }

        if ($request->derecha !== null) {
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
        if ($request->izquierda !== null) {
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
        }

        if ($request->derecha !== null) {
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
        if ($request->izquierda !== null) {
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
        }   

        if ($request->derecha !== null) {
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
        if ($request->izquierda !== null) {
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
        }

        if ($request->derecha !== null) {
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
        if ($request->izquierda !== null) {
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
        }

        if ($request->derecha !== null) {
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

    public function createGoniometrica($paciente_id)
    {
        //
        $paciente = DB::table('paciente')->where('id', $paciente_id)->first();

        return view('consultamedica.testpostural.goniometrica')->with('paciente',$paciente);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeGoniometrica(Request $request)
    {
        //
        if (!is_null($request->observaciones)) {
            DB::table('goniometrica')->insert(
                [
                'paciente_id' => $request->paciente_id,
                'articulacion' => $request->articulacion,
                'lado' => $request->lado,
                'gradoMovilidad' => $request->gradoMovilidad,
                'observaciones' => $request->observaciones,
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }

        if (is_null($request->observaciones)) {
            DB::table('goniometrica')->insert(
                [
                'paciente_id' => $request->paciente_id,
                'articulacion' => $request->articulacion,
                'lado' => $request->lado,
                'gradoMovilidad' => $request->gradoMovilidad,
                'observaciones' => ' ',
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }

        alert()->success('La valoracion goniometrica del paciente ha sido registrado', 'Valoracion Goniometrica registrada')->persistent('Cerrar');

        return redirect()->route('consultamedica.index', $request->paciente_id);
    }

    public function createManualMuscular($paciente_id)
    {
        //
        $paciente = DB::table('paciente')->where('id', $paciente_id)->first();

        return view('consultamedica.testpostural.manualMuscular')->with('paciente',$paciente);
    }

    public function storeManualMuscular(Request $request)
    {
        //
        if (!is_null($request->observaciones)) {
            DB::table('manualmuscular')->insert(
                [
                'paciente_id' => $request->paciente_id,
                'musculo' => $request->musculo,
                'lado' => $request->lado,
                'fuerzaMuscular' => $request->fuerzaMuscular,
                'observaciones' => $request->observaciones,
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }

        if (is_null($request->observaciones)) {
            DB::table('manualmuscular')->insert(
                [
                'paciente_id' => $request->paciente_id,
                'musculo' => $request->musculo,
                'lado' => $request->lado,
                'fuerzaMuscular' => $request->fuerzaMuscular,
                'observaciones' => ' ',
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }

        alert()->success('La valoracion goniometrica del paciente ha sido registrado', 'Valoracion Goniometrica registrada')->persistent('Cerrar');

        return redirect()->route('consultamedica.index', $request->paciente_id);
    }

    public function createAntropometria($paciente_id)
    {
        //
        $paciente = DB::table('paciente')->where('id', $paciente_id)->first();

        return view('consultamedica.testpostural.antropometria')->with('paciente',$paciente);
    }

    public function storeAntropometria(Request $request)
    {
        if (!is_null($request->lbDerecho)) {
            DB::table('antropometria')->insert(
                [
                'paciente_id' => $request->paciente_id,
                'miembroRegion' => 'Superior',
                'lado' => 'Derecho',
                'miembro' => 'LB',
                'cm' => $request->lbDerecho,
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }

        if (!is_null($request->lbIzquierdo)) {
            DB::table('antropometria')->insert(
                [
                'paciente_id' => $request->paciente_id,
                'miembroRegion' => 'Superior',
                'lado' => 'Izquierdo',
                'miembro' => 'LB',
                'cm' => $request->lbIzquierdo,
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }

        if (!is_null($request->labDerecho)) {
            DB::table('antropometria')->insert(
                [
                'paciente_id' => $request->paciente_id,
                'miembroRegion' => 'Superior',
                'lado' => 'Derecho',
                'miembro' => 'LAB',
                'cm' => $request->labDerecho,
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }

        if (!is_null($request->labIzquierdo)) {
            DB::table('antropometria')->insert(
                [
                'paciente_id' => $request->paciente_id,
                'miembroRegion' => 'Superior',
                'lado' => 'Izquierdo',
                'miembro' => 'LAB',
                'cm' => $request->labIzquierdo,
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }

        if (!is_null($request->cbDerecho)) {
            DB::table('antropometria')->insert(
                [
                'paciente_id' => $request->paciente_id,
                'miembroRegion' => 'Superior',
                'lado' => 'Derecho',
                'miembro' => 'CB',
                'cm' => $request->cbDerecho,
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }

        if (!is_null($request->cbIzquierdo)) {
            DB::table('antropometria')->insert(
                [
                'paciente_id' => $request->paciente_id,
                'miembroRegion' => 'Superior',
                'lado' => 'Izquierdo',
                'miembro' => 'CB',
                'cm' => $request->cbIzquierdo,
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }

        if (!is_null($request->cabDerecho)) {
            DB::table('antropometria')->insert(
                [
                'paciente_id' => $request->paciente_id,
                'miembroRegion' => 'Superior',
                'lado' => 'Derecho',
                'miembro' => 'CAB',
                'cm' => $request->cabDerecho,
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }

        if (!is_null($request->cabIzquierdo)) {
            DB::table('antropometria')->insert(
                [
                'paciente_id' => $request->paciente_id,
                'miembroRegion' => 'Superior',
                'lado' => 'Izquierdo',
                'miembro' => 'CAB',
                'cm' => $request->cabIzquierdo,
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }

        if (!is_null($request->lmDerecho)) {
            DB::table('antropometria')->insert(
                [
                'paciente_id' => $request->paciente_id,
                'miembroRegion' => 'Inferior',
                'lado' => 'Derecho',
                'miembro' => 'LM',
                'cm' => $request->lmDerecho,
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }

        if (!is_null($request->lmIzquierdo)) {
            DB::table('antropometria')->insert(
                [
                'paciente_id' => $request->paciente_id,
                'miembroRegion' => 'Inferior',
                'lado' => 'Izquierdo',
                'miembro' => 'LM',
                'cm' => $request->lmIzquierdo,
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }

        if (!is_null($request->lpDerecho)) {
            DB::table('antropometria')->insert(
                [
                'paciente_id' => $request->paciente_id,
                'miembroRegion' => 'Inferior',
                'lado' => 'Derecho',
                'miembro' => 'LP',
                'cm' => $request->lpDerecho,
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }

        if (!is_null($request->lpIzquierdo)) {
            DB::table('antropometria')->insert(
                [
                'paciente_id' => $request->paciente_id,
                'miembroRegion' => 'Inferior',
                'lado' => 'Izquierdo',
                'miembro' => 'LP',
                'cm' => $request->lpIzquierdo,
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }

        if (!is_null($request->cm15Derecho)) {
            DB::table('antropometria')->insert(
                [
                'paciente_id' => $request->paciente_id,
                'miembroRegion' => 'Inferior',
                'lado' => 'Derecho',
                'miembro' => 'CM 15',
                'cm' => $request->cm15Derecho,
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }

        if (!is_null($request->cm15Izquierdo)) {
            DB::table('antropometria')->insert(
                [
                'paciente_id' => $request->paciente_id,
                'miembroRegion' => 'Inferior',
                'lado' => 'Izquierdo',
                'miembro' => 'CM 15',
                'cm' => $request->cm15Izquierdo,
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }

        if (!is_null($request->cm20Derecho)) {
            DB::table('antropometria')->insert(
                [
                'paciente_id' => $request->paciente_id,
                'miembroRegion' => 'Inferior',
                'lado' => 'Derecho',
                'miembro' => 'CM 20',
                'cm' => $request->cm20Derecho,
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }

        if (!is_null($request->cm20Izquierdo)) {
            DB::table('antropometria')->insert(
                [
                'paciente_id' => $request->paciente_id,
                'miembroRegion' => 'Inferior',
                'lado' => 'Izquierdo',
                'miembro' => 'CM 20',
                'cm' => $request->cm20Izquierdo,
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }

        if (!is_null($request->cp15Derecho)) {
            DB::table('antropometria')->insert(
                [
                'paciente_id' => $request->paciente_id,
                'miembroRegion' => 'Inferior',
                'lado' => 'Derecho',
                'miembro' => 'CP 15',
                'cm' => $request->cp15Derecho,
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }

        if (!is_null($request->cp15Izquierdo)) {
            DB::table('antropometria')->insert(
                [
                'paciente_id' => $request->paciente_id,
                'miembroRegion' => 'Inferior',
                'lado' => 'izquierdo',
                'miembro' => 'CP 15',
                'cm' => $request->cp15Izquierdo,
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }

        if (!is_null($request->cp20Derecho)) {
            DB::table('antropometria')->insert(
                [
                'paciente_id' => $request->paciente_id,
                'miembroRegion' => 'Inferior',
                'lado' => 'Derecho',
                'miembro' => 'CP 20',
                'cm' => $request->cp20Derecho,
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }

        if (!is_null($request->cp20Izquierdo)) {
            DB::table('antropometria')->insert(
                [
                'paciente_id' => $request->paciente_id,
                'miembroRegion' => 'Inferior',
                'lado' => 'izquierdo',
                'miembro' => 'CP 20',
                'cm' => $request->cp20Izquierdo,
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }



        alert()->success('La antropometria del paciente ha sido registrado', 'Antropometria registrada')->persistent('Cerrar');

        return redirect()->route('consultamedica.index', $request->paciente_id);
    }
    

}

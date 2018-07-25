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

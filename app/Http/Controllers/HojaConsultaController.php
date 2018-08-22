<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HojaConsultaController extends Controller
{

    /*
    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }

    */
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($paciente_id)
    {
        //
        $paciente = DB::table('paciente')->where('id', $paciente_id)->first();
        return view('consultamedica.hojaconsulta.create')->with('paciente',$paciente);
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
                DB::table('hoja_consulta')->insert(
            [
                'paciente_id' => $request->paciente_id,
                'motivoConsulta' => $request->motivoConsulta,
                'evolucion' => $request->evolucion,
                'evaluacionesFuncionales' => $request->evaluacionesFuncionales,
                'escalaDolor' => $request->escalaDolor,
                'observaciones' => $request->observaciones,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

            ]
        );

        alert()->success('La consulta ha sido registrada', 'Consulta registrado')->persistent('Cerrar');

        return redirect()->route('consultamedica.index', $request->paciente_id);
    }
}

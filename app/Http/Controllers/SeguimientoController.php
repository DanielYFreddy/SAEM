<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeguimientoController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($paciente_id)
    {
        //
        $paciente = DB::table('paciente')->where('id', $paciente_id)->first();
        return view('consultamedica.seguimiento.create')->with('paciente',$paciente);
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
                DB::table('seguimiento')->insert(
            [
                'paciente_id' => $request->paciente_id,
                'motivoConsulta' => $request->motivoConsulta,
                'DXFT' => $request->DXFT,
                'observaciones' => $request->observaciones,
                'escalaDolor' => $request->escalaDolor,
                'tratamiento' => $request->tratamiento,
                'parametros' => $request->parametros,
                'evolucion' => $request->evolucion,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

            ]
        );

        alert()->success('El seguimiento registrado', 'Seguimiento registrado')->persistent('Cerrar');

        return redirect()->route('consultamedica.index', $request->paciente_id);
    }


}

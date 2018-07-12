<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiagnosticoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($paciente_id)
    {
        //
        $diagnosticos = DB::table('diagnostico')->where('paciente_id', $paciente_id)->orderBy('created_at','ASC')->paginate(10);
        $paciente = DB::table('paciente')->where('id', $paciente_id)->first();
        return view('historiales.diagnosticos.index')->with('diagnosticos', $diagnosticos)->with('paciente',$paciente);
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
        return view('historiales.diagnosticos.create')->with('paciente',$paciente);
        
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
         DB::table('diagnostico')->insert(
            [
                'nombre' => $request->nombre,
                'nombre' => $request->nombre,
                'nombre' => $request->nombre,
                'nombre' => $request->nombre,
                'nombre' => $request->nombre,
                'nombre' => $request->nombre,
                'nombre' => $request->nombre,
                'nombre' => $request->nombre,
                'nombre' => $request->nombre,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

            ]
        );

                     $table->integer('paciente_id')->unsigned();
            $table->string('diagnostico');
            $table->string('tratamientoFarmacologico');
            $table->string('evolucion');
            $table->string('referenciaMedica');
            $table->string('antecedentes');
            $table->string('cirugias');
            $table->string('traumaticos');

        alert()->success('El diagnostico del paciente ha sido registrado', 'Diagnostico registrado')->persistent('Close');

        return redirect()->route('diagnosticos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
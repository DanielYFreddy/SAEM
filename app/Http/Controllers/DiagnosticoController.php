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
        $diagnostico = DB::table('diagnostico')->where('paciente_id', $paciente_id)->first();
        $paciente = DB::table('paciente')->where('id', $paciente_id)->first();
        return view('historiales.diagnosticos.index')->with('diagnostico', $diagnostico)->with('paciente',$paciente);
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
                'paciente_id' => $request->paciente_id,
                'diagnostico' => $request->diagnostico,
                'tratamientoFarmacologico' => $request->tratamientoFarmacologico,
                'evolucion' => $request->evolucion,
                'referenciaMedica' => $request->referenciaMedica,
                'antecedentes' => $request->antecedentes,
                'cirugias' => $request->cirugias,
                'traumaticos' => $request->traumaticos,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

            ]
        );

        alert()->success('El diagnostico del paciente ha sido registrado', 'Diagnostico registrado')->persistent('Cerrar');

        return redirect()->route('diagnosticos.index', $request->paciente_id);
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
        $diagnostico = DB::table('diagnostico')->where('id', $id)->first();
        $paciente = DB::table('paciente')->where('id', $diagnostico->paciente_id)->first();

        return view('historiales.diagnosticos.edit')->with('diagnostico',$diagnostico)->with('paciente',$paciente);
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
            DB::table('diagnostico')->where('id', $id)->update(
            [
                'diagnostico' => $request->diagnostico,
                'tratamientoFarmacologico' => $request->tratamientoFarmacologico,
                'evolucion' => $request->evolucion,
                'referenciaMedica' => $request->referenciaMedica,
                'antecedentes' => $request->antecedentes,
                'cirugias' => $request->cirugias,
                'traumaticos' => $request->traumaticos,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

            ]);     

         alert()->success('El diagnostico del paciente ha sido modificado', 'Diagnostico modificado')->persistent('Cerrar');

        return redirect()->route('diagnosticos.index', $request->paciente_id);
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

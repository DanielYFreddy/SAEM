<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GinecologicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($paciente_id)
    {
        //
        $ginecologico = DB::table('ginecologico')->where('paciente_id', $paciente_id)->first();
        $paciente = DB::table('paciente')->where('id', $paciente_id)->first();
        return view('historiales.ginecologicos.index')->with('ginecologico', $ginecologico)->with('paciente',$paciente);
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
        return view('historiales.ginecologicos.create')->with('paciente',$paciente);
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
        if (!is_null($request->observacion)) {
            DB::table('ginecologico')->insert(
                [
                'paciente_id' => $request->paciente_id,
                'embarazo' => $request->embarazo,
                'abortos' => $request->abortos,
                'periodoMestrual' => $request->periodoMestrual,
                'tratamiento' => $request->tratamiento,
                'observacion' => $request->observacion,
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }

        if (is_null($request->observacion)) {
            DB::table('ginecologico')->insert(
                [
                'paciente_id' => $request->paciente_id,
                'embarazo' => $request->embarazo,
                'abortos' => $request->abortos,
                'periodoMestrual' => $request->periodoMestrual,
                'tratamiento' => $request->tratamiento,
                'observacion' => ' ',
                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );
        }
        

        alert()->success('Lo ginecologico del paciente ha sido registrado', 'Ginecologico registrado')->persistent('Close');

        return redirect()->route('ginecologicos.index', $request->paciente_id);
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

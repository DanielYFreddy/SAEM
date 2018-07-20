<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatologiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($paciente_id)
    {
        
        $patologia_personal = DB::table('patologia_personal')
            ->join('patologia', 'patologia_personal.id', '=', 'patologia.id')
            ->select('patologia_personal.*', 'patologia.nombre')->where('patologia_personal.paciente_id', '=', $paciente_id)
            ->get();

        $patologia_parentezco = DB::table('patologia_parentezco')
            ->join('patologia', 'patologia_parentezco.id', '=', 'patologia.id')
            ->select('patologia_parentezco.*', 'patologia.nombre')->where('patologia_parentezco.paciente_id', '=', $paciente_id)
            ->get();

        $patologia_heredofalimiliar = DB::table('patologia_heredofalimiliar')
            ->join('patologia', 'patologia_heredofalimiliar.id', '=', 'patologia.id')
            ->select('patologia_heredofalimiliar.*', 'patologia.nombre')->where('patologia_heredofalimiliar.paciente_id', '=', $paciente_id)
            ->get();

        $paciente = DB::table('paciente')->where('id', $paciente_id)->first();

        return view('historiales.patologias.index')->with('patologia_personal', $patologia_personal)->with('patologia_parentezco', $patologia_parentezco)->with('patologia_heredofalimiliar', $patologia_heredofalimiliar)->with('paciente',$paciente);
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
        return view('historiales.patologias.create')->with('paciente',$paciente);
    }

    public function createPersonales($paciente_id)
    {
        //
        $paciente = DB::table('paciente')->where('id', $paciente_id)->first();
        return view('historiales.patologias.create')->with('paciente',$paciente);
    }

    public function createParentezco($paciente_id)
    {
        //
        $paciente = DB::table('paciente')->where('id', $paciente_id)->first();
        return view('historiales.patologias.create')->with('paciente',$paciente);
    }

    public function createHeredofamiliar($paciente_id)
    {
        //
        $paciente = DB::table('paciente')->where('id', $paciente_id)->first();
        return view('historiales.patologias.create')->with('paciente',$paciente);
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

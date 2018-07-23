<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistorialController extends Controller
{
    /*
    public function pacientes()
    {
        //
        $pacientes = DB::table('paciente')->orderBy('nombre','ASC')->paginate(15);
        return view('historiales.pacientes')->with('pacientes', $pacientes);
    }

    public function buscar(Request $request)
    {

        $pacientes = DB::table('paciente')->where('nombre', 'like', '%'.$request->nombre.'%' )->orderBy('nombre','ASC')->paginate(15);
        return view('historiales.pacientes')->with('pacientes', $pacientes);
        
    }*/    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $paciente = DB::table('paciente')->where('id', $id)->first();

        return view('historiales.index')->with('paciente',$paciente);
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistorialController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }
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

}

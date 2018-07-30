<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsultaMedicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($paciente_id)
    {
        //
        $paciente = DB::table('paciente')->where('id', $paciente_id)->first();

        return view('consultamedica.index')->with('paciente',$paciente);
    }

}

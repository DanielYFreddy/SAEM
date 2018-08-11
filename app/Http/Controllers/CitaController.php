<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CitaController extends Controller
{


    public function getCitas()
    {

        $citas = DB::table('cita')->get();

        return response()->json($citas);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('citas.agenda');
    }

    public function buscarPaciente(Request $request)
    {

        if ($request->nombrePaciente) {
            $pacientes = DB::table('paciente')->where('nombre', 'like', '%'.$request->nombrePaciente.'%' )->get();

            $response = '<div class="dropdown-menu" style="display:block; position:relative">';

            foreach ($pacientes as $paciente) {
                $response .= '<a href="#" class="dropdown-item">'.$paciente->nombre.'</a>';
            }

            $response .='</div>';

            echo $response;
        }

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
        $response = array('status' => 'success', 'msg' => 'Guardado',);
        //input('title')
        return response()->json($request->start);
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

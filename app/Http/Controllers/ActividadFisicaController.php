<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActividadFisicaController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($paciente_id)
    {
        //
        $actividadFisica = DB::table('actividad_fisica')->where('paciente_id', $paciente_id)->first();
        $paciente = DB::table('paciente')->where('id', $paciente_id)->first();
        return view('historiales.actividadfisica.index')->with('actividadFisica', $actividadFisica)->with('paciente',$paciente);
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
        return view('historiales.actividadfisica.create')->with('paciente',$paciente);
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
        DB::table('actividad_fisica')->insert(
            [
                'paciente_id' => $request->paciente_id,
                'nivelActividad' => $request->nivelActividad,
                'practicaDeporte' => $request->practicaDeporte,
                'observaciones' => $request->observaciones,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

            ]
        );

        alert()->success('La actividad fisica del paciente ha sido registrada', 'Actividad Fisica registrada')->persistent('Cerrar');

        return redirect()->route('actividadfisica.index', $request->paciente_id);
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

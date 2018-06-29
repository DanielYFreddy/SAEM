<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $pacientes = Paciente::searchPaciente($request->nombre)->orderBy('nombre','ASC')->paginate(15);
        return view('pacientes.index')->with('pacientes', $pacientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pacientes.create');
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
        $paciente = new Paciente();
        $paciente->nombre = $request->nombre;
        $paciente->cedula = $request->cedula;
        $paciente->ocupacion = $request->ocupacion;
        $paciente->nacionalidad = $request->nacionalidad;
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->genero = $request->genero;
        $paciente->region = $request->region;
        $paciente->direccion = $request->direccion;
        $paciente->movil = $request->movil;  
        $paciente->telefono = $request->telefono; 
        $paciente->email = $request->email; 
        $paciente->estado_civil = $request->estado_civil;  

        $paciente->save();     

        alert()->success('El paciente ha sido registrado', 'Paciente registrado')->persistent('Close');

        return redirect()->route('pacientes.index');
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
        $paciente = Paciente::find($id);

        return view('pacientes.edit')->with('paciente',$paciente);
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
        $paciente = Paciente::find($id);

        $paciente->nombre = $request->nombre;
        $paciente->cedula = $request->cedula;
        $paciente->ocupacion = $request->ocupacion;
        $paciente->nacionalidad = $request->nacionalidad;
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->genero = $request->genero;
        $paciente->region = $request->region;
        $paciente->direccion = $request->direccion;
        $paciente->movil = $request->movil;  
        $paciente->telefono = $request->telefono; 
        $paciente->email = $request->email; 
        $paciente->estado_civil = $request->estado_civil;  

        $paciente->save();     

        alert()->success('El paciente ha sido modificado', 'Paciente modificado')->persistent('Close');

        return redirect()->route('pacientes.index');
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

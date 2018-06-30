<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PacienteRequest;
use App\Paciente;
use Alert;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pacientes = DB::table('pacientes')->orderBy('nombre','ASC')->paginate(15);
        return view('pacientes.index')->with('pacientes', $pacientes);
    }

    public function buscar(Request $request)
    {

        $pacientes = DB::table('pacientes')->where('nombre', 'like', '%'.$request->nombre.'%' )->orderBy('nombre','ASC')->paginate(15);
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
    public function store(PacienteRequest $request)
    {
        //
        /*
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

        $paciente->save();*/ 

        DB::table('pacientes')->insert(
            [
                'nombre' => $request->nombre,
                'cedula' => $request->cedula,
                'ocupacion' => $request->ocupacion,
                'nacionalidad' => $request->nacionalidad,
                'fecha_nacimiento' => $request->fecha_nacimiento,
                'genero' => $request->genero,
                'region' => $request->region,
                'direccion' => $request->direccion,
                'movil' => $request->movil,  
                'telefono' => $request->telefono, 
                'email' => $request->email, 
                'estado_civil'=> $request->estado_civil,  

            ]
        );

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
        //$paciente = Paciente::find($id);
        $paciente = DB::table('pacientes')->where('id', $id)->first();

        return view('pacientes.edit')->with('paciente',$paciente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PacienteRequest $request, $id)
    {
        //
        /*
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

        $paciente->save();*/

        DB::table('pacientes')->where('id', $id)->update(
            [
                'nombre' => $request->nombre,
                'cedula' => $request->cedula,
                'ocupacion' => $request->ocupacion,
                'nacionalidad' => $request->nacionalidad,
                'fecha_nacimiento' => $request->fecha_nacimiento,
                'genero' => $request->genero,
                'region' => $request->region,
                'direccion' => $request->direccion,
                'movil' => $request->movil,  
                'telefono' => $request->telefono, 
                'email' => $request->email, 
                'estado_civil'=> $request->estado_civil, 

            ]);     

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

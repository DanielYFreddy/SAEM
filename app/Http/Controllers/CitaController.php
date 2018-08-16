<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CitaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
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

            if ($pacientes->isNotEmpty()) {
                foreach ($pacientes as $paciente) {
                  $response .= '<a href="#" class="dropdown-item seleccionar-paciente">'.$paciente->nombre.'</a>';
                }
            }
            else
            {
                $response .= '<a href="#" class="dropdown-item disabled">No existen concidencias</a>';
            }


            $response .='</div>';

            echo $response;
        }

    }

    public function store(Request $request)
    {
        //
        DB::table('cita')->insert(
            [
                'title' => $request->title,
                'descripcion' => $request->descripcion,
                'start' => $request->start,
                'end' => $request->end,
                'color' => $request->color,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),  

            ]
        );

        $response = array('status' => 'success', 'msg' => 'Guardado',);
        //input('title')
        return response()->json($response);
    }

    public function update(Request $request)
    {
        //

        DB::table('cita')->where('id', $request->id)->update(
            [
                'title' => $request->title,
                'descripcion' => $request->descripcion,
                'start' => $request->start,
                'end' => $request->end,
                'color' => $request->color,
                'updated_at' => date('Y-m-d H:i:s'),  

        ]);  

        $response = array('status' => 'success', 'msg' => 'Guardado',);
        //input('title')
        return response()->json($response);
    }

    public function destroy(Request $request)
    {
        //

        DB::table('cita')->where('id', $request->id)->delete();

        $response = array('status' => 'success', 'msg' => 'Eliminada',);
        //input('title')
        return response()->json($response);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatologiaController extends Controller
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
        
        $patologia_personal = DB::table('patologia_personal')
            ->join('patologia', 'patologia_personal.patologia_id', '=', 'patologia.id')
            ->select('patologia_personal.*', 'patologia.nombre')->where('patologia_personal.paciente_id', '=', $paciente_id)
            ->get();

        $paciente = DB::table('paciente')->where('id', $paciente_id)->get();

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
        $cardiovascular_pulmonar = DB::table('patologia')->where('sistema_id','1')->get();
        $renal_hepatica = DB::table('patologia')->where('sistema_id','2')->get();
        $inmunologicas = DB::table('patologia')->where('sistema_id','3')->get();
        $gastrointestinal = DB::table('patologia')->where('sistema_id','4')->get();
        $ortopedia = DB::table('patologia')->where('sistema_id','5')->get();
        $otros = DB::table('patologia')->where('sistema_id','6')->get();

        $paciente = DB::table('paciente')->where('id', $paciente_id)->first();
        return view('historiales.patologias.create')->with('paciente',$paciente)->with('cardiovascular_pulmonar',$cardiovascular_pulmonar)->with('renal_hepatica',$renal_hepatica)->with('inmunologicas',$inmunologicas)->with('gastrointestinal',$gastrointestinal)->with('ortopedia',$ortopedia)->with('otros',$otros);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->personales !== null) {
            foreach ($request->personales as $patologia_id) {
                
                DB::table('patologia_personal')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => $patologia_id,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),  

                    ]
                );
            }
        }

        if ($request->observaciones !== null) {
            DB::table('observacion_patologica')->insert(
                [
                    'paciente_id' => $request->paciente_id,
                    'observaciones' => $request->observaciones,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),  

                ]
            );

        }
         

        alert()->success('Los datos patologicos del paciente han sido registrados', 'Patologias Registradas')->persistent('Cerrar');

        return redirect()->route('patologias.index', $request->paciente_id);
    }


}

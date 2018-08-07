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
            ->join('patologia', 'patologia_personal.patologia_id', '=', 'patologia.id')
            ->select('patologia_personal.*', 'patologia.nombre')->where('patologia_personal.paciente_id', '=', $paciente_id)
            ->get();

        $patologia_parentezco = DB::table('patologia_parentezco')
            ->join('patologia', 'patologia_parentezco.patologia_id', '=', 'patologia.id')
            ->select('patologia_parentezco.*', 'patologia.nombre')->where('patologia_parentezco.paciente_id', '=', $paciente_id)
            ->get();

        $patologia_heredofalimiliar = DB::table('patologia_heredofalimiliar')
            ->join('patologia', 'patologia_heredofalimiliar.patologia_id', '=', 'patologia.id')
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!empty($request->FlebitisTrombosis)) {
        
            foreach ($request->FlebitisTrombosis as $value) { 
                
                if ($value == 'Personales') {

                    DB::table('patologia_personal')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '1',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Hfamiliares') {

                    DB::table('patologia_heredofalimiliar')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '1',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Parentezco') {

                    DB::table('patologia_parentezco')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '1',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

            }
        }

        if (!empty($request->HTA)) {
        
            foreach ($request->HTA as $value) { 
                
                if ($value == 'Personales') {

                    DB::table('patologia_personal')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '2',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Hfamiliares') {

                    DB::table('patologia_heredofalimiliar')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '2',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Parentezco') {

                    DB::table('patologia_parentezco')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '2',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

            }
        }

        if (!empty($request->EnfVascular)) {
        
            foreach ($request->EnfVascular as $value) { 
                
                if ($value == 'Personales') {

                    DB::table('patologia_personal')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '3',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Hfamiliares') {

                    DB::table('patologia_heredofalimiliar')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '3',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Parentezco') {

                    DB::table('patologia_parentezco')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '3',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

            }
        }

        if (!empty($request->AsmaBronquitis)) {
        
            foreach ($request->AsmaBronquitis as $value) { 
                
                if ($value == 'Personales') {

                    DB::table('patologia_personal')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '4',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Hfamiliares') {

                    DB::table('patologia_heredofalimiliar')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '4',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Parentezco') {

                    DB::table('patologia_parentezco')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '4',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

            }
        }

        if (!empty($request->DM)) {
        
            foreach ($request->DM as $value) { 
                
                if ($value == 'Personales') {

                    DB::table('patologia_personal')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '5',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Hfamiliares') {

                    DB::table('patologia_heredofalimiliar')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '5',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Parentezco') {

                    DB::table('patologia_parentezco')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '5',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

            }
        }

        if (!empty($request->HiperHipo)) {
        
            foreach ($request->HiperHipo as $value) { 
                
                if ($value == 'Personales') {

                    DB::table('patologia_personal')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '6',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Hfamiliares') {

                    DB::table('patologia_heredofalimiliar')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '6',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Parentezco') {

                    DB::table('patologia_parentezco')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '6',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

            }
        }

        if (!empty($request->Gota)) {
        
            foreach ($request->Gota as $value) { 
                
                if ($value == 'Personales') {

                    DB::table('patologia_personal')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '7',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Hfamiliares') {

                    DB::table('patologia_heredofalimiliar')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '7',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Parentezco') {

                    DB::table('patologia_parentezco')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '7',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

            }
        }

        if (!empty($request->AR)) {
        
            foreach ($request->AR as $value) { 
                
                if ($value == 'Personales') {

                    DB::table('patologia_personal')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '8',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Hfamiliares') {

                    DB::table('patologia_heredofalimiliar')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '8',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Parentezco') {

                    DB::table('patologia_parentezco')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '8',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

            }
        }

        if (!empty($request->Osteoartrosis)) {
        
            foreach ($request->Osteoartrosis as $value) { 
                
                if ($value == 'Personales') {

                    DB::table('patologia_personal')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '10',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Hfamiliares') {

                    DB::table('patologia_heredofalimiliar')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '10',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Parentezco') {

                    DB::table('patologia_parentezco')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '10',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

            }
        }

        if (!empty($request->Lupus)) {
        
            foreach ($request->Lupus as $value) { 
                
                if ($value == 'Personales') {

                    DB::table('patologia_personal')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '11',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Hfamiliares') {

                    DB::table('patologia_heredofalimiliar')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '11',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Parentezco') {

                    DB::table('patologia_parentezco')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '11',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

            }
        }

        if (!empty($request->Ulceras)) {
        
            foreach ($request->Ulceras as $value) { 
                
                if ($value == 'Personales') {

                    DB::table('patologia_personal')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '12',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Hfamiliares') {

                    DB::table('patologia_heredofalimiliar')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '12',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Parentezco') {

                    DB::table('patologia_parentezco')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '12',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

            }
        }

        if (!empty($request->Gastritis)) {
        
            foreach ($request->Gastritis as $value) { 
                
                if ($value == 'Personales') {

                    DB::table('patologia_personal')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '13',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Hfamiliares') {

                    DB::table('patologia_heredofalimiliar')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '13',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Parentezco') {

                    DB::table('patologia_parentezco')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '13',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

            }
        }

        if (!empty($request->Colitis)) {
        
            foreach ($request->Colitis as $value) { 
                
                if ($value == 'Personales') {

                    DB::table('patologia_personal')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '14',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Hfamiliares') {

                    DB::table('patologia_heredofalimiliar')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '14',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Parentezco') {

                    DB::table('patologia_parentezco')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '14',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

            }
        }

        if (!empty($request->Estrenimiento)) {
        
            foreach ($request->Estrenimiento as $value) { 
                
                if ($value == 'Personales') {

                    DB::table('patologia_personal')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '15',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Hfamiliares') {

                    DB::table('patologia_heredofalimiliar')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '15',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Parentezco') {

                    DB::table('patologia_parentezco')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '15',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

            }
        }

        if (!empty($request->LxCadera)) {
        
            foreach ($request->LxCadera as $value) { 
                
                if ($value == 'Personales') {

                    DB::table('patologia_personal')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '16',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Hfamiliares') {

                    DB::table('patologia_heredofalimiliar')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '16',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Parentezco') {

                    DB::table('patologia_parentezco')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '16',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

            }
        }

        if (!empty($request->LxRodilla)) {
        
            foreach ($request->LxRodilla as $value) { 
                
                if ($value == 'Personales') {

                    DB::table('patologia_personal')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '17',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Hfamiliares') {

                    DB::table('patologia_heredofalimiliar')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '17',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Parentezco') {

                    DB::table('patologia_parentezco')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '17',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

            }
        }

        if (!empty($request->LxHombro)) {
        
            foreach ($request->LxHombro as $value) { 
                
                if ($value == 'Personales') {

                    DB::table('patologia_personal')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '18',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Hfamiliares') {

                    DB::table('patologia_heredofalimiliar')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '18',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Parentezco') {

                    DB::table('patologia_parentezco')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '18',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

            }
        }

        if (!empty($request->Espalda)) {
        
            foreach ($request->Espalda as $value) { 
                
                if ($value == 'Personales') {

                    DB::table('patologia_personal')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '19',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Hfamiliares') {

                    DB::table('patologia_heredofalimiliar')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '19',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Parentezco') {

                    DB::table('patologia_parentezco')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '19',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

            }
        }

        if (!empty($request->CA)) {
        
            foreach ($request->CA as $value) { 
                
                if ($value == 'Personales') {

                    DB::table('patologia_personal')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '20',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Hfamiliares') {

                    DB::table('patologia_heredofalimiliar')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '20',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Parentezco') {

                    DB::table('patologia_parentezco')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '20',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

            }
        }

        if (!empty($request->Alergias)) {
        
            foreach ($request->Alergias as $value) { 
                
                if ($value == 'Personales') {

                    DB::table('patologia_personal')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '21',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Hfamiliares') {

                    DB::table('patologia_heredofalimiliar')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '21',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Parentezco') {

                    DB::table('patologia_parentezco')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '21',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

            }
        }

        if (!empty($request->Ndegenerativas)) {
        
            foreach ($request->Ndegenerativas as $value) { 
                
                if ($value == 'Personales') {

                    DB::table('patologia_personal')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '22',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Hfamiliares') {

                    DB::table('patologia_heredofalimiliar')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '22',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Parentezco') {

                    DB::table('patologia_parentezco')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '22',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

            }
        }

        if (!empty($request->TransMentales)) {
        
            foreach ($request->TransMentales as $value) { 
                
                if ($value == 'Personales') {

                    DB::table('patologia_personal')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '23',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Hfamiliares') {

                    DB::table('patologia_heredofalimiliar')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '23',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Parentezco') {

                    DB::table('patologia_parentezco')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '23',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

            }
        }

        if (!empty($request->TransSueno)) {
        
            foreach ($request->TransSueno as $value) { 
                
                if ($value == 'Personales') {

                    DB::table('patologia_personal')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '24',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Hfamiliares') {

                    DB::table('patologia_heredofalimiliar')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '24',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

                if ($value == 'Parentezco') {

                    DB::table('patologia_parentezco')->insert(
                    [
                        'paciente_id' => $request->paciente_id,
                        'patologia_id' => '24',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'), 
                    ]);
                }

            }
        }
            

        alert()->success('Los datos patologicos del paciente han sido registrados', 'Patologias Registradas')->persistent('Close');

        return redirect()->route('patologias.index', $request->paciente_id);
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

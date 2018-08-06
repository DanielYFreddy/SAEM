<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{
    //

    public function index($paciente_id)
    {
        //
        $paciente = DB::table('paciente')->where('id', $paciente_id)->first();

        return view('reportes.index')->with('paciente',$paciente);
    }

	public function showReporteSeguimiento($paciente_id)
	{
		$paciente = DB::table('paciente')->where('id', $paciente_id)->first();
		$seguimientos = DB::table('seguimiento')->where('paciente_id', $paciente_id)->OrderBy('created_at','DESC')->get();
		$view = view('reportes.reporteseguimiento')->with('paciente', $paciente)->with('seguimientos', $seguimientos);
		$pdf = \App::make('dompdf.wrapper');
		$pdf->loadHTML($view);
		return $pdf->stream('Reporte Seguimiento '.$paciente->nombre);
	}

	public function showReporteHistorialClinico($paciente_id)
	{
		$paciente = DB::table('paciente')->where('id', $paciente_id)->first();
		$diagnostico = DB::table('diagnostico')->where('paciente_id', $paciente_id)->first();
		$view = view('reportes.reporteHistorialClinico')->with('paciente', $paciente)->with('diagnostico', $diagnostico);
		$pdf = \App::make('dompdf.wrapper');
		$pdf->loadHTML($view);
		return $pdf->stream('Reporte de Historial Clinico '.$paciente->nombre);
	}
}

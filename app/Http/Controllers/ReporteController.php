<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }
    
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

	public function showReporteTestPostural($paciente_id)
	{
		
	}

	public function showReporteValoracionGoniometrica($paciente_id)
	{
		$paciente = DB::table('paciente')->where('id', $paciente_id)->first();
		$goniometricas = DB::table('goniometrica')->where('paciente_id', $paciente_id)->OrderBy('created_at','DESC')->get();
		$view = view('reportes.reporteValoracionGoniometrica')->with('paciente', $paciente)->with('goniometricas', $goniometricas);
		$pdf = \App::make('dompdf.wrapper');
		$pdf->loadHTML($view);
		return $pdf->stream('Reporte Valoracion Goniometrica '.$paciente->nombre);
	}

	public function showReporteValoracionManualMuscular($paciente_id)
	{
		$paciente = DB::table('paciente')->where('id', $paciente_id)->first();
		$manualMusculares = DB::table('manualmuscular')->where('paciente_id', $paciente_id)->OrderBy('created_at','DESC')->get();
		$view = view('reportes.reporteValoracionManualMuscular')->with('paciente', $paciente)->with('manualMusculares', $manualMusculares);
		$pdf = \App::make('dompdf.wrapper');
		$pdf->loadHTML($view);
		return $pdf->stream('Reporte Valoracion Manual Muscular '.$paciente->nombre);		
	}

	public function showReporteAntropometria($paciente_id)
	{
		$paciente = DB::table('paciente')->where('id', $paciente_id)->first();
		$antropometrias = DB::table('antropometria')->where('paciente_id', $paciente_id)->OrderBy('created_at','DESC')->get();
		$view = view('reportes.reporteAntropometria')->with('paciente', $paciente)->with('antropometrias', $antropometrias);
		$pdf = \App::make('dompdf.wrapper');
		$pdf->loadHTML($view);
		return $pdf->stream('Reporte de Antropometria '.$paciente->nombre);	
	}
}

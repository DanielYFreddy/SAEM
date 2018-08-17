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
		$diagnosticos = DB::table('diagnostico')->where('paciente_id', $paciente_id)->OrderBy('created_at','DESC')->get();
		$patologiasPersonales = DB::table('patologia_personal')
            ->join('patologia', 'patologia_personal.patologia_id', '=', 'patologia.id')
            ->select('patologia_personal.*', 'patologia.nombre')->where('patologia_personal.paciente_id', '=', $paciente_id)
            ->get();
		$patologiasParentezcos = DB::table('patologia_parentezco')
            ->join('patologia', 'patologia_parentezco.patologia_id', '=', 'patologia.id')
            ->select('patologia_parentezco.*', 'patologia.nombre')->where('patologia_parentezco.paciente_id', '=', $paciente_id)
            ->get();
		$patologiasHeredofamiliares = DB::table('patologia_heredofalimiliar')
            ->join('patologia', 'patologia_heredofalimiliar.patologia_id', '=', 'patologia.id')
            ->select('patologia_heredofalimiliar.*', 'patologia.nombre')->where('patologia_heredofalimiliar.paciente_id', '=', $paciente_id)
            ->get();
		$noPatologicos = DB::table('no_patologico')->where('paciente_id', $paciente_id)->OrderBy('created_at','DESC')->get();
		$ginecologicos = DB::table('ginecologico')->where('paciente_id', $paciente_id)->OrderBy('created_at','DESC')->get();
		$actividadesfisicas = DB::table('actividad_fisica')->where('paciente_id', $paciente_id)->OrderBy('created_at','DESC')->get();
		$hitorialObservaciones = DB::table('hitorial_observacion')->where('paciente_id', $paciente_id)->OrderBy('created_at','DESC')->get();

		$view = view('reportes.reporteHistorialClinico')->with('paciente', $paciente)->with('diagnosticos', $diagnosticos)->with('patologiasPersonales', $patologiasPersonales)->with('patologiasParentezcos', $patologiasParentezcos)->with('patologiasHeredofamiliares', $patologiasHeredofamiliares)->with('noPatologicos', $noPatologicos)->with('ginecologicos', $ginecologicos)->with('actividadesfisicas', $actividadesfisicas)->with('hitorialObservaciones', $hitorialObservaciones);
		$pdf = \App::make('dompdf.wrapper');
		$pdf->loadHTML($view);
		return $pdf->stream('Reporte de Historial Clinico '.$paciente->nombre);
	}

	public function showReporteTestPostural($paciente_id)
	{
		$paciente = DB::table('paciente')->where('id', $paciente_id)->first();

		$testPosturales = DB::table('testpostural')
            ->join('movimiento', 'testpostural.movimiento_id', '=', 'movimiento.id')
            ->join('posicion', 'movimiento.posicion_id', '=', 'posicion.id')
            ->select('testpostural.*', 'movimiento.nombre', 'posicion.nombre as posicionNombre' )->where('testpostural.paciente_id', '=', $paciente_id)->OrderBy('created_at','DESC')
            ->get();

		$view = view('reportes.reporteTestPostural')->with('paciente', $paciente)->with('testPosturales', $testPosturales);
		$pdf = \App::make('dompdf.wrapper');
		$pdf->loadHTML($view);
		return $pdf->stream('Reporte Test Postural '.$paciente->nombre);
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

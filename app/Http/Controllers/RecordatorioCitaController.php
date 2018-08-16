<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\EmailRecordatorioCita;
use Illuminate\Support\Facades\Mail;

class RecordatorioCitaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $citas = DB::table('cita')
            ->join('paciente', 'cita.title', '=', 'paciente.nombre')
            ->select('cita.start', 'paciente.nombre as title', 'paciente.email as email')
            ->whereDate('start', date('Y-m-d',strtotime(date('Y-m-d'). ' + 1 days')))
            ->where('paciente.email','<>',null)
            ->get();
        
        return view('recordatoriocitas.index')->with('citas',$citas);
    }


    public function send()
    {
        //
        try {
            
            $citas = DB::table('cita')
            ->join('paciente', 'cita.title', '=', 'paciente.nombre')
            ->select('cita.start', 'paciente.nombre as title', 'paciente.email as email')
            ->whereDate('start', date('Y-m-d',strtotime(date('Y-m-d'). ' + 1 days')))
            ->where('paciente.email','<>',null)
            ->get();

            foreach ($citas as $cita) {

                Mail::to($cita->email)->send(new EmailRecordatorioCita($cita));
            }

            alert()->success('Las notificaciones han sido enviadas', 'Notificaciones enviadas')->persistent('Cerrar');

            return redirect()->route('recordatorio.index');

        } catch (Exception $e) {
            
            alert()->warning($e->getMessage(), 'Error')->persistent('Cerrar');
            return redirect()->route('recordatorio.index');
        }
        
    }

}

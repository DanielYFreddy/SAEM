@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Diagnostico Medico</h1>
            <div class="card">
                <div class="card-header">
                  Paciente: {{ $paciente->nombre }}
                </div>

                <div class="card-body">
                  <div class="col-md-12">
                    @if ($diagnostico !== null)
                      <h4>Diagnostico: {{ $diagnostico->diagnostico }}</h4>
                      <h5>Tratamiento Farmacologico:</h5>
                      <p>{{ $diagnostico->tratamientoFarmacologico}}</p>
                      <h5>Evolución:</h5>
                      <p>{{ $diagnostico->evolucion}}</p>
                      <h5>Referencia Médica:</h5>
                      <p>{{ $diagnostico->referenciaMedica}}</p>
                      <h5>Antecedentes:</h5>
                      <p>{{ $diagnostico->antecedentes}}</p>
                      <h5>Antecedentes QX:</h5>
                      <p>{{ $diagnostico->cirugias}}</p>
                      <h5>Traumáticos:</h5>
                      <p>{{ $diagnostico->traumaticos}}</p>
                    @else
                      <p>No hay registro de un diagnostico para este paciente</p>
                      <a href="{{ route('diagnosticos.create', $paciente->id) }}" class="btn btn-primary float-left">+Agregar Diagnostico</a>
                    @endif
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
  
    
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Diagnóstico Médico</h1>
            <div class="card">
                <div class="card-header">
                  Paciente: {{ $paciente->nombre }}
                  <a href="{{ route('historiales.index', $paciente->id) }}" class="btn btn-danger float-right">Atras</a>
                </div>

                <div class="card-body">
                  <div class="col-md-12">
                    @if ($diagnostico !== null)
                      <h4>Diagnóstico: 
                        @if ($diagnostico->diagnostico)
                          {{ $diagnostico->diagnostico }}
                        @else
                          {{ 'N/A' }}
                        @endif
                      </h4>
                      <h5>Tratamiento Farmacológico:</h5>
                      <p>
                        @if ($diagnostico->tratamientoFarmacologico)
                          {{ $diagnostico->tratamientoFarmacologico}}
                        @else
                          {{ 'N/A' }}
                        @endif
                      </p>
                      <h5>Evolución:</h5>
                      <p>
                        @if ($diagnostico->evolucion)
                          {{ $diagnostico->evolucion}}
                        @else
                          {{ 'N/A' }}
                        @endif
                      </p>
                      <h5>Referencia Médica:</h5>
                      <p>
                        @if ($diagnostico->referenciaMedica)
                          {{ $diagnostico->referenciaMedica}}
                        @else
                          {{ 'N/A' }}
                        @endif
                      </p>
                      <h5>Antecedentes:</h5>
                      <p>
                        @if ($diagnostico->antecedentes)
                          {{ $diagnostico->antecedentes}}
                        @else
                          {{ 'N/A' }}
                        @endif
                      </p>
                      <h5>Antecedentes QX:</h5>
                      <p>
                        @if ($diagnostico->cirugias)
                          {{ $diagnostico->cirugias}}
                        @else
                          {{ 'N/A' }}
                        @endif
                      </p>
                      <h5>Traumáticos:</h5>
                      <p>
                        @if ($diagnostico->traumaticos)
                          {{ $diagnostico->traumaticos}}
                        @else
                          {{ 'N/A' }}
                        @endif
                      </p>
                    @else
                      <p>No hay registro de un diagnóstico para este paciente</p>
                      <a href="{{ route('diagnosticos.create', $paciente->id) }}" class="btn btn-primary float-left">+Agregar Diagnóstico</a>
                    @endif
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
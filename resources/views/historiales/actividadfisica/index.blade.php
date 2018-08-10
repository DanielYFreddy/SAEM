@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Actividad Física</h1>
            <div class="card">
                <div class="card-header">
                  Paciente: {{ $paciente->nombre }}
                  <a href="{{ route('historiales.index', $paciente->id) }}" class="btn btn-danger float-right">Atras</a>
                </div>

                <div class="card-body">
                  <div class="col-md-12">
                    @if ($actividadFisica !== null)
                      <h5>Nivel de actividad física:</h5>
                      <p>{{ $actividadFisica->nivelActividad}}</p>
                      <h5>Practica actividad o deporte:</h5>
                      <p>{{ $actividadFisica->practicaDeporte}}</p>
                    @else
                      <p>No hay registro de una actividad física para este paciente</p>
                      <a href="{{ route('actividadfisica.create', $paciente->id) }}" class="btn btn-primary float-left">+Agregar Actividad Física</a>
                    @endif
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
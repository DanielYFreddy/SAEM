@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
            <div class="col-md-12">
            <h1>Informacion Observaciones</h1>
            <div class="card">
                <div class="card-header">
                  Paciente: {{ $paciente->nombre }}
                  <a href="{{ route('historialObservaciones.create', $paciente->id) }}" class="btn btn-success float-right">+Agregar</a>
                  <a href="{{ route('historiales.index', $paciente->id) }}" class="btn btn-danger float-right mr-2">Atras</a>
                </div>

                <div class="card-body">
                  <div class="col-md-12">
                    @if (count($historialObservacion)!=0)
                    <ul>
                        @foreach($historialObservacion as $historialObservacion )
                          <li class="list-group-item">{{ $historialObservacion->observaciones }} <a class="float-right">{{ $historialObservacion->created_at }}</a></li>
                        @endforeach
                    </ul>
                    @else
                      <p>No hay registro de alguna observacion para este paciente</p>
                    @endif
                  </div>
                </div>
            </div>
        </div>
@endsection
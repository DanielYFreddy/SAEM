@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
            <div class="col-md-12">
            <h1>Informacion no patologica</h1>
            <div class="card">
                <div class="card-header">
                  Paciente: {{ $paciente->nombre }}
                </div>

                <div class="card-body">
                  <div class="col-md-12">
                    @if ($nopatologico !== null)
                    <ul>
                      <li class="list-group-item">Alcohol: {{ $nopatologico->alcohol }}</li>
                      <li class="list-group-item">Tabaco: {{ $nopatologico->tabaco }}</li>
                      <li class="list-group-item">Medicación: {{ $nopatologico->medicacion }}</li>
                    </ul>
                    @else
                      <p>No hay registro de un informacion no patologica para este paciente</p>
                      <a href="{{ route('nopatologicos.create', $paciente->id) }}" class="btn btn-success float-left">+Agregar</a>
                    @endif
                  </div>
                </div>
            </div>
        </div>
@endsection
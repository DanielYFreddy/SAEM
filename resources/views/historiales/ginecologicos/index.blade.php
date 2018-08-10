@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
            <div class="col-md-12">
            <h1>Informacion Ginecologico</h1>
            <div class="card">
                <div class="card-header">
                  Paciente: {{ $paciente->nombre }}
                  <a href="{{ route('historiales.index', $paciente->id) }}" class="btn btn-danger float-right">Atras</a>
                </div>

                <div class="card-body">
                  <div class="col-md-12">
                    @if (count($ginecologico)!=0)
                    <ul>
                      <li class="list-group-item">Embarazo: {{ $ginecologico->embarazo }}</li>
                      <li class="list-group-item">Abortos: {{ $ginecologico->abortos }}</li>
                      <li class="list-group-item">Periodo Mestrual: {{ $ginecologico->periodoMestrual }}</li>
                      <li class="list-group-item">Tratamiento: {{ $ginecologico->tratamiento }}</li>
                      
                      @if($ginecologico->observacion != ' ')
                        <li class="list-group-item">Observacion: {{ $ginecologico->observacion }}</li>
                      @endif
                    </ul>
                    @else
                      <p>No hay registro de una informacion ginecologico para este paciente</p>
                      <a href="{{ route('ginecologicos.create', $paciente->id) }}" class="btn btn-success float-left">+Agregar</a>
                    @endif
                  </div>
                </div>
            </div>
        </div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Listado de Patologías: {{ $paciente->nombre }}</h1>
            @if(count($patologia_personal)==0)
              <a href="{{ route('patologias.create', $paciente->id) }}" class="btn btn-primary float-left mr-2">+Agregar Patología</a>
            @endif
            <a href="{{ route('historiales.index', $paciente->id) }}" class="btn btn-danger float-left">Atras</a>
            <br></br>
            <div class="card-deck mt-4">
              <div class="card">
                <div class="card-header">
                  <h3>Patologías Personales</h3>                 
                </div>
                <div class="card-body">
                  @if(count($patologia_personal)!=0)
                    <ul class="list-group">
                      @foreach ($patologia_personal as $patologia_personal)
                        <li class="list-group-item">{{ $patologia_personal->nombre }}</li>
                      @endforeach
                    </ul>                   
                  @else
                    <p>No hay registro de una patología personal para este paciente</p>
                    
                  @endif
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <h3>Observaciones Patológicas</h3>
                </div>
                <div class="card-body">
                  @if(count($observaciones_patologicas)!=0)

                    @foreach ($observaciones_patologicas as $observacion_patologica)
                      <p>{{ $observacion_patologica->observaciones }}</p>
                    @endforeach
                    
                  @else
                    <p>No hay registro de una observación patológica para este paciente</p>
                    
                  @endif
                </div>
              </div>             
            </div>
        </div>
    </div>
</div>
@endsection
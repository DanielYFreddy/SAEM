@extends('layouts.app')

@section('content')
<div class="container">  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Listado de Patologías: {{ $paciente->nombre }}</h1>
            @if(count($patologia_personal)==0 && count($patologia_parentezco)==0  && count($patologia_heredofalimiliar)==0 )
              <a href="{{ route('patologias.create', $paciente->id) }}" class="btn btn-primary float-left mr-2">+Agregar Patología</a>
            @endif
            <a href="{{ route('historiales.index', $paciente->id) }}" class="btn btn-danger float-left">Atras</a>
            <br></br>
            <div class="card-deck mt-4">
              <div class="card">
                <div class="card-header">
                  <h3>Patología Personal</h3>
                  
                </div>
                <div class="card-body">
                  @if(count($patologia_personal)!=0)

                    @foreach ($patologia_personal as $patologia_personal)
                      <li class="list-group-item">{{ $patologia_personal->nombre }}</li>
                    @endforeach
                    
                  @else
                    <p>No hay registro de una patología personal para este paciente</p>
                    
                  @endif
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <h3>Patología Parentezco</h3>
                </div>
                <div class="card-body">
                  @if(count($patologia_parentezco)!=0)

                    @foreach ($patologia_parentezco as $patologia_parentezco)
                      <li class="list-group-item">{{ $patologia_parentezco->nombre }}</li>
                    @endforeach
                    
                  @else
                    <p>No hay registro de una patología parentezco para este paciente</p>
                  @endif
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <h3>Patología Heredofamiliar</h3>
                </div>
                <div class="card-body">
                  @if(count($patologia_heredofalimiliar)!=0)

                    @foreach ($patologia_heredofalimiliar as $patologia_heredofalimiliar)
                      <li class="list-group-item">{{ $patologia_heredofalimiliar->nombre }}</li>
                    @endforeach
                    
                  @else
                    <p>No hay registro de una patología heredofamiliar para este paciente</p>
                  @endif
                </div>
              </div>
              
            </div>
        </div>
    </div>
</div>
@endsection
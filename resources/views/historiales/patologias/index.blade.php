@extends('layouts.app')

@section('content')
<div class="container">  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Listado de Patologias: {{ $paciente->nombre }}</h1>
            <div class="card-deck mt-4">
              <div class="card">
                <div class="card-header">
                  <h3>Patologia Personal</h3>
                </div>
                <div class="card-body">
                  @if(count($patologia_personal)!=0)

                    @foreach ($patologia_personal as $patologia_personal)
                      <li class="list-group-item">{{ $patologia_personal->nombre }}</li>
                    @endforeach
                    
                  @else
                    <p>No hay registro de una patologia personal para este paciente</p>
                    <a href="{{ route('patologias.createPersonales', $paciente->id) }}" class="btn btn-primary float-left">+Agregar</a>
                  @endif
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <h3>Patologia Parentezco</h3>
                </div>
                <div class="card-body">
                  @if(count($patologia_parentezco)!=0)

                    @foreach ($patologia_parentezco as $patologia_parentezco)
                      <li class="list-group-item">{{ $patologia_parentezco->nombre }}</li>
                    @endforeach
                    
                  @else
                    <p>No hay registro de una patologia parentezco para este paciente</p>
                    <a href="{{ route('patologias.createParentezco', $paciente->id) }}" class="btn btn-primary float-left">+Agregar</a>
                  @endif
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <h3>Patologia Heredofamiliar</h3>
                </div>
                <div class="card-body">
                  @if(count($patologia_heredofalimiliar)!=0)

                    @foreach ($patologia_heredofalimiliar as $patologia_heredofalimiliar)
                      <li class="list-group-item">{{ $patologia_heredofalimiliar->nombre }}</li>
                    @endforeach
                    
                  @else
                    <p>No hay registro de una patologia heredofamiliar para este paciente</p>
                    <a href="{{ route('patologias.createHeredofamiliar', $paciente->id) }}" class="btn btn-primary float-left">+Agregar</a>
                  @endif
                </div>
              </div>
              
            </div>
        </div>
    </div>
</div>
@endsection
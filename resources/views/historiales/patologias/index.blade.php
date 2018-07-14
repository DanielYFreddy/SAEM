@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Listado de Patologias: {{ $paciente->nombre }}</h1>
            <div class="card">
                <div class="card-header">
                  <a href="{{ route('patologias.create', $paciente->id) }}" class="btn btn-primary float-left">+Nueva Patologia</a>
                </div>

                <div class="card-body">
                  <div class="row">
                      <div class="col-4">
                          <ul class="list-group">

                            @foreach ($patologia_personal as $patologia_personal)
                            <li class="list-group-item active">Patologia Personal</li>
                              <li class="list-group-item">{{ $patologia_personal->nombre }}</li>
                            @endforeach
                            
                          </ul>
                      </div>

                      <div class="col-4">
                          <ul class="list-group">

                            @foreach ($patologia_parentezco as $patologia_parentezco)
                            <li class="list-group-item active">Patologia Parentezco</li>
                              <li class="list-group-item">{{ $patologia_parentezco->nombre }}</li>
                            @endforeach
                            
                          </ul>
                      </div>

                      <div class="col-4">
                          <ul class="list-group">

                            @foreach ($patologia_heredofalimiliar as $patologia_heredofalimiliar)
                            <li class="list-group-item active">Patologia Heredofamiliar</li>
                              <li class="list-group-item">{{ $patologia_heredofalimiliar->nombre }}</li>
                            @endforeach
                            
                          </ul>
                      </div>

                      
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
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
                            <li class="list-group-item active">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                          </ul>
                      </div>

                      <div class="col-4">
                          <ul class="list-group">
                            <li class="list-group-item active">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                          </ul>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
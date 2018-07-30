@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-info" role="alert">
        <h3>Paciente: {{ $paciente->nombre }}</h3>
      </div>      
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Reporte Seguimiento</h5>
          <p class="card-text text-center"><i class="fas fa-file-medical fa-5x"></i></p>
          <a href="{{ route('reporte.seguimiento', $paciente->id) }}" target="_blank" class="btn btn-primary">Ver</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row"><div class="col-md-12"><br></div></div>

</div>
@endsection
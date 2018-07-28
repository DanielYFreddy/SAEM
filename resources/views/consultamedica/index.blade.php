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
          <h5 class="card-title">Test Postural Bipedo Posterior</h5>
          <p class="card-text text-center"><i class="fas fa-file-medical fa-5x"></i></p>
          <a href="{{ route('bipedoposterior.create', $paciente->id) }}" class="btn btn-primary">Ingresar</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Test Postural Bipedo Anterior</h5>
          <p class="card-text text-center"><i class="fas fa-file-medical fa-5x"></i></p>
          <a href="{{ route('bipedoanterior.create', $paciente->id) }}" class="btn btn-primary">Ingresar</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Test Postural <br>Lateral</h5>
          <p class="card-text text-center"><i class="fas fa-file-medical fa-5x"></i></p>
          <a href="{{ route('lateral.create', $paciente->id) }}" class="btn btn-primary">Ingresar</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Test Postural <br>Sedente</h5>
          <p class="card-text text-center"><i class="fas fa-file-medical fa-5x"></i></p>
          <a href="{{ route('sedente.create', $paciente->id) }}" class="btn btn-primary">Ingresar</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row"><div class="col-md-12"><br></div></div>

  <div class="row">
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Test Postural Evaluación Marcha</h5>
          <p class="card-text text-center"><i class="fas fa-file-medical fa-5x"></i></p>
          <a href="{{ route('marcha.create', $paciente->id) }}" class="btn btn-primary">Ingresar</a>
        </div>
      </div>
    </div>
  </div>  
</div>
@endsection
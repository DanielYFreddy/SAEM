@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-success" role="alert">
        <h3>Paciente: {{ $paciente->nombre }}</h3>
      </div>      
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Diagnóstico</h5>
          <p class="card-text text-center"><i class="fas fa-file-medical fa-5x"></i></p>
          <a href="{{ route('diagnosticos.index', $paciente->id) }}" class="btn btn-primary">Ingresar</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Patologías</h5>
          <p class="card-text text-center"><i class="fas fa-file-medical-alt fa-5x"></i></p>
          <a href="{{ route('patologias.index', $paciente->id) }}" class="btn btn-primary">Ingresar</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">No Patológicos</h5>
          <p class="card-text text-center"><i class="fas fa-notes-medical fa-5x"></i></p>
          <a href="{{ route('nopatologicos.index', $paciente->id) }}" class="btn btn-primary">Ingresar</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Ginecológico</h5>
          <p class="card-text text-center"><i class="fas fa-user-md fa-5x"></i></p>
          <a href="{{ route('ginecologicos.index', $paciente->id) }}" class="btn btn-primary">Ingresar</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row"><div class="col-md-12"><br></div></div>
  <div class="row">
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Actividad Física</h5>
          <p class="card-text text-center"><i class="fas fa-file-medical-alt fa-5x"></i></p>
          <a href="{{ route('actividadfisica.index', $paciente->id) }}" class="btn btn-primary">Ingresar</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Observaciones</h5>
          <p class="card-text text-center"><i class="fas fa-notes-medical fa-5x"></i></p>
          <a href="{{ route('historialObservaciones.index', $paciente->id) }}" class="btn btn-primary">Ingresar</a>
        </div>
      </div>
    </div>
  </div>    
</div>
@endsection
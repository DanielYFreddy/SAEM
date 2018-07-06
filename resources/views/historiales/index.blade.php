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
          <h5 class="card-title">Diagnostico</h5>
          <p class="card-text text-center"><i class="fas fa-file-medical fa-5x"></i></p>
          <a href="{{ route('historiales.diagnostico') }}" class="btn btn-primary">+Agregar</a>
          <a href="" class="btn btn-success">Ver</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Patologías</h5>
          <p class="card-text text-center"><i class="fas fa-file-medical-alt fa-5x"></i></p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">No Patologicos</h5>
          <p class="card-text text-center"><i class="fas fa-notes-medical fa-5x"></i></p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Ginecologico</h5>
          <p class="card-text text-center"><i class="fas fa-user-md fa-5x"></i></p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Signos</h5>
          <p class="card-text text-center"><i class="fas fa-file-medical fa-5x"></i></p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Actividad Fisica</h5>
          <p class="card-text text-center"><i class="fas fa-file-medical-alt fa-5x"></i></p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Observaciones</h5>
          <p class="card-text text-center"><i class="fas fa-notes-medical fa-5x"></i></p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Masaje</h5>
          <p class="card-text text-center"><i class="fas fa-user-md fa-5x"></i></p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>    
</div>
@endsection
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
          <h5 class="card-title">Test Postural Bípedo Posterior</h5>
          <p class="card-text text-center"><i class="fas fa-file-medical fa-5x"></i></p>
          <a href="{{ route('bipedoposterior.create', $paciente->id) }}" class="btn btn-primary">Ingresar</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Test Postural Bípedo Anterior</h5>
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
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Antropometria</h5>
          <br>
          <p class="card-text text-center"><i class="fas fa-file-medical fa-5x"></i></p>
          <a href="{{ route('antropometria.create', $paciente->id) }}" class="btn btn-primary">Ingresar</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Valoración Goniométrica</h5>
          <p class="card-text text-center"><i class="fas fa-file-medical fa-5x"></i></p>
          <a href="{{ route('goniometrica.create', $paciente->id) }}" class="btn btn-primary">Ingresar</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Manual Muscular</h5>
          <br>
          <p class="card-text text-center"><i class="fas fa-file-medical fa-5x"></i></p>
          <a href="{{ route('manualMuscular.create', $paciente->id) }}" class="btn btn-primary">Ingresar</a>
        </div>
      </div>
    </div>
  </div> 

  <div class="row"><div class="col-md-12"><br></div></div>

  <div class="row">
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Hoja de Consulta</h5>
          <br>
          <p class="card-text text-center"><i class="fas fa-file-medical fa-5x"></i></p>
          <a href="{{ route('consulta.create', $paciente->id) }}" class="btn btn-primary">Ingresar</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Hoja de Tratamiento</h5>
          <br>
          <p class="card-text text-center"><i class="fas fa-file-medical fa-5x"></i></p>
          <a href="{{ route('tratamiento.create', $paciente->id) }}" class="btn btn-primary">Ingresar</a>
        </div>
      </div>
    </div>
  </div>  
</div>
@endsection
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
          <h5 class="card-title">Reporte de <br>Consulta</h5>
          <p class="card-text text-center"><i class="fas fa-file-medical fa-5x"></i></p>
          <a href="{{ route('reporte.consulta', $paciente->id) }}" target="_blank" class="btn btn-primary">Ver</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Reporte de <br>Tratamiento</h5>
          <p class="card-text text-center"><i class="fas fa-file-medical fa-5x"></i></p>
          <a href="{{ route('reporte.tratamiento', $paciente->id) }}" target="_blank" class="btn btn-primary">Ver</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Reporte Historial Clinico</h5>
          <p class="card-text text-center"><i class="fas fa-file-medical fa-5x"></i></p>
          <a href="{{ route('reporte.historial', $paciente->id) }}" target="_blank" class="btn btn-primary">Ver</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Reporte de Test Postural</h5>
          <p class="card-text text-center"><i class="fas fa-file-medical fa-5x"></i></p>
          <a href="{{ route('reporte.testPostural', $paciente->id) }}" target="_blank" class="btn btn-primary">Ver</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row"><div class="col-md-12"><br></div></div>

  <div class="row">
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Reporte de Valoración Manual Muscular</h5>
          <p class="card-text text-center"><i class="fas fa-file-medical fa-5x"></i></p>
          <a href="{{ route('reporte.valoracionManualMuscular', $paciente->id) }}" target="_blank" class="btn btn-primary">Ver</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Reporte de Antropometria</h5>
          <p class="card-text text-center"><i class="fas fa-file-medical fa-5x"></i></p>
          <a href="{{ route('reporte.antropometria', $paciente->id) }}" target="_blank" class="btn btn-primary">Ver</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Reporte de Valoración Goniométrica</h5>
          <p class="card-text text-center"><i class="fas fa-file-medical fa-5x"></i></p>
          <a href="{{ route('reporte.valoracionGoniometrica', $paciente->id) }}" target="_blank" class="btn btn-primary">Ver</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row"><div class="col-md-12"><br></div></div>

</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <h1>Listado de enfermedades no patologicas</h1>
        <div class="col-md-6">
          <ul class="list-group">
            <li class="list-group-item list-group-item-dark d-flex justify-content-between align-items-center">No Patologicos<a href="{{ route('nopatologicos.create', $paciente->id) }}" class="btn btn-success float-left">+Agregar</a><a href="" class="btn btn-warning float-left">Modificar</a></li>
            @foreach ($nopatologicos as $nopatologico)
              <li class="list-group-item">{{ $nopatologico->alcohol }}</li>
              <li class="list-group-item">{{ $nopatologico->tabaco }}</li>
              <li class="list-group-item">{{ $nopatologico->medicacion }}</li>
            @endforeach
          </ul>
        </div>
    </div>
</div>
@endsection
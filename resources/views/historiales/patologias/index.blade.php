@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Listado de patologias: {{ $paciente->nombre }}</h1>
            <div class="card">
                <div class="card-header">
                  <a href="{{ route('patologias.create', $paciente->id) }}" class="btn btn-primary float-left">+Nueva Patologia</a>
                </div>

                <div class="card-body">
                  <div class="col-md-12">
                    <table class="table table-responsive-sm">
                      <thead>
                        <tr>
                          <th scope="col">Fecha de visita</th>
                          <th scope="col">Patologia</th>
                          <th scope="col">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>                       
                        @foreach ($patologias as $patologia)
                          <tr>
                            <th scope="row">{{ $patologia->created_at }}</th>
                            <td>{{ $patologia->patologia }}</td>
                            <td><a href="" class="btn btn-warning">Modificar</a></td>
                         </tr>
                        @endforeach                      
                      </tbody>
                    </table>
                    {{ $patologias->links() }}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
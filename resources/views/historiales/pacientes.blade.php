@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Historiales Clinicos</h1>
            <div class="card">
                <div class="card-header">
                  <form method="GET" action="{{ route('historiales.buscar') }}">

                    <div class="form-group">                  
                      <input type="text" class="form-control" placeholder="Buscar paciente" name="nombre">
                    </div>
                
                    <button type="submit" class="btn btn-secondary">Buscar</button>                  
                                    
                  </form>
                </div>

                <div class="card-body">
                  <div class="col-md-12">
                    <table class="table table-responsive-sm">
                      <thead>
                        <tr>
                          <th scope="col">Cedúla</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Movil</th>
                          <th scope="col">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>                       
                        @foreach ($pacientes as $paciente)
                          <tr>
                            <th scope="row">{{ $paciente->cedula }}</th>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->movil }}</td>
                            <td><a href="{{ route('historiales.index', $paciente->id) }}" class="btn btn-primary">+Historial</a></td>
                         </tr>
                        @endforeach                      
                      </tbody>
                    </table>
                    {{ $pacientes->links() }}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
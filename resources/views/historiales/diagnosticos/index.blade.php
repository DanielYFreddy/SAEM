@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Listado de diagnosticos: {{ $paciente->nombre }}</h1>
            <div class="card">
                <div class="card-header">
                  <a href="{{ route('diagnosticos.create', $paciente->id) }}" class="btn btn-primary float-left">+Nuevo Diagnostico</a>
                  <form method="GET" action="" class="form-inline float-right">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Buscar diagnosticos" name="">
                    </div>
                    <button type="submit" class="btn btn-secondary">Buscar</button>
                  </form>
                </div>

                <div class="card-body">
                  <div class="col-md-12">
                    <table class="table table-responsive-sm">
                      <thead>
                        <tr>
                          <th scope="col">Fecha de visita</th>
                          <th scope="col">Diagnostico</th>
                          <th scope="col">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>                       
                        @foreach ($diagnosticos as $diagnostico)
                          <tr>
                            <th scope="row">{{ $diagnostico->created_at }}</th>
                            <td>{{ $diagnostico->diagnostico }}</td>
                            <td><a href="{{ route('diagnosticos.edit', $diagnostico->id) }}" class="btn btn-warning">Modificar</a></td>
                         </tr>
                        @endforeach                      
                      </tbody>
                    </table>
                    {{ $diagnosticos->links() }}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
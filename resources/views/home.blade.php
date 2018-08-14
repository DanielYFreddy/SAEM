@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="col-md-12">
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-4">Bienvenido {{ Auth::user()->name }}</h1>
                <p class="lead">Desde aquí podrá visualizar la información más importante de sus pacientes y consultas para este día.</p>
                 <a class="btn btn-primary" href="{{ route('pacientes.create') }}" role="button">+Registrar Paciente</a>
              </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h3>Consulta para hoy</h3>
            <div class="card">
                <div class="card-header">Paciente agendados para hoy {{ date('d-m-Y') }}</div>

                <div class="card-body">
                    @if ($citas->isEmpty())
                        No hay citas registradas para hoy.
                    @else
                        <table class="table table-striped">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">Hora</th>
                              <th scope="col">Paciente</th>
                              <th scope="col">Descripción</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($citas as $cita)
                                <?php
                                    $fechaHora = explode(" ", $cita->start);
                                    
                                ?>
                                <tr>
                                  <td>{{$fechaHora[1]}}</td>
                                  <td>{{$cita->title}}</td>
                                  <td>{{$cita->descripcion}}</td>
                                </tr>
                            @endforeach
                          </tbody>  
                      </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

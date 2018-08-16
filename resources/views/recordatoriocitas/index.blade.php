
@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Listado de citas para el dia de mañana</h1>
            <div class="card">
                <div class="card-header">
                	Listado de citas
                  @if (!$citas->isEmpty()) 
                	 <a href="{{ route('recordatorio.send') }}" class="btn btn-success float-right">Enviar notificación</a>
                  @endif
                </div>

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
                                  <td>{{$cita->email}}</td>
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


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ImagenReporte.css') }}" rel="stylesheet">
</head>
<body>

  @if ($testPosturales->isEmpty())
    <center>
      <h1 class="font-weight-bold">Reporte de Test Postural al Paciente</h1>
    </center>

    <center>
        <h3>{{ $paciente->nombre }}</h3>
    </center>
    <hr>
    <p>No existe ningún test postural registrado para este paciente.</p>
  @else
    <center>
      <h1 class="font-weight-bold">Reporte de Test Postural al Paciente</h1>
    </center>

    <center>
        <h3>{{ $paciente->nombre }}</h3>
    </center>
    <hr>

    <table class="table table-bordered ">
      <tr>
        <td><h4>Movimiento</h4></td>
        <td><h4>Lado</h4></td>
        <td><h4>Posición</h4></td>
        <td><h4>Fecha</h4></td>
      </tr>
     @foreach ($testPosturales as $testPostural)

        <tr>
            <td>{!! $testPostural->nombre !!}</td>
            <td>{!! $testPostural->lado !!}</td>
            <td>{!! $testPostural->posicionNombre !!}</td>
            <td>{!! date('d/m/Y', strtotime($testPostural->created_at)) !!}</td>
        </tr>

      @endforeach


    </table>

  @endif
</body>
</html>

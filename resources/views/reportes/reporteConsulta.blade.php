<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ImagenReporte.css') }}" rel="stylesheet">
</head>
<body>

  @if ($consultas->isEmpty())
    <center>
      <h1 class="font-weight-bold">Reporte de Consultas al Paciente</h1>
    </center>

    <center>
        <h3>{{ $paciente->nombre }}</h3>
    </center>
    <hr>
    <p>No existe ninguna consulta registrado para este paciente.</p>
  @else

   @foreach ($consultas as $consulta)

      <center>
          <h1 class="font-weight-bold">Reporte de Consultas al Paciente</h1>
      </center>

      <center>
          <h3>{{ $paciente->nombre }}</h3>
      </center>
      <hr>

      <table class="table table-bordered ">
        <tr>
          <th colspan="2" class="text-center">
           <h4>Fecha: {!! date('d/m/Y', strtotime($consulta->created_at)) !!}</h4>
          </th>
        </tr>

        <tr>
          <th>
            Motivo de consulta
          </th>
          <th>
           {!! $consulta->motivoConsulta !!}
          </th>
        </tr>

        <tr>
          <th>
            Evolución
          </th>
          <th>
           {!! $consulta->evolucion !!}
          </th>
        </tr>

        <tr>
          <th>
            Evaluaciones Funcionales
          </th>
          <th>
           {!! $consulta->evaluacionesFuncionales !!}
          </th>
        </tr>

        <tr>
          <th>
            Escala de dolor
          </th>
          <th>
           {!! $consulta->escalaDolor !!}
          </th>
        </tr>

        <tr>
          <th>
            Observaciones
          </th>
          <th>
           {!! $consulta->observaciones !!}
          </th>
        </tr>

      </table>

      @if(end($consultas)!=$consulta)
        <div style="page-break-after: always"></div>
      @else
        
      @endif
      
    @endforeach
  @endif
</body>
</html>

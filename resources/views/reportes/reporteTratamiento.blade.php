<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ImagenReporte.css') }}" rel="stylesheet">
</head>
<body>

  @if ($tratamientos->isEmpty())
    <center>
      <h1 class="font-weight-bold">Reporte de Tratamiento al Paciente</h1>
    </center>

    <center>
        <h3>{{ $paciente->nombre }}</h3>
    </center>
    <hr>
    <p>No existe ningún tratamiento registrado para este paciente.</p>
  @else

   @foreach ($tratamientos as $tratamiento)

      <center>
          <h1 class="font-weight-bold">Reporte de Tratamiento al Paciente</h1>
      </center>

      <center>
          <h3>{{ $paciente->nombre }}</h3>
      </center>
      <hr>

      <table class="table table-bordered ">
        <tr>
          <th colspan="2" class="text-center">
           <h4>Fecha: {!! date('d/m/Y', strtotime($tratamiento->created_at)) !!}</h4>
          </th>
        </tr>

        <tr>
          <th>
            DXFT
          </th>
          <th>
           {!! $tratamiento->DXFT !!}
          </th>
        </tr>

        <tr>
          <th>
            Objetivos
          </th>
          <th>
           {!! $tratamiento->objetivos !!}
          </th>
        </tr>

        <tr>
          <th>
            Parametros de Tratamiento
          </th>
          <th>
           {!! $tratamiento->parametrosTratamiento !!}
          </th>
        </tr>

        <tr>
          <th>
            Observaciones
          </th>
          <th>
           {!! $tratamiento->observaciones !!}
          </th>
        </tr>

      </table>

      @if(end($tratamientos)!=$tratamiento)
        <div style="page-break-after: always"></div>
      @else
        
      @endif
      
    @endforeach
  @endif
</body>
</html>

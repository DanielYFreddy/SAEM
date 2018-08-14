<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ImagenReporte.css') }}" rel="stylesheet">
</head>
<body>

  @if ($goniometricas->isEmpty())
    <center>
      <h1 class="font-weight-bold">Reporte Valoración Goniométrica al Paciente</h1>
    </center>

    <center>
        <h3>{{ $paciente->nombre }}</h3>
    </center>
    <hr>
    <p>No existe ninguna valoración goniométrica registrada para este paciente.</p>
  @else

   @foreach ($goniometricas as $goniometrica)

      <center>
          <h1 class="font-weight-bold">Reporte Valoración Goniométrica al Paciente</h1>
      </center>

      <center>
          <h3>{{ $paciente->nombre }}</h3>
      </center>
      <hr>

      <table class="table table-bordered ">
        <tr>
          <th colspan="2" class="text-center">
           <h4>Fecha: {!! date('d/m/Y', strtotime($goniometrica->created_at)) !!}</h4>
          </th>
        </tr>

        <tr>
          <th>
            Articulación
          </th>
          <th>
           {!! $goniometrica->articulacion !!}
          </th>
        </tr>

        <tr>
          <th>
            Lado
          </th>
          <th>
           {!! $goniometrica->lado !!}
          </th>
        </tr>

        <tr>
          <th>
            Grado de Movilidad
          </th>
          <th>
           {!! $goniometrica->gradoMovilidad !!}
          </th>
        </tr>

        <tr>
          <th>
            Observaciones
          </th>
          <th>
           {!! $goniometrica->observaciones !!}
          </th>
        </tr>

      </table>

      @if(end($goniometricas)!=$goniometrica)
        <div style="page-break-after: always"></div>
      @else
        
      @endif
      
    @endforeach
  @endif
</body>
</html>

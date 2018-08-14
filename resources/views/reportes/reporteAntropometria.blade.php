<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ImagenReporte.css') }}" rel="stylesheet">
</head>
<body>

  @if ($antropometrias->isEmpty())
    <center>
      <h1 class="font-weight-bold">Reporte de Antropometría al Paciente</h1>
    </center>

    <center>
        <h3>{{ $paciente->nombre }}</h3>
    </center>
    <hr>
    <p>No existe ninguna antropometría registrada para este paciente.</p>
  @else

   @foreach ($antropometrias as $antropometria)

      <center>
          <h1 class="font-weight-bold">Reporte de Antropometría al Paciente</h1>
      </center>

      <center>
          <h3>{{ $paciente->nombre }}</h3>
      </center>
      <hr>

      <table class="table table-bordered ">
        <tr>
          <th colspan="2" class="text-center">
           <h4>Fecha: {!! date('d/m/Y', strtotime($antropometria->created_at)) !!}</h4>
          </th>
        </tr>

        <tr>
          <th>
            Región del Miembro
          </th>
          <th>
           {!! $antropometria->miembroRegion !!}
          </th>
        </tr>

        <tr>
          <th>
            Lado
          </th>
          <th>
           {!! $antropometria->lado !!}
          </th>
        </tr>

        <tr>
          <th>
            Miembro
          </th>
          <th>
           {!! $antropometria->miembro !!}
          </th>
        </tr>

        <tr>
          <th>
            En CM
          </th>
          <th>
           {!! $antropometria->cm !!}
          </th>
        </tr>

      </table>

      @if(end($antropometrias)!=$antropometria)
        <div style="page-break-after: always"></div>
      @else
        
      @endif
      
    @endforeach
  @endif
</body>
</html>

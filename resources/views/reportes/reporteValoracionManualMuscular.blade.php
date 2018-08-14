<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ImagenReporte.css') }}" rel="stylesheet">
</head>
<body>

  @if ($manualMusculares->isEmpty())
    <center>
      <h1 class="font-weight-bold">Reporte Valoración Manual Muscular</h1>
      <h1 class="font-weight-bold">Paciente</h1>
    </center>

    <center>
        <h3>{{ $paciente->nombre }}</h3>
    </center>
    <hr>
    <p>No existe ninguna valoración manual muscular registrada para este paciente.</p>
  @else

   @foreach ($manualMusculares as $manualMuscular)

      <center>
          <h1 class="font-weight-bold">Reporte Valoración Manual Muscular</h1>
          <h1 class="font-weight-bold">Paciente</h1>
      </center>

      <center>
          <h3>{{ $paciente->nombre }}</h3>
      </center>
      <hr>

      <table class="table table-bordered ">
        <tr>
          <th colspan="2" class="text-center">
           <h4>Fecha: {!! date('d/m/Y', strtotime($manualMuscular->created_at)) !!}</h4>
          </th>
        </tr>

        <tr>
          <th>
            Músculo
          </th>
          <th>
           {!! $manualMuscular->musculo !!}
          </th>
        </tr>

        <tr>
          <th>
            Lado
          </th>
          <th>
           {!! $manualMuscular->lado !!}
          </th>
        </tr>

        <tr>
          <th>
            Fuerza Muscular
          </th>
          <th>
           {!! $manualMuscular->fuerzaMuscular !!}
          </th>
        </tr>

        <tr>
          <th>
            Observaciones
          </th>
          <th>
           {!! $manualMuscular->observaciones !!}
          </th>
        </tr>

      </table>

      @if(end($manualMusculares)!=$manualMuscular)
        <div style="page-break-after: always"></div>
      @else
        
      @endif
      
    @endforeach
  @endif
</body>
</html>

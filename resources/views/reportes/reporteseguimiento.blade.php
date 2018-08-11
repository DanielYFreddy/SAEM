<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

</head>
<body>

  <h3>Reporte de Seguimiento del paciente: {{ $paciente->nombre }}</h3>
  <hr>
  @if ($seguimientos->isEmpty())
    <p>No hay seguimiento para mostrar</p>
  @else

   @foreach ($seguimientos as $seguimiento)
      <table class="table table-bordered ">
        <tr>
          <th colspan="2" class="text-center">
           <h4>Fecha: {!! $seguimiento->created_at !!}</h4>
          </th>
        </tr>

        <tr>
          <th>
            Motivo de consulta
          </th>
          <th>
           {!! $seguimiento->motivoConsulta !!}
          </th>
        </tr>

        <tr>
          <th>
            DXFT
          </th>
          <th>
           {!! $seguimiento->DXFT !!}
          </th>
        </tr>

        <tr>
          <th>
            Observaciones
          </th>
          <th>
           {!! $seguimiento->observaciones !!}
          </th>
        </tr>

        <tr>
          <th>
            Tratamiento
          </th>
          <th>
           {!! $seguimiento->tratamiento !!}
          </th>
        </tr>

        <tr>
          <th>
            Parametros
          </th>
          <th>
           {!! $seguimiento->parametros !!}
          </th>
        </tr>

        <tr>
          <th>
            Evolución
          </th>
          <th>
           {!! $seguimiento->evolucion !!}
          </th>
        </tr>

        <tr>
          <th>
            Escala de dolor
          </th>
          <th>
           {!! $seguimiento->escalaDolor !!}
          </th>
        </tr>

      </table>

      @if(end($seguimientos)!=$seguimiento)
        <div style="page-break-after: always"></div>
      @else
        
      @endif
      
    @endforeach
  @endif
</body>
</html>

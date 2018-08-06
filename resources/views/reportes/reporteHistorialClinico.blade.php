<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

</head>
<body>

  <h3>Reporte de historial clinico del paciente: {{ $paciente->nombre }}</h3>
  <hr>
  <h3>Diagnostico</h3>
  @if ($diagnostico == null)
      <p>No hay diagnostico para mostrar</p>
  @else
    <table class="table table-bordered ">
      <tr>
        <th>
          Diagnostico
        </th>
        <th>
         {!! $diagnostico->diagnostico !!}
        </th>
      </tr>

      <tr>
        <th>
          Tratamiento Farmacologico
        </th>
        <th>
         {!! $diagnostico->tratamientoFarmacologico !!}
        </th>
      </tr>

      <tr>
        <th>
          Evolución
        </th>
        <th>
         {!! $diagnostico->evolucion !!}
        </th>
      </tr>

      <tr>
        <th>
          Referencia Médica
        </th>
        <th>
         {!! $diagnostico->referenciaMedica !!}
        </th>
      </tr>

      <tr>
        <th>
          Antecedentes
        </th>
        <th>
         {!! $diagnostico->antecedentes !!}
        </th>
      </tr>

      <tr>
        <th>
          Antecedentes QX
        </th>
        <th>
         {!! $diagnostico->cirugias !!}
        </th>
      </tr>

      <tr>
        <th>
          Traumáticos
        </th>
        <th>
         {!! $diagnostico->traumaticos !!}
        </th>
      </tr>
    </table>
  @endif
</body>
</html>

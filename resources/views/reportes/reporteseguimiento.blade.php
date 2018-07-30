<h3>Reporte de Seguimiento del paciente: {{ $paciente->nombre }}</h3>
<hr>
@foreach ($seguimientos as $seguimiento)
  <p>{!! $seguimiento->motivoConsulta !!}</p>
  <p>{!! $seguimiento->DXFT !!}</p>
@endforeach

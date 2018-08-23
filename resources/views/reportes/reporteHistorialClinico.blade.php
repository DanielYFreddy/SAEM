<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ImagenReporte.css') }}" rel="stylesheet">
</head>
<body>


      <center>
          <h1 class="font-weight-bold">Reporte de Historial Clínico al Paciente</h1>
      </center>

      <center>
          <h3>{{ $paciente->nombre }}</h3>
      </center>
      <hr>

    @if ($diagnosticos->isEmpty())
      <h2>Diagnóstico</h2>
      <p>No existe ningún diagnóstico registrado para este paciente.</p>
    @else

      @foreach ($diagnosticos as $diagnostico)

        <h2>Diagnóstico</h2>
        <table class="table table-bordered ">
          
          <tr>
            <th>
              Diagnóstico
            </th>
            <th>
             {!! $diagnostico->diagnostico !!}
            </th>
          </tr>

          <tr>
            <th>
              Tratamiento Farmacológico
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
              Antecedentes Médicos
            </th>
            <th>
             {!! $diagnostico->antecedentes !!}
            </th>
          </tr>

          <tr>
            <th>
              Cirugías
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
        
      @endforeach

    @endif

    <br>

    <h2>Patologías</h2>
    <table class="table table-bordered ">
      <thead>
        <tr>
          <th><h4>Patología Personal</h4></th>
          <th><h4>Observaciones Patológicas</h4></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            @if ($patologiasPersonales->isEmpty())
              <p>No existe ninguna patología registrada para este paciente.</p>
            @else
                
                @foreach ($patologiasPersonales as $patologiaPersonal)
                     {!! $patologiaPersonal->nombre !!}
                      <br> 
                @endforeach
            @endif
          </td>
          <td>
            @if ($observaciones_patologicas->isEmpty())
              <p>No existe ninguna observación patológica para este paciente.</p>
            @else
                
                @foreach ($observaciones_patologicas as $observacion_patologica)
                     {!! $observacion_patologica->observaciones !!}
                      <br> 
                @endforeach
            @endif
          </td>
        </tr>
      </tbody>
    </table>

    <br>

    @if ($noPatologicos->isEmpty())
      <h2>No Patológicos</h2>
      <p>No existe ninguna información no patológica registrada para este paciente.</p>
    @else

      @foreach ($noPatologicos as $noPatologico)

        <h2>No Patológicos</h2>
        <table class="table table-bordered ">
          
          <tr>
            <th>
              Alcohol
            </th>
            <th>
             {!! $noPatologico->alcohol !!}
            </th>
          </tr>

          <tr>
            <th>
              Tabaco
            </th>
            <th>
             {!! $noPatologico->tabaco !!}
            </th>
          </tr>

          <tr>
            <th>
              Medicación
            </th>
            <th>
             {!! $noPatologico->medicacion !!}
            </th>
          </tr>

        </table>
        
      @endforeach

    @endif

    <br>

    @if ($ginecologicos->isEmpty())
      <h2>Ginecológicos</h2>
      <p>No existe ninguna información ginecológica registrada para este paciente.</p>
    @else

      @foreach ($ginecologicos as $ginecologico)

        <h2>Ginecológicos</h2>
        <table class="table table-bordered ">
          
          <tr>
            <th>
              Embarazo
            </th>
            <th>
             {!! $ginecologico->embarazo !!}
            </th>
          </tr>

          <tr>
            <th>
              Abortos
            </th>
            <th>
             {!! $ginecologico->abortos !!}
            </th>
          </tr>

          <tr>
            <th>
              Periodo Mestrual
            </th>
            <th>
             {!! $ginecologico->periodoMestrual !!}
            </th>
          </tr>

          <tr>
            <th>
              Tratamiento
            </th>
            <th>
             {!! $ginecologico->tratamiento !!}
            </th>
          </tr>

          <tr>
            <th>
              Observaciones
            </th>
            <th>
             {!! $ginecologico->observacion !!}
            </th>
          </tr>

        </table>
        
      @endforeach

    @endif

    <br>

    @if ($actividadesfisicas->isEmpty())
      <h2>Actividad Física</h2>
      <p>No existe ninguna actividad física registrada para este paciente.</p>
    @else

      @foreach ($actividadesfisicas as $actividadfisica)

        <h2>Actividad Física</h2>
        <table class="table table-bordered ">
          
          <tr>
            <th>
              Nivel de Actividad
            </th>
            <th>
             {!! $actividadfisica->nivelActividad !!}
            </th>
          </tr>

          <tr>
            <th>
              Practica Deportes?
            </th>
            <th>
             {!! $actividadfisica->practicaDeporte !!}
            </th>
          </tr>

          <tr>
            <th>
              Observaciones
            </th>
            <th>
             {!! $actividadfisica->observaciones !!}
            </th>
          </tr>

        </table>
        
      @endforeach

    @endif

    <br>

    @if ($hitorialObservaciones->isEmpty())
      <h2>Observaciones</h2>
      <p>No existe ninguna observación registrada para este paciente.</p>
    @else

        <h2>Observaciones</h2>
        <table class="table table-bordered ">
            <tr>
              <td><h4>Observación</h4></td>
              <td><h4>Fecha</h4></td>
            </tr>
          @foreach ($hitorialObservaciones as $hitorialObservacion)
          <tr>
            <td>
              {!! $hitorialObservacion->observaciones !!}
            </td>
            <td>
              {!! date('d/m/Y', strtotime($hitorialObservacion->created_at)) !!}
            </td>
          </tr>
          @endforeach
        </table>
       
    @endif

    
</body>
</html>

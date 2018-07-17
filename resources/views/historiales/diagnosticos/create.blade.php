@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Agregar Diagnostico</h1>
            <div class="card">
                <div class="card-header">
                  Paciente: {{ $paciente->nombre }}
                  <a href="{{ route('diagnosticos.index', $paciente->id) }}" class="btn btn-danger float-right">Atras</a>
                </div>

                <div class="card-body">
                  <div class="col-md-12">
                    {!! Form::open(['route' => ['diagnosticos.store'], 'id' => 'form']) !!}
                      <input type="hidden" name="paciente_id" value="{{$paciente->id}}">
                      <div class="form-group">
                        {{ Form::label('diagnostico', 'Diagnóstico Médico') }}
                        {{ Form::text('diagnostico',null,['id'=>'diagnostico','class'=>'form-control']) }}
                      </div>
                      <div class="form-group">
                        {{ Form::label('tratamientoFarmacologico', 'Tratamiento Farmacologico') }}
                        {{ Form::textarea('tratamientoFarmacologico',null,['class'=>'form-control', 'rows'=>'3']) }}
                      </div>
                      <div class="form-group">
                        {{ Form::label('evolucion', 'Evolución') }}
                        {{ Form::textarea('evolucion',null,['class'=>'form-control', 'rows'=>'3']) }}
                      </div>
                      <div class="form-group">
                        {{ Form::label('referenciaMedica', 'Referencia Médica') }}
                        {{ Form::text('referenciaMedica',null,['id'=>'referenciaMedica','class'=>'form-control']) }}
                      </div>
                      <div class="form-group">
                        {{ Form::label('antecedentes', 'Antecedentes') }}
                        {{ Form::textarea('antecedentes',null,['class'=>'form-control', 'rows'=>'3']) }}
                      </div>
                      <div class="form-group">
                        {{ Form::label('cirugias', 'Antecedentes QX') }}
                        {{ Form::textarea('cirugias',null,['class'=>'form-control', 'rows'=>'3']) }}
                      </div>
                      <div class="form-group">
                        {{ Form::label('traumaticos', 'Traumáticos') }}
                        {{ Form::textarea('traumaticos',null,['class'=>'form-control', 'rows'=>'3']) }}
                      </div>                      

                      {{ Form::submit('Guardar', ['class'=>'btn btn-primary', 'onclick' => 
                        'confirmar()'
                        ]) 
                      }}                     

                    {!! Form::close() !!}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
  
  function confirmar()
  {
    document.querySelector('#form').addEventListener('submit', function(e) {
      var form = this;

      e.preventDefault(); // <--- prevent form from submitting
     
      swal({
          title: "Estas seguro de guardar la informacion?",
          text: "La informacion se asignara al paciente!",
          type: "warning",
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Si",
          cancelButtonText: "No",
          showCancelButton:true,
        },
          function(isConfirm) {
            if (isConfirm) {
                form.submit(); // <--- submit form programmatically
                e.preventDefault();
            } else {
                e.preventDefault();
          }
        }
        );


    });
  }

</script>
@endsection
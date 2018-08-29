@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Agregar Tratamiento</h1>
            <div class="card">
                <div class="card-header">
                  Paciente: {{ $paciente->nombre }}
                  <a href="{{ route('consultamedica.index', $paciente->id) }}" class="btn btn-danger float-right">Atras</a>
                </div>

                <div class="card-body">
                  <div class="col-md-12">
                    {!! Form::open(['route' => ['tratamiento.store'], 'id' => 'form']) !!}
                      <input type="hidden" name="paciente_id" value="{{$paciente->id}}">
                     

                      <div class="form-group">
                        {{ Form::label('DXFT', 'DXFT') }}
                        {{ Form::textarea('DXFT',null,['class'=>'form-control', 'rows'=>'3', 'required']) }}
                      </div>

                      <div class="form-group">
                        {{ Form::label('objetivos', 'Objetivos') }}
                        {{ Form::textarea('objetivos',null,['class'=>'form-control', 'rows'=>'3']) }}
                      </div>

                      <div class="form-group">
                        {{ Form::label('parametrosTratamiento', 'Parametros de Tratamiento') }}
                        {{ Form::textarea('parametrosTratamiento',null,['class'=>'form-control', 'rows'=>'3']) }}
                      </div>

                      <div class="form-group">
                        {{ Form::label('observaciones', 'Observaciones') }}
                        {{ Form::textarea('observaciones',null,['class'=>'form-control', 'rows'=>'3']) }}
                      </div>

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
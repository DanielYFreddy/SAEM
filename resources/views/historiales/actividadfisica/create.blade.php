@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Actividad Física</h1>
            <div class="card">
                <div class="card-header">
                  Paciente: {{ $paciente->nombre }}
                  <a href="{{ route('actividadfisica.index', $paciente->id) }}" class="btn btn-danger float-right">Atras</a>
                </div>

                <div class="card-body">
                  <div class="col-md-12">
                    {!! Form::open(['route' => ['actividadfisica.store'], 'id' => 'form']) !!}
                      <input type="hidden" name="paciente_id" value="{{$paciente->id}}">

                      <div class="form-group">
                        {{ Form::label('', 'Nivel de actividad física') }}

                        <div class="form-check">
                          {{ Form::radio('nivelActividad', 'Activo',true,['class'=>'form-check-input']) }}
                          {{ Form::label('Activo', 'Activo',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::radio('nivelActividad', 'Poco Activo',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Poco Activo', 'Poco Activo',['class'=>'form-check-label']) }}

                        </div>

                        <div class="form-check">
                          {{ Form::radio('nivelActividad', 'Sedentario',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Sedentario', 'Sedentario',['class'=>'form-check-label']) }}

                        </div>
                      </div>

                      <div class="form-group">
                        {{ Form::label('', 'Practica alguna actividad o deporte') }}

                        <div class="form-check">
                          {{ Form::radio('practicaDeporte', 'Si',true,['class'=>'form-check-input']) }}
                          {{ Form::label('Si', 'Si',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::radio('practicaDeporte', 'No',null,['class'=>'form-check-input']) }}
                          {{ Form::label('No', 'No',['class'=>'form-check-label']) }}

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
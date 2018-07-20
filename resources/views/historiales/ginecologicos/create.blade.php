@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Ginecologicos</h1>
            <div class="card">
                <div class="card-header">
                  Paciente: {{ $paciente->nombre }}
                  <a href="{{ route('ginecologicos.index', $paciente->id) }}" class="btn btn-danger float-right">Atras</a>
                </div>

                <div class="card-body">
                  <div class="col-md-12">
                    {!! Form::open(['route' => ['ginecologicos.store'], 'id' => 'form']) !!}
                      <input type="hidden" name="paciente_id" value="{{$paciente->id}}">

                      <div class="form-group">
                        {{ Form::label('', 'Embarazo') }}

                        <div class="form-check">
                          {{ Form::radio('embarazo', 'No',true,['class'=>'form-check-input']) }}
                          {{ Form::label('No', 'No',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::radio('embarazo', 'Si',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Si', 'Si',['class'=>'form-check-label']) }}

                        </div>
                      </div>

                      <div class="form-group">
                        {{ Form::label('', 'Abortos') }}

                        <div class="form-check">
                          {{ Form::radio('abortos', 'No',true,['class'=>'form-check-input']) }}
                          {{ Form::label('No', 'No',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::radio('abortos', 'Si',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Si', 'Si',['class'=>'form-check-label']) }}

                        </div>
                      </div>

                      <div class="form-group">
                        {{ Form::label('', 'Periodo Mestrual') }}

                        <div class="form-check">
                          {{ Form::radio('periodoMestrual', 'No',true,['class'=>'form-check-input']) }}
                          {{ Form::label('No', 'No',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::radio('periodoMestrual', 'Si',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Si', 'Si',['class'=>'form-check-label']) }}

                        </div>
                      </div>

                      <div class="form-group">
                        {{ Form::label('', 'Tratamiento') }}

                        <div class="form-check">
                          {{ Form::radio('tratamiento', 'No',true,['class'=>'form-check-input']) }}
                          {{ Form::label('No', 'No',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::radio('tratamiento', 'Si',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Si', 'Si',['class'=>'form-check-label']) }}

                        </div>
                      </div>

                      <div class="form-group">
                        {{ Form::label('observacion', 'Observaciones') }}
                        {{ Form::textarea('observacion',null,['class'=>'form-control', 'rows'=>'3']) }}
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
@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>No Patologicas</h1>
            <div class="card">
                <div class="card-header">
                  Paciente: {{ $paciente->nombre }}
                </div>

                <div class="card-body">
                  <div class="col-md-12">
                    {!! Form::open(['route' => ['nopatologicos.store'], 'id' => 'form']) !!}
                      <input type="hidden" name="paciente_id" value="{{$paciente->id}}">

                      <div class="form-group">
                        {{ Form::label('', 'Alcohol') }}

                        <div class="form-check">
                          {{ Form::radio('alcohol', 'Nunca',true,['class'=>'form-check-input']) }}
                          {{ Form::label('Nunca', 'Nunca',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::radio('alcohol', 'Poco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Poco', 'Poco',['class'=>'form-check-label']) }}

                        </div>

                        <div class="form-check">
                          {{ Form::radio('alcohol', 'Mucho',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Mucho', 'Mucho',['class'=>'form-check-label']) }}

                        </div>
                      </div>

                      <div class="form-group">
                        {{ Form::label('', 'Tabaco') }}

                        <div class="form-check">
                          {{ Form::radio('tabaco', 'Nunca',true,['class'=>'form-check-input']) }}
                          {{ Form::label('Nunca', 'Nunca',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::radio('tabaco', 'Poco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Poco', 'Poco',['class'=>'form-check-label']) }}

                        </div>

                        <div class="form-check">
                          {{ Form::radio('tabaco', 'Mucho',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Mucho', 'Mucho',['class'=>'form-check-label']) }}

                        </div>
                      </div>

                      <div class="form-group">
                        {{ Form::label('', 'Medicación') }}

                        <div class="form-check">
                          {{ Form::radio('medicacion', 'Nunca',true,['class'=>'form-check-input']) }}
                          {{ Form::label('Nunca', 'Nunca',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::radio('medicacion', 'Poco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Poco', 'Poco',['class'=>'form-check-label']) }}

                        </div>

                        <div class="form-check">
                          {{ Form::radio('medicacion', 'Mucho',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Mucho', 'Mucho',['class'=>'form-check-label']) }}

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
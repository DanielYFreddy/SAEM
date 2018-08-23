@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">

        <div class="col-md-12">
            
            <div class="alert alert-info" role="alert">
              <h3>Paciente: {{ $paciente->nombre }} </h3>
                                
            </div>
            <h1>Datos Patológicos Personales</h1>

            {!! Form::open(['route' => ['patologias.store'], 'id' => 'form']) !!}
            <input type="hidden" name="paciente_id" value="{{$paciente->id}}">

              <div class="card-deck mt-4">

                <div class="card">
                  <div class="card-header">
                    <h5>Cardiovascular/Pulmonar</h3>
                  </div>
                  <div class="card-body">
                      @foreach ($cardiovascular_pulmonar as $patologia)
                        <div class="form-check">
                          {{ Form::checkbox('personales[]', $patologia->id,null,['class'=>'form-check-input','id'=>$patologia->nombre])  }}
                          {{ Form::label($patologia->nombre, $patologia->nombre,['class'=>'form-check-label']) }}
                        </div>
                      @endforeach
                  </div>
                </div>

                <div class="card">
                  <div class="card-header">
                    <h5>Renal/Hepáticas</h3>
                  </div>
                  <div class="card-body">
                      @foreach ($renal_hepatica as $patologia)
                        <div class="form-check">
                          {{ Form::checkbox('personales[]', $patologia->id,null,['class'=>'form-check-input','id'=>$patologia->nombre])  }}
                          {{ Form::label($patologia->nombre, $patologia->nombre,['class'=>'form-check-label']) }}
                        </div>
                      @endforeach                    
                  </div>
                </div>

                <div class="card">
                  <div class="card-header">
                    <h5>Inmunológicas</h3>
                  </div>
                  <div class="card-body">
                      @foreach ($inmunologicas as $patologia)
                        <div class="form-check">
                          {{ Form::checkbox('personales[]', $patologia->id,null,['class'=>'form-check-input','id'=>$patologia->nombre])  }}
                          {{ Form::label($patologia->nombre, $patologia->nombre,['class'=>'form-check-label']) }}
                        </div>
                      @endforeach  
                  </div>
                </div>
              </div>


              <div class="card-deck mt-4">

                <div class="card">
                  <div class="card-header">
                    <h5>Gastrointestinal</h3>
                  </div>
                  <div class="card-body">
                      @foreach ($gastrointestinal as $patologia)
                        <div class="form-check">
                          {{ Form::checkbox('personales[]', $patologia->id,null,['class'=>'form-check-input','id'=>$patologia->nombre])  }}
                          {{ Form::label($patologia->nombre, $patologia->nombre,['class'=>'form-check-label']) }}
                        </div>
                      @endforeach  
                  </div>
                </div>

                <div class="card">
                  <div class="card-header">
                    <h5>Ortopedia</h3>
                  </div>
                  <div class="card-body">
                      @foreach ($ortopedia as $patologia)
                        <div class="form-check">
                          {{ Form::checkbox('personales[]', $patologia->id,null,['class'=>'form-check-input','id'=>$patologia->nombre])  }}
                          {{ Form::label($patologia->nombre, $patologia->nombre,['class'=>'form-check-label']) }}
                        </div>
                      @endforeach 
                  </div>
                </div>

                <div class="card">
                  <div class="card-header">
                    <h5>Otros</h3>
                  </div>
                  <div class="card-body">
                      @foreach ($ortopedia as $patologia)
                        <div class="form-check">
                          {{ Form::checkbox('personales[]', $patologia->id,null,['class'=>'form-check-input','id'=>$patologia->nombre])  }}
                          {{ Form::label($patologia->nombre, $patologia->nombre,['class'=>'form-check-label']) }}
                        </div>
                      @endforeach 
                  </div>
                </div>
              </div>
              <br>
              <div class="card">
                <div class="card-header">
                  Observaciones Patológicas
                </div>

                <div class="card-body">
                  <div class="col-md-12">

                      <div class="form-group">
                        {{ Form::label('observaciones', 'Observaciones') }}
                        {{ Form::textarea('observaciones',null,['class'=>'form-control', 'rows'=>'5', 'id'=>'observaciones']) }}
                      </div>

                  </div>
                </div>
              </div>

              {{ Form::submit('Guardar', ['class'=>'btn btn-primary mt-4', 'onclick' => 'confirmar()']) }} 
              <a href="{{ route('patologias.index', $paciente->id) }}"class="btn btn-danger mt-4 ">Atras</a>

            {!! Form::close() !!}
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
     
      if($('[name="personales[]"]:checked').length == 0 && $('#observaciones').val() == ''){
          
            swal({
                  title: "Atención!",
                  text: "Por favor marca una opción o introduce información para continuar",
                  type: "info",
                }
                );
                e.preventDefault();

          }
          else
          {
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
          }


    });
  }

</script>
@endsection
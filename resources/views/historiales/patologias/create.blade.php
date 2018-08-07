@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">

        <div class="col-md-12">
            
            <div class="alert alert-info" role="alert">
              <h3>Paciente: {{ $paciente->nombre }} </h3>
                                
            </div>
            <h1>Datos Patologicos</h1>

            {!! Form::open(['route' => ['patologias.store'], 'id' => 'form']) !!}
            <input type="hidden" name="paciente_id" value="{{$paciente->id}}">

              <div class="card-deck mt-4">

                <div class="card">
                  <div class="card-header">
                    <h5>Cardiovascular/Pulmonar</h3>
                  </div>
                  <div class="card-body">
                    {{ Form::label('', 'Flebitis/Trombosis') }}

                        <div class="form-check">
                          {{ Form::checkbox('FlebitisTrombosis[]', 'Personales',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('FlebitisTrombosis[]', 'Hfamiliares',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('FlebitisTrombosis[]', 'Parentezco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'HTA',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('HTA[]', 'Personales',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('HTA[]', 'Hfamiliares',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('HTA[]', 'Parentezco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Enf. Vascular',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('EnfVascular[]', 'Personales',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('EnfVascular[]', 'Hfamiliares',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('EnfVascular[]', 'Parentezco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Asma/Bronquitis',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('AsmaBronquitis[]', 'Personales',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('AsmaBronquitis[]', 'Hfamiliares',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('AsmaBronquitis[]', 'Parentezco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                  </div>
                </div>

                <div class="card">
                  <div class="card-header">
                    <h5>Renal/Hepaticas</h3>
                  </div>
                  <div class="card-body">
                    
                    {{ Form::label('', 'DM') }}

                        <div class="form-check">
                          {{ Form::checkbox('DM[]', 'Personales',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('DM[]', 'Hfamiliares',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('DM[]', 'Parentezco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Hiper/Hipo',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('HiperHipo[]', 'Personales',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('HiperHipo[]', 'Hfamiliares',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('HiperHipo[]', 'Parentezco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Gota',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('Gota[]', 'Personales',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Gota[]', 'Hfamiliares',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Gota[]', 'Parentezco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                  </div>
                </div>

                <div class="card">
                  <div class="card-header">
                    <h5>Inmunologicas/Hematologicas</h3>
                  </div>
                  <div class="card-body">
                    {{ Form::label('', 'AR') }}

                        <div class="form-check">
                          {{ Form::checkbox('AR[]', 'Personales',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('AR[]', 'Hfamiliares',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('AR[]', 'Parentezco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Fibromialgia',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('Fibromialgia[]', 'Personales',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Fibromialgia[]', 'Hfamiliares',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Fibromialgia[]', 'Parentezco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Osteoartrosis',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('Osteoartrosis[]', 'Personales',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Osteoartrosis[]', 'Hfamiliares',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Osteoartrosis[]', 'Parentezco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Lupus',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('Lupus[]', 'Personales',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Lupus[]', 'Hfamiliares',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Lupus[]', 'Parentezco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>
                  </div>
                </div>
              </div>


              <div class="card-deck mt-4">

                <div class="card">
                  <div class="card-header">
                    <h5>Gastrointestinal</h3>
                  </div>
                  <div class="card-body">
                    {{ Form::label('', 'Ulceras') }}

                        <div class="form-check">
                          {{ Form::checkbox('Ulceras[]', 'Personales',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Ulceras[]', 'Hfamiliares',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Ulceras[]', 'Parentezco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Gastritis',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('Gastritis[]', 'Personales',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Gastritis[]', 'Hfamiliares',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Gastritis[]', 'Parentezco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Colitis',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('Colitis[]', 'Personales',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Colitis[]', 'Hfamiliares',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Colitis[]', 'Parentezco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Estreñimiento',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('Estrenimiento[]', 'Personales',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Estrenimiento[]', 'Hfamiliares',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Estrenimiento[]', 'Parentezco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                  </div>
                </div>

                <div class="card">
                  <div class="card-header">
                    <h5>Ortopedia</h3>
                  </div>
                  <div class="card-body">
                    
                    {{ Form::label('', 'Lx Cadera') }}

                        <div class="form-check">
                          {{ Form::checkbox('LxCadera[]', 'Personales',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('LxCadera[]', 'Hfamiliares',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('LxCadera[]', 'Parentezco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Lx Rodilla',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('LxRodilla[]', 'Personales',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('LxRodilla[]', 'Hfamiliares',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('LxRodilla[]', 'Parentezco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Lx Hombro',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('LxHombro[]', 'Personales',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('LxHombro[]', 'Hfamiliares',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('LxHombro[]', 'Parentezco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Espalda',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('Espalda[]', 'Personales',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Espalda[]', 'Hfamiliares',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Espalda[]', 'Parentezco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                  </div>
                </div>

                <div class="card">
                  <div class="card-header">
                    <h5>Otros</h3>
                  </div>
                  <div class="card-body">
                    {{ Form::label('', 'CA') }}

                        <div class="form-check">
                          {{ Form::checkbox('CA[]', 'Personales',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('CA[]', 'Hfamiliares',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('CA[]', 'Parentezco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Alergias',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('Alergias[]', 'Personales',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Alergias[]', 'Hfamiliares',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Alergias[]', 'Parentezco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Ndegenerativas',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('Ndegenerativas[]', 'Personales',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Ndegenerativas[]', 'Hfamiliares',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Ndegenerativas[]', 'Parentezco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Trans. Mentales',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('TransMentales[]', 'Personales',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('TransMentales[]', 'Hfamiliares',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('TransMentales[]', 'Parentezco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Trans. Sueño',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('TransSueno[]', 'Personales',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('TransSueno[]', 'Hfamiliares',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('TransSueno[]', 'Parentezco',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

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
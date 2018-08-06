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

              <div class="card-deck mt-4">

                <div class="card">
                  <div class="card-header">
                    <h5>Cardiovascular/Pulmonar</h3>
                  </div>
                  <div class="card-body">
                    {{ Form::label('', 'Flebitis/Trombosis') }}

                        <div class="form-check">
                          {{ Form::checkbox('FlebitisTrombosis[0]', '1',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('FlebitisTrombosis[1]', '1',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('FlebitisTrombosis[2]', '1',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'HTA',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('HTA[0]', '2',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('HTA[1]', '2',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('HTA[2]', '2',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Enf. Vascular',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('EnfVascular[0]', '3',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('EnfVascular[1]', '3',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Enf. Vascular[2]', '3',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Asma/Bronquitis',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('AsmaBronquitis[0]', '4',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('AsmaBronquitis[1]', '4',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('AsmaBronquitis[2]', '4',null,['class'=>'form-check-input']) }}
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
                          {{ Form::checkbox('DM[0]', '5',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('DM[1]', '5',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('DM[2]', '5',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Hiper/Hipo',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('HiperHipo[0]', '6',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('HiperHipo[1]', '6',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('HiperHipo[2]', '6',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Gota',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('Gota[0]', '7',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Gota[1]', '7',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Gota[2]', '7',null,['class'=>'form-check-input']) }}
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
                          {{ Form::checkbox('AR[0]', '8',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('AR[1]', '8',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('AR[2]', '8',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Fibromialgia',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('Fibromialgia[0]', '9',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Fibromialgia[1]', '9',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Fibromialgia[2]', '9',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Osteoartrosis',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('Osteoartrosis[0]', '10',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Osteoartrosis[1]', '10',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Osteoartrosis[2]', '10',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Lupus',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('Lupus[0]', '11',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Lupus[1]', '11',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Lupus[2]', '11',null,['class'=>'form-check-input']) }}
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
                          {{ Form::checkbox('Ulceras[0]', '12',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Ulceras[1]', '12',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Ulceras[2]', '12',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Gastritis',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('Gastritis[0]', '13',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Gastritis[1]', '13',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Gastritis[2]', '13',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Colitis',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('Colitis[0]', '14',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Colitis[1]', '14',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Colitis[2]', '14',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Estreñimiento',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('Estrenimiento[0]', '15',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Estrenimiento[1]', '15',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Estrenimiento[2]', '15',null,['class'=>'form-check-input']) }}
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
                          {{ Form::checkbox('LxCadera[0]', '16',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('LxCadera[1]', '16',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('LxCadera[2]', '16',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Lx Rodilla',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('LxRodilla[0]', '17',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('LxRodilla[1]', '17',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('LxRodilla[2]', '17',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Lx Hombro',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('LxHombro[0]', '18',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('LxHombro[1]', '18',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('LxHombro[2]', '18',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Espalda',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('Espalda[0]', '19',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Espalda[1]', '19',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Espalda[2]', '19',null,['class'=>'form-check-input']) }}
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
                          {{ Form::checkbox('CA[0]', '20',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('CA[1]', '20',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('CA[2]', '20',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Alergias',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('Alergias[0]', '21',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Alergias[1]', '21',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Alergias[2]', '21',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Ndegenerativas',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('Ndegenerativas[0]', '22',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Ndegenerativas[1]', '22',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('Ndegenerativas[2]', '22',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Trans. Mentales',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('TransMentales[0]', '23',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('TransMentales[1]', '23',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('TransMentales[2]', '23',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Parentezco', 'Parentezco',['class'=>'form-check-label']) }}

                        </div>

                    {{ Form::label('', 'Trans. Sueño',['class'=>'mt-3']) }}

                        <div class="form-check">
                          {{ Form::checkbox('TransSueno[0]', '24',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Personales', 'Personales',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('TransSueno[1]', '24',null,['class'=>'form-check-input']) }}
                          {{ Form::label('Hfamiliares', 'Hfamiliares',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::checkbox('TransSueno[2]', '24',null,['class'=>'form-check-input']) }}
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
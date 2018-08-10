@extends('layouts.app')

@section('content')

	<div class="container">
		
		<div class="row justify-content-center">

        	<div class="col-md-12">

        		<div class="alert alert-info" role="alert">
              	
              		<h3>Paciente: {{ $paciente->nombre }} </h3>
                                
            	</div>

            	{!! Form::open(['route' => ['manualMuscular.store'], 'id' => 'form']) !!}
            	<input type="hidden" name="paciente_id" value="{{$paciente->id}}">

            		<div class="card-deck mt-4">
            			<div class="card">
            				<div class="card-header">
			                    <h5>Valoracion Manual Muscular</h3>
			                </div>

			                <div class="card-body">
			                	<div class="form-group">
				                	{{ Form::label('musculoLabel', 'Musculo') }}
	        						{{ Form::textarea('musculo',null,['class'=>'form-control', 'rows'=>'3', 'required' => 'required']) }}
	        					</div>

        						<div class="form-group">
			                      {{ Form::label('', 'Lado') }}

			                      <div class="form-check">
			                        {{ Form::radio('lado', 'Izquierda',true,['id'=>'Izquierda','class'=>'form-check-input']) }}
			                        {{ Form::label('Izquierda', 'Izquierda',['class'=>'form-check-label']) }}

			                      </div>
			                      <div class="form-check">
			                        {{ Form::radio('lado', 'Derecha',null,['id'=>'Derecha','class'=>'form-check-input']) }}
			                        {{ Form::label('Derecha', 'Derecha',['class'=>'form-check-label']) }}

			                      </div>
			               </div>

                     <div class="form-group">
                            {{ Form::label('', 'Fuerza Muscular') }}

                            <div class="form-check">
                              {{ Form::radio('fuerzaMuscular', '1',true,['id'=>'1','class'=>'form-check-input']) }}
                              {{ Form::label('1', '1',['class'=>'form-check-label']) }}

                            </div>
                            <div class="form-check">
                              {{ Form::radio('fuerzaMuscular', '2',null,['id'=>'2','class'=>'form-check-input']) }}
                              {{ Form::label('2', '2',['class'=>'form-check-label']) }}

                            </div>
                            <div class="form-check">
                              {{ Form::radio('fuerzaMuscular', '3',null,['id'=>'3','class'=>'form-check-input']) }}
                              {{ Form::label('3', '3',['class'=>'form-check-label']) }}

                            </div>
                            <div class="form-check">
                              {{ Form::radio('fuerzaMuscular', '4',null,['id'=>'4','class'=>'form-check-input']) }}
                              {{ Form::label('4', '4',['class'=>'form-check-label']) }}

                            </div>
                            <div class="form-check">
                              {{ Form::radio('fuerzaMuscular', '5',null,['id'=>'5','class'=>'form-check-input']) }}
                              {{ Form::label('5', '5',['class'=>'form-check-label']) }}

                            </div>
                     </div>

	        					<div class="form-group">
			                        {{ Form::label('observacionesLabel', 'Observaciones') }}
			                        {{ Form::textarea('observaciones',null,['class'=>'form-control', 'rows'=>'3']) }}
			                    </div>
			                     
			                    {{ Form::submit('Guardar', ['class'=>'btn btn-primary', 'onclick' => 
			                        'confirmar()'
			                      ]) 
			                    }} 
                          <a href="{{ route('consultamedica.index', $paciente->id) }}" class="btn btn-danger  ">Atras</a>   

			                </div>
            			</div>
            		</div>

            	{!! Form::close() !!}


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
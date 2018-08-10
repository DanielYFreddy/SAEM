
@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Test Postural Lateral</h1>
            <div class="card">
                <div class="card-header">
                  Paciente: {{ $paciente->nombre }}
                  <a href="{{ route('consultamedica.index', $paciente->id) }}" class="btn btn-danger float-right">Atras</a>
                </div>

                <div class="card-body">
                  <div class="col-md-12">
                    {!! Form::open(['route' => ['lateral.store'], 'id' => 'form']) !!}
                      <input type="hidden" name="paciente_id" value="{{$paciente->id}}">

					   <table class="table table-striped">
						  <thead class="thead-dark">
						    <tr>
						      <th scope="col">Movimiento</th>
						      <th scope="col">Izquierda</th>
						      <th scope="col">Derecha</th>
						      <th scope="col">Ninguno</th>
						    </tr>
						  </thead>
						  <tbody>
						  	@foreach ($movimientos as $movimiento)
						  		<tr>
							      <td>{{$movimiento->nombre}}</td>
							      <td>
				                      <div class="form-group">
					                        <div class="form-check">
					                          {{ Form::checkbox('izquierda[]', $movimiento->id,false,['class'=>'form-check-input']) }}
					                        </div>
				                      </div>							      		
							      </td>
							      <td>
				                      <div class="form-group">
					                        <div class="form-check">
					                          {{ Form::checkbox('derecha[]', $movimiento->id,false,['class'=>'form-check-input']) }}
					                        </div>
				                      </div>							      	
							      </td>
							      <td>
				                      <div class="form-group">
					                        <div class="form-check">
					                          {{ Form::checkbox('ninguno[]', $movimiento->id,false,['class'=>'form-check-input']) }}
					                        </div>
				                      </div>							      	
							      </td>
							    </tr>
						  	@endforeach
						  </tbody>
					  </table>

                     
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
     
	  

	  if($('[name="izquierda[]"]:checked').length == 0 && $('[name="derecha[]"]:checked').length == 0){
		
			swal({
	          title: "No has seleccionado ninguna opción!",
	          text: "Por favor selecciona una opción para continuar",
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
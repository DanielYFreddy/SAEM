
@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Test postural bipedo posterior</h1>
            <div class="card">
                <div class="card-header">
                  Paciente: {{ $paciente->nombre }}
                  <a href="{{ route('consultamedica.index', $paciente->id) }}" class="btn btn-danger float-right">Atras</a>
                </div>

                <div class="card-body">
                  <div class="col-md-12">
                    {!! Form::open(['route' => ['bipedoposterior.store'], 'id' => 'form']) !!}
                      <input type="hidden" name="paciente_id" value="{{$paciente->id}}">

					   <table class="table">
						  <thead>
						    <tr>
						      <th scope="col">Movimiento</th>
						      <th scope="col">Izquierda</th>
						      <th scope="col">Derecha</th>
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
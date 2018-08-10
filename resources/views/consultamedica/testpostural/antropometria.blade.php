@extends('layouts.app')

@section('content')

	<div class="container">
		
		<div class="row justify-content-center">

        	<div class="col-md-12">

        		<div class="alert alert-info" role="alert">
              	
              		<h3>Paciente: {{ $paciente->nombre }} </h3>
                                
            	</div>

            	{!! Form::open(['route' => ['antropometria.store'], 'id' => 'form']) !!}
            	<input type="hidden" name="paciente_id" value="{{$paciente->id}}">

            		<div class="card-deck mt-4">
            			<div class="card">
            				  <div class="card-header">
			                    <h5>Miembros Superiores</h3>
			                </div>

			                <div class="card-body">
			                	
                          <table class="table table-striped">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col"></th>
                                <th scope="col"><center>Derecho</center></th>
                                <th scope="col"><center>Izquierdo</center></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>{{ Form::label('lb', 'LB') }}</td>
                                <td>{{ Form::text('lbDerecho',null,['id'=>'lbDerecho','class'=>'form-control']) }}</td>
                                <td>{{ Form::text('lbIzquierdo',null,['id'=>'lbIzquierdo','class'=>'form-control']) }}</td>
                              </tr>

                              <tr>
                                <td>{{ Form::label('lab', 'LAB') }}</td>
                                <td>{{ Form::text('labDerecho',null,['id'=>'labDerecho','class'=>'form-control']) }}</td>
                                <td>{{ Form::text('labIzquierdo',null,['id'=>'labIzquierdo','class'=>'form-control']) }}</td>
                              </tr>

                              <tr>
                                <td>{{ Form::label('cb', 'CB') }}</td>
                                <td>{{ Form::text('cbDerecho',null,['id'=>'cbDerecho','class'=>'form-control']) }}</td>
                                <td>{{ Form::text('cbIzquierdo',null,['id'=>'cbIzquierdo','class'=>'form-control']) }}</td>
                              </tr>

                              <tr>
                                <td>{{ Form::label('cab', 'CAB') }}</td>
                                <td>{{ Form::text('cabDerecho',null,['id'=>'cabDerecho','class'=>'form-control']) }}</td>
                                <td>{{ Form::text('cabIzquierdo',null,['id'=>'cabIzquierdo','class'=>'form-control']) }}</td>
                              </tr>
                            </tbody>
                          </table>

			                </div>
            			</div>

                  <div class="card">
                      <div class="card-header">
                          <h5>Miembros Inferiores</h3>
                      </div>

                      <div class="card-body">

                            <table class="table table-striped">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col"></th>
                                <th scope="col"><center>Derecho</center></th>
                                <th scope="col"><center>Izquierdo</center></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>{{ Form::label('lm', 'LM') }}</td>
                                <td>{{ Form::text('lmDerecho',null,['id'=>'lmDerecho','class'=>'form-control']) }}</td>
                                <td>{{ Form::text('lmIzquierdo',null,['id'=>'lmIzquierdo','class'=>'form-control']) }}</td>
                              </tr>

                              <tr>
                                <td>{{ Form::label('lp', 'LP') }}</td>
                                <td>{{ Form::text('lpDerecho',null,['id'=>'lpDerecho','class'=>'form-control']) }}</td>
                                <td>{{ Form::text('lpIzquierdo',null,['id'=>'lpIzquierdo','class'=>'form-control']) }}</td>
                              </tr>

                              <tr>
                                <td>{{ Form::label('cm15', 'CM 15') }}</td>
                                <td>{{ Form::text('cm15Derecho',null,['id'=>'cm15Derecho','class'=>'form-control']) }}</td>
                                <td>{{ Form::text('cm15Izquierdo',null,['id'=>'cm15Izquierdo','class'=>'form-control']) }}</td>
                              </tr>

                              <tr>
                                <td>{{ Form::label('cm20', 'CM 20') }}</td>
                                <td>{{ Form::text('cm20Derecho',null,['id'=>'cm20Derecho','class'=>'form-control']) }}</td>
                                <td>{{ Form::text('cm20Izquierdo',null,['id'=>'cm20Izquierdo','class'=>'form-control']) }}</td>
                              </tr>

                              <tr>
                                <td>{{ Form::label('cp15', 'CP 15') }}</td>
                                <td>{{ Form::text('cp15Derecho',null,['id'=>'cp15Derecho','class'=>'form-control']) }}</td>
                                <td>{{ Form::text('cp15Izquierdo',null,['id'=>'cp15Izquierdo','class'=>'form-control']) }}</td>
                              </tr>

                              <tr>
                                <td>{{ Form::label('cp20', 'CP 20') }}</td>
                                <td>{{ Form::text('cp20Derecho',null,['id'=>'cp20Derecho','class'=>'form-control']) }}</td>
                                <td>{{ Form::text('cp20Izquierdo',null,['id'=>'cp20Izquierdo','class'=>'form-control']) }}</td>
                              </tr>
                            </tbody>
                          </table>

                      </div>  
                  </div>
                </div>

                {{ Form::submit('Guardar', ['class'=>'btn btn-primary mt-2 ml-2', 'onclick' => 'confirmar()']) }}
                <a href="{{ route('consultamedica.index', $paciente->id) }}" class="btn btn-danger mt-2 ">Atras</a> 

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
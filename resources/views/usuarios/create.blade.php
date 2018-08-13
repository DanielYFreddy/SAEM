@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Crear usuario</h1>
            <div class="card">
                <div class="card-header">Nuevo usuario<a href="{{ route('usuarios.index') }}" class="btn btn-danger float-right">Atrás</a></div>

                <div class="card-body">
        					{!! Form::open(['route' => ['usuarios.store'], 'id' => 'form']) !!}
         						
         						<div class="form-group">

        						    {{ Form::label('name', 'Nombre') }}
        						    {{ Form::text('name',null,['id'=>'name','class'=>'form-control']) }}

                        @if ( !empty($errors->get('name')))
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        @endif

          					</div>

         						<div class="form-group">

        						    {{ Form::label('email', 'E-mail') }}
        						    {{ Form::email('email',null,['id'=>'email','class'=>'form-control']) }}
                        
                        @if (!empty($errors->get('email')))
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        @endif

          					</div>

         						<div class="form-group">

        						    {{ Form::label('password', 'Contraseña') }}
        						    {{ Form::password('password',['id'=>'password','class'=>'form-control']) }}

                        @if (!empty($errors->get('password')))
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        @endif

          					</div>  


                    <div class="form-group">
                     {{ Form::label('rol', 'Rol') }}
                     {{ Form::select('rol', ['Admin' => 'Administrador', 'Asistente' => 'Asistente'], null, ['placeholder' => 'Seleccione una opción...','class'=>'form-control']) }}

                        @if (!empty($errors->get('rol')))
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ $errors->first('rol') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        @endif
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
          text: "La informacion se guardara en la base de datos!",
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


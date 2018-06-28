@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Crear paciente</h1>
            <div class="card">
                <div class="card-header">Nuevo paciente<a href="{{ route('pacientes.index') }}" class="btn btn-danger float-right">Atrás</a></div>

                <div class="card-body">
        					{!! Form::open(['route' => ['pacientes.store']]) !!}
         						
         						<div class="form-group">

        						    {{ Form::label('nombre', 'Nombre Completo') }}
        						    {{ Form::text('nombre',null,['id'=>'nombre','class'=>'form-control']) }}

                        @if ( !empty($errors->get('nombre')))
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ $errors->first('nombre') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        @endif

          					</div>

                    <div class="form-group">

                        {{ Form::label('cedula', 'Cédula') }}
                        {{ Form::text('cedula',null,['id'=>'cedula','class'=>'form-control']) }}

                        @if ( !empty($errors->get('cedula')))
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ $errors->first('cedula') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        @endif

                    </div>                    

                    <div class="form-group">

                        {{ Form::label('ocupacion', 'Ocupación') }}
                        {{ Form::text('ocupacion',null,['id'=>'ocupacion','class'=>'form-control']) }}

                        @if ( !empty($errors->get('ocupacion')))
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ $errors->first('ocupacion') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        @endif

                    </div>

                    <div class="form-group">

                        {{ Form::label('nacionalidad', 'Nacionalidad') }}
                        {{ Form::text('nacionalidad',null,['id'=>'nacionalidad','class'=>'form-control']) }}

                        @if ( !empty($errors->get('nacionalidad')))
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ $errors->first('nacionalidad') }}</strong>
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

                    {{ Form::submit('Guardar', ['class'=>'btn btn-primary']) }}				  						

        					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


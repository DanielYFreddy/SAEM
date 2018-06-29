@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Editar paciente</h1>
            <div class="card">
                <div class="card-header">Editar paciente<a href="{{ route('pacientes.index') }}" class="btn btn-danger float-right">Atrás</a></div>

                <div class="card-body">
        					{!! Form::open(['route' => ['pacientes.update', $paciente->id], 'method' => 'put']) !!}
         						<input type="hidden" name="id" value="{{$paciente->id}}">
         						<div class="form-group">

        						    {{ Form::label('nombre', 'Nombre Completo') }}
        						    {{ Form::text('nombre',$paciente->nombre,['id'=>'nombre','class'=>'form-control']) }}

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
                        {{ Form::text('cedula',$paciente->cedula,['id'=>'cedula','class'=>'form-control']) }}

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
                        {{ Form::text('ocupacion',$paciente->ocupacion,['id'=>'ocupacion','class'=>'form-control']) }}

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
                        {{ Form::text('nacionalidad',$paciente->nacionalidad,['id'=>'nacionalidad','class'=>'form-control']) }}

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

                        {{ Form::label('fecha_nacimiento', 'Fecha Nacimiento') }}
                        {{ Form::date('fecha_nacimiento',$paciente->fecha_nacimiento,['id'=>'fecha_nacimiento','class'=>'form-control']) }}

                        @if ( !empty($errors->get('fecha_nacimiento')))
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ $errors->first('fecha_nacimiento') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        @endif

                    </div>

                    @if ($paciente->genero === 'Masculino')
                      <div class="form-group">
                        {{ Form::label('', 'Genero') }}

                        <div class="form-check">
                          {{ Form::radio('genero', 'Masculino',true,['id'=>'Masculino','class'=>'form-check-input']) }}
                          {{ Form::label('Masculino', 'Masculino',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::radio('genero', 'Femenino',null,['id'=>'Femenino','class'=>'form-check-input']) }}
                          {{ Form::label('Femenino', 'Femenino',['class'=>'form-check-label']) }}

                        </div>
                      </div>
                    @else
                      <div class="form-group">
                        {{ Form::label('', 'Genero') }}

                        <div class="form-check">
                          {{ Form::radio('genero', 'Masculino',null,['id'=>'Masculino','class'=>'form-check-input']) }}
                          {{ Form::label('Masculino', 'Masculino',['class'=>'form-check-label']) }}

                        </div>
                        <div class="form-check">
                          {{ Form::radio('genero', 'Femenino',true,['id'=>'Femenino','class'=>'form-check-input']) }}
                          {{ Form::label('Femenino', 'Femenino',['class'=>'form-check-label']) }}

                        </div>
                      </div>
                    @endif

     
                  <div class="form-group">

                        {{ Form::label('region', 'Región') }}
                        {{ Form::text('region',$paciente->region,['id'=>'region','class'=>'form-control']) }}

                        @if ( !empty($errors->get('region')))
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ $errors->first('region') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        @endif

                    </div>

                  <div class="form-group">

                        {{ Form::label('direccion', 'Dirección') }}
                        {{ Form::text('direccion',$paciente->direccion,['id'=>'direccion','class'=>'form-control']) }}

                        @if ( !empty($errors->get('direccion')))
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ $errors->first('direccion') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        @endif

                    </div>                                     

                  <div class="form-group">

                        {{ Form::label('movil', 'Movil') }}
                        {{ Form::text('movil',$paciente->movil,['id'=>'movil','class'=>'form-control']) }}

                        @if ( !empty($errors->get('movil')))
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ $errors->first('movil') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        @endif

                    </div>

                  <div class="form-group">

                        {{ Form::label('telefono', 'Telefono') }}
                        {{ Form::text('telefono',$paciente->telefono,['id'=>'telefono','class'=>'form-control']) }}

                        @if ( !empty($errors->get('telefono')))
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ $errors->first('telefono') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        @endif

                    </div>  

         						<div class="form-group">

        						    {{ Form::label('email', 'E-mail') }}
        						    {{ Form::email('email',$paciente->email,['id'=>'email','class'=>'form-control']) }}
                        
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
                     {{ Form::label('estado_civil', 'Estado Civil') }}
                     {{ Form::select('estado_civil', ['Soltero' => 'Soltero', 'Casado' => 'Casado', 'Separado' => 'Separado', 'Union Libre' => 'Union Libre', 'Viudo' => 'Viudo'], $paciente->estado_civil, ['placeholder' => 'Seleccione una opción...','class'=>'form-control']) }}
                    </div>

                    {{ Form::submit('Guardar', ['class'=>'btn btn-primary']) }}				  						

        					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


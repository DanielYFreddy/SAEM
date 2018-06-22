@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Crear usuario</h1>
            <div class="card">
                <div class="card-header">Nuevo usuario</div>

                <div class="card-body">
					{!! Form::open(['route' => ['usuarios.store']]) !!}
 						
 						<div class="form-group">

						    {{ Form::label('name', 'Nombre') }}
						    {{ Form::text('name',null,['id'=>'name','class'=>'form-control']) }}

  						</div>

 						<div class="form-group">

						    {{ Form::label('email', 'E-mail') }}
						    {{ Form::email('email',null,['id'=>'email','class'=>'form-control']) }}

  						</div>

 						<div class="form-group">

						    {{ Form::label('password', 'Contraseña') }}
						    {{ Form::password('password',['id'=>'password','class'=>'form-control']) }}

  						</div>  						  						

					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


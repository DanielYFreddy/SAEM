@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Historiales Clinicos</h1>
            <div class="card">
                <div class="card-header">
                  Agregar Diagnostico
                </div>

                <div class="card-body">
                  <div class="col-md-12">
                    {!! Form::open(['route' => ['historiales.pacientes']]) !!}
                      <div class="form-group">
                        {{ Form::label('diagnostico', 'Diagnóstico Médico') }}
                        {{ Form::text('diagnostico',null,['id'=>'diagnostico','class'=>'form-control']) }}
                      </div>
                      <div class="form-group">
                        {{ Form::label('tratamiento', 'Tratamiento Farmacologico') }}
                        {{ Form::textarea('tratamiento',null,['class'=>'form-control', 'rows'=>'3']) }}
                      </div>
                      <div class="form-group">
                        {{ Form::label('evolucion', 'Evolución') }}
                        {{ Form::textarea('evolucion',null,['class'=>'form-control', 'rows'=>'3']) }}
                      </div>
                      <div class="form-group">
                        {{ Form::label('referencia', 'Referencia Médica') }}
                        {{ Form::text('referencia',null,['id'=>'referencia','class'=>'form-control']) }}
                      </div>
                      <div class="form-group">
                        {{ Form::label('cirugia', 'Antecedentes QX') }}
                        {{ Form::textarea('cirugia',null,['class'=>'form-control', 'rows'=>'3']) }}
                      </div>
                      <div class="form-group">
                        {{ Form::label('traumatico', 'Traumáticos') }}
                        {{ Form::textarea('traumatico',null,['class'=>'form-control', 'rows'=>'3']) }}
                      </div>                      

                      {{ Form::submit('Guardar', ['class'=>'btn btn-primary']) }}                     

                    {!! Form::close() !!}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
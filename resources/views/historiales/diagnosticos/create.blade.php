@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Agregar Diagnostico</h1>
            <div class="card">
                <div class="card-header">
                  Paciente: {{ $paciente->nombre }}
                </div>

                <div class="card-body">
                  <div class="col-md-12">
                    {!! Form::open(['route' => ['diagnosticos.store']]) !!}
                      <input type="hidden" name="paciente_id" value="{{$paciente->id}}">
                      <div class="form-group">
                        {{ Form::label('diagnostico', 'Diagnóstico Médico') }}
                        {{ Form::text('diagnostico',null,['id'=>'diagnostico','class'=>'form-control']) }}
                      </div>
                      <div class="form-group">
                        {{ Form::label('tratamientoFarmacologico', 'Tratamiento Farmacologico') }}
                        {{ Form::textarea('tratamientoFarmacologico',null,['class'=>'form-control', 'rows'=>'3']) }}
                      </div>
                      <div class="form-group">
                        {{ Form::label('evolucion', 'Evolución') }}
                        {{ Form::textarea('evolucion',null,['class'=>'form-control', 'rows'=>'3']) }}
                      </div>
                      <div class="form-group">
                        {{ Form::label('referenciaMedica', 'Referencia Médica') }}
                        {{ Form::text('referenciaMedica',null,['id'=>'referenciaMedica','class'=>'form-control']) }}
                      </div>
                      <div class="form-group">
                        {{ Form::label('antecedentes', 'Antecedentes') }}
                        {{ Form::textarea('antecedentes',null,['class'=>'form-control', 'rows'=>'3']) }}
                      </div>
                      <div class="form-group">
                        {{ Form::label('cirugias', 'Antecedentes QX') }}
                        {{ Form::textarea('cirugias',null,['class'=>'form-control', 'rows'=>'3']) }}
                      </div>
                      <div class="form-group">
                        {{ Form::label('traumaticos', 'Traumáticos') }}
                        {{ Form::textarea('traumaticos',null,['class'=>'form-control', 'rows'=>'3']) }}
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
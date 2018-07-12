@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Editar Diagnostico</h1>
            <div class="card">
                <div class="card-header">
                  {{ $paciente->nombre }}
                </div>

                <div class="card-body">
                  <div class="col-md-12">
                    {!! Form::open(['route' => ['diagnosticos.store']]) !!}
                      <input type="hidden" name="paciente_id" value="{{$paciente->id}}">
                      <div class="form-group">
                        {{ Form::label('diagnostico', 'Diagnóstico Médico') }}
                        {{ Form::text('diagnostico',$diagnostico->diagnostico,['id'=>'diagnostico','class'=>'form-control']) }}
                      </div>
                      <div class="form-group">
                        {{ Form::label('tratamientoFarmacologico', 'Tratamiento Farmacologico') }}
                        {{ Form::textarea('tratamientoFarmacologico',$diagnostico->tratamientoFarmacologico,['class'=>'form-control', 'rows'=>'3']) }}
                      </div>
                      <div class="form-group">
                        {{ Form::label('evolucion', 'Evolución') }}
                        {{ Form::textarea('evolucion',$diagnostico->evolucion,['class'=>'form-control', 'rows'=>'3']) }}
                      </div>
                      <div class="form-group">
                        {{ Form::label('referenciaMedica', 'Referencia Médica') }}
                        {{ Form::text('referenciaMedica',$diagnostico->referenciaMedica,['id'=>'referenciaMedica','class'=>'form-control']) }}
                      </div>
                      <div class="form-group">
                        {{ Form::label('antecedentes', 'Antecedentes') }}
                        {{ Form::textarea('antecedentes',$diagnostico->antecedentes,['class'=>'form-control', 'rows'=>'3']) }}
                      </div>
                      <div class="form-group">
                        {{ Form::label('cirugias', 'Antecedentes QX') }}
                        {{ Form::textarea('cirugias',$diagnostico->cirugias,['class'=>'form-control', 'rows'=>'3']) }}
                      </div>
                      <div class="form-group">
                        {{ Form::label('traumaticos', 'Traumáticos') }}
                        {{ Form::textarea('traumaticos',$diagnostico->traumaticos,['class'=>'form-control', 'rows'=>'3']) }}
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
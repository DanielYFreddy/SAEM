@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="col-md-12">
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-4">Bienvenido {{ Auth::user()->name }}</h1>
                <p class="lead">Desde aquí podrá visualizar la información más importante de sus pacientes y consultas para este día.</p>
                 <a class="btn btn-primary" href="{{ route('pacientes.create') }}" role="button">+Registrar Paciente</a>
              </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h3>Consulta para hoy</h3>
            <div class="card">
                <div class="card-header">Paciente agendados para hoy {{ date('d-m-Y') }}</div>

                <div class="card-body">


                    Citas aqui
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

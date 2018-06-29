@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Historiales Clinicos</h1>
            <div class="card">
                <div class="card-header">
                  <form method="GET" action="#">
                    
                      <input type="text" class="form-control" placeholder="Buscar paciente" name="name">
                    
                    <button type="submit" class="btn btn-secondary">Buscar</button>                  
                  </form>
                </div>

                <div class="card-body">
                  <div class="col-md-12">

                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
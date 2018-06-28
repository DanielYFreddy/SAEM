@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Lista de usuarios</h1>
            <div class="card">
                <div class="card-header">
                  <a href="{{ route('usuarios.create') }}" class="btn btn-primary float-left">+Nuevo Usuario</a>
                  <form method="GET" action="{{route('usuarios.index')}}" class="form-inline float-right">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Buscar usuario" name="name">
                    </div>
                    <button type="submit" class="btn btn-secondary">Buscar</button>
                  </form>
                </div>

                <div class="card-body">
                  <div class="col-md-12">
                    <table class="table table-responsive-sm">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">E-mail</th>
                          <th scope="col">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>                       
                        @foreach ($users as $user)
                          <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td><a href="{{ route('usuarios.edit', $user->id) }}" class="btn btn-warning">Modificar</a></td>
                         </tr>
                        @endforeach                       
                      </tbody>
                    </table>
                    {{ $users->links() }}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
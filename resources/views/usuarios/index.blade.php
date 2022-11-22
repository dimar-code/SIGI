@extends('layouts.main')
@section('content')
    <h1>Usuarios</h1>
<div class="card-header">
    <a href="{{route('usuarios.create')}}" class="btn btn-primary">Nuevo Usuario</a>
</div>
<br>
    <div class="card">
        <div class="card body">
            <table id="usuarios" class="table table striped shadow-lg mt-4">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Direccion</th>
                        <th>Genero</th>
                        <th>Telefono</th>
                        <th>email</th>
                        <th>Estado</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $users)
                        <tr>
                            <td>{{ $users -> id}}</td>
                            <td>{{ $users -> nombre}}</td>
                            <td>{{ $users -> apellido}}</td>
                            <td>{{ $users -> direccion}}</td>
                            <td>{{ $users -> genero}}</td>
                            <td>{{ $users -> telefono}}</td>
                            <td>{{ $users -> email}}</td>
                            <td>{{ $users -> estado}}</td>

                    <td width="150px">
                                <form action="{{route('usuarios.destroy',$users->id)}}" method="POST">
                                    <a href="{{route('usuarios.edit',$users->id)}}"" class="btn btn-primary btn-sm">Editar</a>
                                    @method('delete')
                                    @csrf
                                    <input type="submit" value="Eliminar" class="btn btn-danger btn-sm">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

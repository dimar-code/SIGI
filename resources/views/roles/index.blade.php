@extends('layouts.main')
@section('content')
    <h1>Roles</h1>
<div class="card-header">
    <a href="{{route('roles.create')}}" class="btn btn-primary">Nuevo Rol</a>
</div>
<br>
    <div class="card">
        <div class="card body">
            <table id="productos" class="table table striped shadow-lg mt-4">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $rol)
                        <tr>
                            <td>{{ $rol -> id}}</td>
                            <td>{{ $rol -> nombre}}</td>

                    <td width="150px">
                                <form action="{{route('roles.destroy',$rol->id)}}" method="POST">
                                    <a href="{{route('roles.edit',$rol->id)}}"" class="btn btn-primary btn-sm">Editar</a>
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


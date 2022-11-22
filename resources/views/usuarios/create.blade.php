@extends('layouts.main')
@section('content')
    <h1>Nuevo Usuario</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{route('usuarios.store')}}" method="POST">
            @csrf
            <div class="form group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Escriba su nombre" required><br>
                <label for="nombre">Apellidos</label>
                <input type="text" name="nombre" class="form-control" placeholder="Escriba su nombre" required><br>
                <label for="nombre">Direccion</label>
                <input type="text" name="nombre" class="form-control" placeholder="Escriba su nombre" required><br>
                <label for="nombre">Genero</label>
                <input type="text" name="nombre" class="form-control" placeholder="Escriba su nombre" required><br>
                <label for="nombre">Telefono</label>
                <input type="text" name="nombre" class="form-control" placeholder="Escriba su nombre" required><br>
                <label for="nombre">Email</label>
                <input type="text" name="nombre" class="form-control" placeholder="Escriba su nombre" required><br>
                <label for="nombre">Estado</label>
                <input type="text" name="nombre" class="form-control" required><br>
            </div>
            <button type="submit" class="btn btn-primary">GUARDAR</button>
            </form>

        </div>
    </div>
@stop

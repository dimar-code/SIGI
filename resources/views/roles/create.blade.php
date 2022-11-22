@extends('layouts.main')
@section('content')
    <h1>Nuevo Rol</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{route('roles.store')}}" method="POST">
            @csrf
            <div class="form group">
                <label for="nombre">Nombre Rol</label><br>
                <br><input type="text" name="nombre" class="form-control" placeholder="Inserte el Nuevo Rol" required><br>
            </div>
            <button type="submit" class="btn btn-primary">GUARDAR</button>
            </form>

        </div>
    </div>
@stop




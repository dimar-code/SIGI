@extends('layouts.main')
@section('content')
    <h1>Nuevo Traslado</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{route('traslados.store')}}" method="POST">
            @csrf
            <div class="form group">
                <label for="fecha">Fecha_traslado</label><br>
                <input type="text" name="fecha" class="form-control" required>
                <label for="precio">precio_traslado</label><br>
                <input type="text" name="precio" class="form-control" required>
                <label for="direccion">direccion_traslado</label><br>
                <input type="text" name="direccion" class="form-control" required>
                <label for="discripcion">descripcion</label><br>
                <input type="text" name="descripcion" class="form-control" required><br>

            </div>
            <button type="submit" class="btn btn-primary">GUARDAR</button>
            </form>

        </div>
    </div>
@stop

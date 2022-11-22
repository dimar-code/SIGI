@extends('layouts.main')
@section('content')
    <h1>Nuevo Venta</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{route('ventas.store')}}" method="POST">
            @csrf
            <div class="form group">
                <label for="nombre">fecha_venta</label>
                <input type="text" name="fecha" class="form-control" required>
                <label for="nombre">cantidad_producto</label>
                <input type="text" name="cantidad" class="form-control" required>
                <label for="nombre">total_venta</label>
                <input type="text" name="total" class="form-control" required>
                <label for="nombre">descripcion </label>
                <input type="text" name="descripcion" class="form-control" required><br>
            </div>
            <button type="submit" class="btn btn-primary">GUARDAR</button>
            </form>

        </div>
    </div>
@stop

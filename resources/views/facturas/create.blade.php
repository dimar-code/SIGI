@extends('layouts.main')
@section('content')
    <h1>Nueva Factura</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{route('facturas.store')}}" method="POST">
            @csrf
            <div class="form group">
                <label for="fecha">fecha_factura</label>
                <input type="text" name="fevha" class="form-control" required>
                <label for="precioU">precio_Unitario</label>
                <input type="text" name="precioU" class="form-control" required>
                <label for="cantidadP">Cantidad_Producto</label>
                <input type="text" name="cantidadP" class="form-control" required>
                <label for="Total">Total</label>
                <input type="text" name="Total" class="form-control" required>
                <label for="descripcion">Descirpcion</label>
                <input type="text" name="Descripcion" class="form-control" required><br>
            </div>
            <button type="submit" class="btn btn-primary">GUARDAR</button>
            </form>

        </div>
    </div>
@stop

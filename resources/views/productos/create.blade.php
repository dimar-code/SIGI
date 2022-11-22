@extends('layouts.main')
@section('content')
    <h1>Nuevo Producto</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{route('productos.store')}}" method="POST">
            @csrf
            <div class="form group">
                <label for="nombre">Nombre_Producto</label><br>
                <input type="text" name="nombre" class="form-control" placeholder="Escriba el nombre del producto" required><br>
                <label for="precio">precio_compra</label><br>
                <input type="text" name="nombre" class="form-control" placeholder="Escriba el precio de compra"><br>
                <label for="categoria">Descripcion</label><br>
                <input type="text" name="nombre" class="form-control" placeholder="Escriba una breve descripcion"><br>
                <label for="nombre">Estado</label><br>
                <input type="text" name="nombre" class="form-control" placeholder="Escriba el estado del producto" required><br>
                <label for="nombre">Stock</label><br>
                <input type="text" name="nombre" class="form-control" placeholder="Describa el estado del producto" required><br>
            </div>
            <button type="submit" class="btn btn-primary">GUARDAR</button>
            </form>

        </div>
    </div>
@stop

@extends('layouts.main')
@section('content')
    <h1>Nueva Compra</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{route('compras.store')}}" method="POST">
            @csrf
            <div class="form group">
                <label for="Catidad">Cantidad</label>
                <input type="text" name="nombre" class="form-control" placeholder="Escriba el nombre del producto" required><br>
                <label for="precio">Precio</label>
                <input type="text" name="nombre" class="form-control" placeholder="Escriba el nombre del producto" required><br>
                <label for="Descripcion">Descripcion</label>
                <input type="text" name="nombre" class="form-control" placeholder="Escriba el nombre del producto" required><br>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">GUARDAR</button>
            </form>

        </div>
    </div>
@stop



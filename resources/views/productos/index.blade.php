@extends('layouts.main')
@section('content')
    <h1>Productos</h1>
<div class="card-header">
    <a href="{{route('productos.create')}}" class="btn btn-primary">Nuevo Producto</a>
</div>
<br>
    <div class="card">
        <div class="card body">
            <table id="producto" class="table table striped shadow-lg mt-4">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>ID</th>
                        <th>Nombre_producto</th>
                        <th>Precio_compra</th>
                        <th>Descripcion</th>
                        <th>Estado</th>
                        <th>Stock</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td>{{ $producto -> id}}</td>
                            <td>{{ $producto -> nombre_productos}}</td>
                            <td>{{ $producto -> precio_compra}}</td>
                            <td>{{ $producto -> descripcion}}</td>
                            <td>{{ $producto -> estado}}</td>
                            <td width="70px" style="text-align: right">$ {{ $producto -> precio}}</td>
                            <td>{{ $producto -> stock}}</td>

                            <td width="150px">
                                <form action="{{route('productos.destroy',$producto)}}" method="POST">
                                    <a href="{{route('productos.edit',$producto)}}"" class="btn btn-primary btn-sm">Editar</a>
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
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#productos').DataTable({
                "language" : {
                    "search" : "Buscar",
                    "lengthMenu" : "Mostrar _MENU_ registros por pagina",
                    "info" : "Mostrando pagina _PAGE_ de _PAGES_",
                    "paginate" : {
                        "previous" : "Anterior",
                        "next" : "Siguiente",
                        "first" : "primero",
                        "last" : "Ultimo"
                    }
                }
            });
        });
    </script>

@endsection


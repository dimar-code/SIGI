@extends('layouts.main')
@section('content')
    <h1>Facturas</h1>
<div class="card-header">
    <a href="{{route('facturas.create')}}" class="btn btn-primary">Nuevo factura</a>
</div>
<br>
    <div class="card">
        <div class="card body">
            <table id="factura" class="table table striped shadow-lg mt-4">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>ID</th>
                        <th>Nombre_factura</th>
                        <th>Precio_compra</th>
                        <th>Descripcion</th>
                        <th>Estado</th>
                        <th>Stock</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($factura as $factura)
                        <tr>
                            <td>{{ $factura -> id}}</td>
                            <td>{{ $factura -> nombre_productyos}}</td>
                            <td>{{ $factura -> precio_compra}}</td>
                            <td>{{ $factura -> descripcion}}</td>
                            <td>{{ $factura -> estado}}</td><br>
                           <br> <td width="70px" style="text-align: right">$ {{ $factura -> precio}}</td>

                            <td width="150px">
                                <form action="{{route('facturas.destroy',$factura)}}" method="POST">
                                    <a href="{{route('facturas.edit',$factura)}}"" class="btn btn-primary btn-sm">Editar</a>
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
            $('#facturas').DataTable({
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


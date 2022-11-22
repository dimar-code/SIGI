@extends('layouts.main')
@section('content')
    <h1>VENTAS</h1>
<div class="card-header">
    <a href="{{route('ventas.create')}}" class="btn btn-primary">Nueva Venta</a>
</div>
<br>
    <div class="card">
        <div class="card body">
            <table id="ventas" class="table table striped shadow-lg mt-4">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>ID</th>
                        <th>fecha_venta</th>
                        <th>cantidad_producto</th>
                        <th>total_venta</th>
                        <th>descripcion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ventas as $venta)
                        <tr>
                            <td>{{ $ventas -> id}}</td>
                            <td>{{ $ventas -> fecha_venta}}</td>
                            <td>{{ $ventas -> cantidad_producto}}</td>
                            <td>{{ $ventas -> total_venta}}</td>
                            <td>{{ $ventas -> descripcion}}</td>
                            <td width="70px" style="text-align: right">$ {{ $ventas -> precio}}</td>


                            <td width="150px">
                                <form action="{{route('venta.destroy',$ventas)}}" method="POST">
                                    <a href="{{route('venta.edit',$ventas)}}"" class="btn btn-primary btn-sm">Editar</a>
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


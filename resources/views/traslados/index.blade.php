@extends('layouts.main')
@section('content')
    <h1>Traslados</h1>
<div class="card-header">
    <a href="{{route('traslados.create')}}" class="btn btn-primary">Nuevo Traslado</a>
</div>
<br>
    <div class="card">
        <div class="card body">
            <table id="traslado
             class="table table striped shadow-lg mt-4">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>ID</th>
                        <th>Fecha_traslado</th>
                        <th>Precio_traslado</th>
                        <th>Direccion_traslado</th>
                        <th>Descripcion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($traslado as $traslado)

                        <tr>
                            <td>{{ $traslado-> id}}</td>
                            <td>{{ $traslado-> Fecha_traslado}}</td>
                            <td>{{ $traslado-> precio_traslado}}</td>
                            <td>{{ $traslado-> direccion_traslado}}</td>
                            <td>{{ $traslado-> descripcion}}</td>
                            <td width="70px" style="text-align: right">$ {{ $ventas -> precio}}</td>
                            <td width="150px">
                            <form action="{{route('traslado.destroy', $traslado)}}" method="POST">
                            <a href="{{route('traslado.edit',$traslado)}}" "class="btn btn-primary btn-sm">Editar</a>
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
            $('#traslado
            ').DataTable({
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


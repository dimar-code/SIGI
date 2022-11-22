@extends('layouts.main')
@section('content')
    <h1>Nuevo Producto</h1>
    <h1>Editar Producto {{$producto -> nombre}}</h1>
@stop

@section('content')

    @if (session('mensaje'))
        <div class="alert alert-success">
            <strong>{{session('mensaje')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($producto,['route' => ['admin.productos.update',$producto],'method'=>'put']) !!}

            <div class="form group">
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre', null, ['class'=>'form-control','placeholder'=>'Nombre del Producto']) !!}
                @error('nombre')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form group">
                {!! Form::label('precio', 'Precio') !!}
                {!! Form::number('precio', null, ['class'=>'form-control','placeholder'=>'Precio del Producto']) !!}
                @error('precio')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form group">
                {!! Form::label('categoria', 'Cantidad') !!}
                {!! Form::text('categoria', null, ['class'=>'form-control','placeholder'=>'Nombre de la Categoria']) !!}
                @error('categoria')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form group">
                {!! Form::label('stock', 'Stock') !!}
                {!! Form::number('stock', null, ['class'=>'form-control','placeholder'=>'Stock de Producto']) !!}
                @error('stock')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <br>
                {!! Form::submit('Actualizar Producto',['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop


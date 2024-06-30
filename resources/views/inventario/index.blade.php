<!-- resources/views/inventario/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <style>
    .new_product {
    display: inline-block;
    padding: 10px 20px;
    margin-left: 30px;
    margin-top: -90px;
    background-color: #28a745;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
    border: none;
    cursor: pointer;
}

    .new-product:hover {
    background-color: #218838;
}

    .container {
    padding-top: 120px; 
}

.boton_editar {
    display: inline-block;
    padding: 8px 16px;
    margin: 4px 2px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.boton_editar:hover {
    background-color: #0056b3;
}

    .boton_borrar {
    display: inline-block;
    padding: 8px 16px;
    margin: 6px 2px;
    background-color: #dc3545;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.boton_borrar:hover {
    background-color: #c82333;
}

    </style>
    <a href="{{ url('inventario/create') }}" class="new_product">¡Nuevo producto!</a>
    <br><br>

    <table class="tabla">
        <thead>
            <tr>
                <th class="text">ID</th>
                <th class="text">Foto</th>
                <th class="text">Nombre</th>
                <th class="text">Descripción</th>
                <th class="text">Talla</th>
                <th class="text">Cantidades</th>
                <th class="text">Precio</th>
                <th class="text">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventarios as $inventario)
            <tr>
                <td>{{ $inventario->id }}</td>
                <td>
                    <img src="{{ asset('storage').'/'.$inventario->foto }}" width="100">
                </td>
                <td>{{ $inventario->nombre }}</td>
                <td>{{ $inventario->descripcion }}</td>
                <td>{{ $inventario->talla }}</td>
                <td>{{ $inventario->cantidades }}</td>
                <td>{{ $inventario->precio }}</td>
                <td>
                    <a href="{{ url('/inventario/'.$inventario->id.'/edit') }}" class="boton_editar">Editar</a>

                    <form action="{{ url('/inventario/'.$inventario->id) }}" class="d-inline" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" onclick="return confirm('¿Desea borrar este registro?')" value="Borrar" class="boton_borrar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

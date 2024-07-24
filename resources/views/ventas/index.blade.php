@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ventas</h1>
    <a href="{{ route('ventas.create') }}" class="btn btn-primary">Nueva Venta</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Método de Pago</th>
                <th>Fecha</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Subtotal</th>
                <th>IVA</th>
                <th>Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ventas as $venta)
            <tr>
                <td>{{ $venta->id }}</td>
                <td>{{ $venta->cliente->name }}</td>
                <td>{{ $venta->metodo_de_pago }}</td>
                <td>{{ $venta->fecha }}</td>
                <td>{{ $venta->producto }}</td>
                <td>{{ $venta->cantidad }}</td>
                <td>{{ $venta->precio }}</td>
                <td>{{ $venta->subtotal }}</td>
                <td>{{ $venta->iva }}</td>
                <td>{{ $venta->total }}</td>
                <td>
                    <a href="{{ route('ventas.edit', $venta->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('ventas.destroy', $venta->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
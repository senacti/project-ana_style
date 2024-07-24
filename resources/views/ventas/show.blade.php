@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Venta #{{ $venta->id }}</h1>
    <div>
        <strong>Cliente:</strong> {{ $venta->cliente->name }}
    </div>
    <div>
        <strong>Método de Pago:</strong> {{ $venta->metodo_de_pago }}
    </div>
    <div>
        <strong>Fecha:</strong> {{ $venta->fecha }}
    </div>
    <div>
        <strong>Producto:</strong> {{ $venta->producto }}
    </div>
    <div>
        <strong>Cantidad:</strong> {{ $venta->cantidad }}
    </div>
    <div>
        <strong>Precio:</strong> {{ $venta->precio }}
    </div>
    <div>
        <strong>Subtotal:</strong> {{ $venta->subtotal }}
    </div>
    <
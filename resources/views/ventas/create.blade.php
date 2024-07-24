@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Venta</h1>
    <form id="ventaForm" action="{{ route('ventas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="cliente_id">Cliente</label>
            <select name="cliente_id" id="cliente_id" class="form-control">
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="metodo_de_pago">Método de Pago</label>
            <select name="metodo_de_pago" id="metodo_de_pago" class="form-control">
                <option value="efectivo">Efectivo</option>
                <option value="tarjeta">Tarjeta</option>
                <option value="otros">Otros</option>
            </select>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" id="fecha" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="producto">Producto</label>
            <input type="text" name="producto" id="producto" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" min="1" step="1" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" name="precio" id="precio" class="form-control" min="0" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="subtotal">Subtotal</label>
            <input type="text" name="subtotal" id="subtotal" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="iva">IVA (%)</label>
            <input type="number" name="iva" id="iva" class="form-control" min="0" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="total">Total</label>
            <input type="text" name="total" id="total" class="form-control" readonly>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const cantidadInput = document.getElementById('cantidad');
    const precioInput = document.getElementById('precio');
    const subtotalInput = document.getElementById('subtotal');
    const ivaInput = document.getElementById('iva');
    const totalInput = document.getElementById('total');

    function calculateSubtotal() {
        const cantidad = parseFloat(cantidadInput.value) || 0;
        const precio = parseFloat(precioInput.value) || 0;
        subtotalInput.value = (cantidad * precio).toFixed(2);
        calculateTotal();
    }

    function calculateTotal() {
        const subtotal = parseFloat(subtotalInput.value) || 0;
        const ivaPercentage = parseFloat(ivaInput.value) || 0;
        const iva = (subtotal * (ivaPercentage / 100)).toFixed(2);
        totalInput.value = (subtotal + parseFloat(iva)).toFixed(2);
    }

    cantidadInput.addEventListener('input', calculateSubtotal);
    precioInput.addEventListener('input', calculateSubtotal);
    ivaInput.addEventListener('input', calculateTotal);
});
</script>
@endsection
@extends('layouts.app')
@section('content')

<style>
        a {
        display: inline-block;
        margin-bottom: 20px;
        text-decoration: none;
        color: #4CAF50;
        font-weight: bold;
    }
</style>
<div class="container">

<br>
<div class="boton_r">
<a href="{{url('inventario')}}" class="Volver">Volver</a>
</div>
<br>

<form action="{{url('/inventario/'.$inventario->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{method_field("PATCH")}}
@include('inventario.formulario')

</form>
</div>
@endsection
<style>
        body {
            background: url('image/casa.jpg') no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            border: 3px solid #ccc;
            backdrop-filter: blur(10px);
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"],
        input[type="submit"],
        input[type="integer"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
            font-size: 16px;
        }


        img {
            display: block;
            margin: 0 auto 15px;
            max-width: 100%;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 18px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .volver {
        display: inline-block;
        margin-bottom: 10px;
        text-decoration: none;
        color: #ffffff;
        font-weight: bold;
        margin-left: 100px;
        padding: 10px;
        border: 2px rgb(211, 14, 14); solid;
        border-radius: 3px;
        background-color: rgb(211, 14, 14);
        cursor: pointer;
        transition: background-color 0.3s ease;

        }

        .volver:hover {
        background-color: #881313;
        }
</style>

@extends('layouts.app')
@section('content')
<div class="container">
<br>
<br>
<a href="{{url('inventario')}}" class="volver">Volver</a>
<br>
<br>
<form action={{url("/inventario")}} method="post" enctype="multipart/form-data">
    @csrf
<label for="foto">foto</label>
<input type="file" name="foto" value="">
<br>
<label for="nombre">Nombre producto</label>
<input type="text" name="Nombre">
<br>
<label for="descripcion">descripcion</label>
<input type="text" name="descripcion">
<br>
<label for="talla">talla</label>
<input type="text" name="talla">
<br>
<label for="cantidades">cantidades</label>
<input type="number" name="cantidades" required>
<br>
<label for="precio">precio</label>
<input type="integer" name="precio">
<br>
<input type="submit" value="guardar datos">
</form>
</div>
@endsection
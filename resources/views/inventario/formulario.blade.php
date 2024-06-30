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
        input[type="submit"] {
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

        .Volver {
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

        .Volver:hover {
        background-color: #881313;
        }
</style>
<form>
<label for="foto">Foto</label>
{{ $inventario->foto }}
<input type="file" name="foto" value="">
<img src="{{ asset('storage').'/'.$inventario->foto }}" alt="Imagen del producto">

<label for="Nombre">Nombre producto</label>
<input type="text" name="Nombre" value="{{ $inventario->nombre }}" required>

<label for="descripcion">Descripción</label>
<input type="text" name="descripcion" value="{{ $inventario->descripcion }}" required>

<label for="talla">Talla</label>
<input type="text" name="talla" value="{{ $inventario->talla }}" required class="uppercase" oninput="this.value = this.value.toUpperCase()">

<label for="cantidades">Cantidades</label>
<input type="number" name="cantidades" value="{{ $inventario->cantidades }}" required>

<label for="precio">Precio</label>
<input type="number" name="precio" value="{{ $inventario->precio }}" required>

<input type="submit" value="Guardar datos">
</form>

<script>
    document.getElementById('talla').addEventListener('input', function() {
        this.value = this.value.toUpperCase();
    });
</script>
</body>
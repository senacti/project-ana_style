@extends('layouts.register-layout')
@section('content')
<body>
	<div class="fondo">
		<form method="POST" action="{{ route('register') }}">
			@csrf
			<h1>Registro</h1>
			<div class="formulario">
				<input type="text" name="name" placeholder="Nombre" required>
			</div>
			<div class="formulario">
				<input type="text" name="lastname" placeholder="Apellido" required>
			</div>
			<div class="formulario">
				<input type="email" name="email" placeholder="Correo Electrónico" required>
			</div>
			<div class="formulario">
				<input type="password" name="password" placeholder="Contraseña" required>
			</div>
			<div class="formulario">
				<input type="password" name="password_confirmation" placeholder="Repite Contraseña" required>
			</div>
			<button type="submit" class="boton">Registrarse</button>
			<div class="opcion-login">
                <p>¿Ya tienes una cuenta? <a href="{{ route('login') }}">Iniciar Sesión</a></p>
            </div>
		</form>
	</div>
</body>
@endsection


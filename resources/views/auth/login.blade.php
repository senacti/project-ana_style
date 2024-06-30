@extends('layouts.login-layout')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <h1>Inicio de Sesión</h1>
    <div class="input-box">
        <input id="email" type="email" name="email" placeholder="Usuario" value="{{ old('email') }}" required autofocus>
    </div>
    <div class="input-box">
        <input id="password" type="password" name="password" placeholder="Contraseña" required>
    </div>
    <div class="remember-forgot">
        <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme</label>
        <a href="">Olvidó su contraseña?</a>
    </div>
    <button type="submit" class="Btn">Ingresar</button>
    <div class="register-link">
        <p>No tiene cuenta? <a href="{{ route('register') }}">Regístrese</a></p>
    </div>
</form>
@endsection


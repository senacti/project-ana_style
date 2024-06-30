@extends('layouts.login')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h1>Inicio de Sesión</h1>
        <div class="input-box">
            <input type="email" name="email" placeholder="Usuario" required>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input-box">
            <input type="password" name="password" placeholder="Contraseña" required>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="remember-forgot">
            <label><input type="checkbox" name="remember"> Recordarme</label>
            <a href="{{ route('password.request') }}">¿Olvidó su contraseña?</a>
        </div>
        <button type="submit" class="Btn">Ingresar</button>
        <div class="register-link">
            <p>No tiene cuenta? <a href="{{ route('register') }}">Regístrese</a></p>
        </div>
    </form>
@endsection

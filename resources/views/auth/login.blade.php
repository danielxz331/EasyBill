@extends('layouts.platilla')

@section('title', 'Login')

@section('content')
    <div class="login-content">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <img src="{{ asset('img/usuario.png') }}">
            <h2 class="title">Bienvenido</h2>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Email</h5>
                    <label for="email" class="input"></label>
                    <input id="email" type="email" class="input @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    {{-- @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror --}}
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Contraseña</h5>
                    <label for="password" class="input"></label></label>
                    <input id="password" type="password" class="input @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">
                    {{-- @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror --}}
                </div>
            </div>
            <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña??</a>
            <a href="{{ route('register') }}">Registrarse</a>
            <input type="submit" class="btn" value="Login">
        </form>
    </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
@endsection

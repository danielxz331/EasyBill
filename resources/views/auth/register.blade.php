@extends('layouts.platilla')

@section('title', 'Login')

@section('content')
    <div class="login-content">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <img src="{{ asset('img/añadir.png') }}">
            <h2 class="title">Registrarse</h2>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Nombre</h5>
                    <label for="name" class="input"></label>
                    <input id="name" type="text" class="input @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    {{-- @error('name')
                        <span class="input" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror --}}
                </div>
            </div>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Email</h5>
                    <label for="email" class="input"></label>
                    <input id="email" type="email" class="input @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email">
                    {{-- @error('email')
                        <span class="input" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror --}}
                </div>
            </div>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Contraseña</h5>
                    <label for="password" class="input"></label>
                    <input id="password" type="password" class="input @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password">
                    {{-- @error('password')
                        <span class="input" role="alert">
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
                    <h5>Confirmar contraseña</h5>
                    <label for="password-confirm"
                        class="input"></label>
                    <input id="password-confirm" type="password" class="input" name="password_confirmation" required
                        autocomplete="new-password">
                </div>
            </div>
            <input type="submit" class="btn" value="Registrar">
        </form>
    </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
@endsection

@extends('layouts.auth')
{{-- RESETEAR CLAVE DE ACCESO --}}
@section('content')
    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">
                        <h1 class="">Restablecer Contraseña</h1>
                        @if (session('status'))
                            <div class="
                            alert alert-success" role="alert">
                            {{ session('status') }}
                    </div>
                    @endif
                    <form class="text-left" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form">
                            <div id="username-field" class="field-wrapper input">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-at-sign">
                                    <circle cx="12" cy="12" r="4"></circle>
                                    <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                </svg>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="d-sm-flex justify-content-between">
                                <div class="field-wrapper">
                                    <button type="submit" class="btn btn-primary" value="">Enviar Correo</button>
                                </div>
                            </div>
                        </div>
                        <div class="field-wrapper">
                            <a href="{{ route('login') }}" class="forgot-pass-link">Inicia Sesión</a>
                        </div>
                    </form>
                    <p class="terms-conditions">© 2021 Todos los derechos reservados. <a
                            href="{{ route('admin.index') }}">Cork Admin</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="form-image">
        <div class="l-image">
        </div>
    </div>
    </div>
@endsection

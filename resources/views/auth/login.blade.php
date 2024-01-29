@extends('layouts.app')

@section('content')
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-5">
                            <img src="{{ asset('img/icon/perfil_git.gif') }}" alt="" class="rounded-circle" width="100px" height="100px">
                            <br>
                            <br>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="typeEmailX">Correo</label>
                                    <input id="email" type="email"
                                        class="form-control 
                                        @error('email') is-invalid 
                                        @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="typePasswordX">Contraseña</label>
                                    <input id="password" type="password"
                                        class="form-control 
                                        @error('password') is-invalid 
                                        @enderror" name="password"
                                        required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-outline-light btn-lg px-5">
                                    {{ __('Login') }}
                                </button>
                                <div class="form-outline form-white mb-4">
                                    <br>
                                    <a href="{{ route('register') }}" class="px-5">Registrarse</a>
                                </div>

                                <!--
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link text-white" href="{{ route('password.request') }}">
                                        ¿Olvidaste tu contraseña?
                                    </a>
                                @endif
                                -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

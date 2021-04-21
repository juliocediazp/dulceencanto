@extends('layouts.client')

@section('content')
    <!-- BEGIN: Content-->

    <div class="auth-wrapper auth-v2">
        <div class="auth-inner row m-0">
            <!-- /Brand logo-->
            <!-- Left Text-->
            <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                <div class="w-100 d-lg-flex align-items-center justify-content-center px-5">
                    <img class="img-fluid" src="./app-assets/images/pages/imagenLogin.jpg" alt="Login V2">
                </div>
            </div>
            <!-- /Left Text-->
            <!-- Login-->
            <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                    <h2 class="card-title font-weight-bold mb-1">Bienvenido a Dulce Impacto! 👋</h2>
                    <p class="card-text mb-2">Inicie sesión en su cuenta y comience a disfrutar.</p>
                    <form class="auth-login-form mt-2" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="email">Email</label>
                            <input class="form-control" id="email" type="text" name="email" placeholder="john@example.com"
                                aria-describedby="email" autofocus="" tabindex="1" />
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between">
                                <label for="password">Contraseña</label>
                                <a href="{{ route('password.request') }}"><small>¿Has olvidado tu
                                        contraseña? </small></a>
                            </div>
                            <div class="input-group input-group-merge form-password-toggle">
                                <input class="form-control form-control-merge" id="password" type="password" name="password"
                                    placeholder="············" aria-describedby="password" tabindex="2" />
                                <div class="input-group-append"><span class="input-group-text cursor-pointer"><i
                                            data-feather="eye"></i></span></div>
                            </div>
                        </div>
                        <!-- <button class="btn btn-success btn-block" tabindex="4">Ingresar</button> -->
                        {{-- <a class="btn btn-success btn-block" href="./index-admin.html">Ingresar</a> --}}
                        <button type="submit" class="btn btn-primary btn-block">
                            Ingresar
                        </button>
                        {{-- <a class="btn btn-success btn-block" href="./index-cliente.html">Ingresar Cliente</a> --}}
                    </form>
                    <p class="text-center mt-2">
                        <span>¿Nuevo en nuestra plataforma?</span>
                        <a href="{{ route('register') }}">
                            <span>&nbsp;Crear una cuenta</span>
                        </a>
                        {{-- <a href="{{ route('register') }}" class="nav-link active btn btn-warning"
                                                style="margin-right: 10px">Registrarse</a> --}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

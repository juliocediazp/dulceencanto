@extends('layouts.auth')

@section('image')
    <img class="img-fluid" src="../app-assets/images/pages/forgot-password-v2.svg" alt="Forgot password V2" />
@endsection

@section('content')
    <!-- Forgot password-->
    <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
        <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
            <h2 class="card-title font-weight-bold mb-1">¿Has olvidado tu contraseña? 🔒</h2>
            <p class="card-text mb-2">Ingrese su Email electrónico y le enviaremos instrucciones para restablecer su
                contraseña.</p>
            <form class="auth-forgot-password-form mt-2" method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                    <label class="form-label" for="forgot-password-email">Email</label>
                    <input class="form-control" id="forgot-password-email" type="text" name="email"
                        placeholder="john@example.com" aria-describedby="forgot-password-email" autofocus="" tabindex="1" />
                </div>
                <button type="submit" class="btn btn-primary btn-block" tabindex="2">
                    Enviar
                </button>
            </form>
            <p class="text-center mt-2"><a href="{{route('login')}}"><i data-feather="chevron-left"></i>Atrás para
                    iniciar sesión</a></p>
        </div>
    </div>
    <!-- /Forgot password-->
@endsection


{{-- @extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

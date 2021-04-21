@extends('layouts.auth')

@section('image')
    <img class="img-fluid" src="./app-assets/images/pages/register-v2.svg" alt="Register V2" />
@endsection

@section('content')
    <!-- Register-->
    <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
        <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
            <h2 class="card-title font-weight-bold mb-1">La aventura comienza aquí 🎂</h2>
            <!-- <p class="card-text mb-2">Make your app management easy and fun!</p> 🚀-->
            <form class="auth-register-form mt-2" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label class="form-label" for="fullName">Nombre completo *</label>
                    <input class="form-control" id="fullName" type="text" name="fullName" placeholder="johndoe"
                        aria-describedby="fullName" autofocus="" tabindex="1" />
                </div>
                <div class="form-group">
                    <label class="form-label" for="document">Documento *</label>
                    <input class="form-control" id="document" type="text" name="document" placeholder="documento"
                        aria-describedby="document" autofocus="" tabindex="2" />
                </div>
                <div class="form-group">
                    <label class="form-label" for="birthDate">Fecha de nacimiento *</label>
                    <input class="form-control" id="birthDate" type="date" name="birthDate"
                        placeholder="fecha de nacimiento" aria-describedby="birthDate" autofocus="" tabindex="2" />
                </div>
                <div class="form-group">
                    <label class="form-label" for="cellPhone">Teléfono *</label>
                    <input class="form-control" id="cellPhone" type="text" name="cellPhone" placeholder="ej: 3999999999"
                        aria-describedby="cellPhone" tabindex="3" />
                </div>
                <div class="form-group">
                    <label class="form-label" for="direction">Dirección *</label>
                    <input class="form-control" id="direction" type="text" name="direction" placeholder="Kr 23 # 32 21"
                        aria-describedby="direction" tabindex="4" />
                </div>
                <div class="form-group">
                    <label class="form-label" for="email">Email *</label>
                    <input class="form-control" id="email" type="email" name="email" placeholder="john@example.com"
                        aria-describedby="email" tabindex="5" />
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Contraseña *</label>
                    <div class="input-group input-group-merge form-password-toggle">
                        <input class="form-control form-control-merge" id="password" type="password" name="password"
                            placeholder="············" aria-describedby="password" tabindex="6" />
                        <div class="input-group-append"><span class="input-group-text cursor-pointer"><i
                                    data-feather="eye"></i></span>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Confirmar contraseña *</label>
                    <div class="input-group input-group-merge form-password-toggle">
                        <input class="form-control form-control-merge" id="password-confirm" type="password"
                            name="password_confirmation" placeholder="············" aria-describedby="password-confirm"
                            tabindex="6" />
                        <div class="input-group-append"><span class="input-group-text cursor-pointer"><i
                                    data-feather="eye"></i></span></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="register-privacy-policy" type="checkbox" tabindex="4" />
                        <label class="custom-control-label" for="register-privacy-policy">Acepto la
                            <a href="javascript:void(0);">&nbsp;política y los términos de
                                privacidad</a></label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Registrar
                </button>
                {{-- <button class="btn btn-primary btn-block" tabindex="5">Registrar</button> --}}
            </form>
            <p class="text-center mt-2">
                <span>¿Ya tienes una cuenta?</span>
                <a href="{{ route('login') }}">
                    <span>&nbsp;Iniciar sesión en su lugar</span>
                </a>
            </p>
        </div>
    </div>
    <!-- /Register-->
@endsection

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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

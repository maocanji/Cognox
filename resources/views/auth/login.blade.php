@extends('layouts.app_')
@section('content')
    <div class="middle-box text-center loginscreen animated fadeInDown">


            <h3>Bienvenido a Banca</h3>

                <p>Banca - Banco de transacciones para <strong>{{ __('Usuarios') }}</strong>.</p>

            <div class="container">
                <div class="row center-block">
                    <div class="col-md-10">

                                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">


                                        @csrf

                                        <div class="form-group row">

                                            <div class="col-md-6 col-md-pull-1">
                                                <input id="email" type="email" placeholder="E-Mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">

                                            <div class="col-md-6 col-md-pull-1">
                                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6 col-md-pull-3">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 col-md-pull-2">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Login') }}
                                                </button>

                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Olvidaste tu contraseña ?') }}
                                                    </a>

                                                    <a class="btn btn-link" href="/">
                                                        {{ __('Pagina principal') }}
                                                    </a>


                                                    <a class="btn btn-link" href="{{ route('register') }}">
                                                        {{ __('Registro Nuevo') }}
                                                    </a>


                                                @endif
                                            </div>
                                        </div>
                                    </form>

                    </div>

                </div>

            </div>
            <div class="row center-block">
                <div class="col-md-12 text-center m-t-lg m-b-lg">
                    <strong>&copy;Maocanji@gmail.com  Email. </strong>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app_')
@section('content')
    <div class="middle-box text-center loginscreen animated fadeInDown">


        <h3>Bienvenido a Banca</h3>

        <p>Banca - Banco de transacciones para <strong>{{ __('Usuarios') }}</strong>.</p>

        <div class="container-center">
            <div class="row center-block">
                <div class="col-md-12">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label ">{{ __('Name') }}</label>


                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label ">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" data-mask="9999" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" data-mask="9999" required>
                            </div>
                        </div>

                        <hr>

                        <div class="form-group row">
                            <label for="numero_cuenta" class="col-md-4 col-form-label ">{{ __('Numero de cuenta') }}</label>

                            <div class="col-md-8">
                                <input id="numero_cuenta" type="text" class="form-control{{ $errors->has('numero_cuenta') ? ' is-invalid' : '' }}" name="numero_cuenta" value="{{ old('numero_cuenta') }}" data-mask="999-99999-99"  required>

                                @if ($errors->has('numero_cuenta'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('numero_cuenta') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="saldo_cuenta" class="col-md-4 col-form-label ">{{ __('Saldo') }}</label>

                            <div class="col-md-8">
                                <input id="saldo_cuenta" type="text" class="form-control{{ $errors->has('saldo_cuenta') ? ' is-invalid' : '' }}" name="saldo_cuenta" value="{{ old('saldo_cuenta') }}" required>

                                @if ($errors->has('saldo_cuenta'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('saldo_cuenta') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>


                        <a class="btn btn-link" href="/">
                            {{ __('Pagina principal') }}
                        </a>

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




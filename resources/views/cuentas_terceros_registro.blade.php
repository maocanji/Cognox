@extends('layouts_configuracion.app')
@section('content')
<div class="container">
    <div class="wrapper wrapper-content animated fadeInRight">

                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Registro de cuentas<small>Para personas no registradas</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Datos de la cuenta</h3>
                                <p>Por favor diligencias campos - todos son Obligatorios.</p>
                                <form role="form" method="POST" action="{{ route('registro_clientes') }}">

                                        @csrf

                                    <div class="form-group">
                                        <label>Nombre Clientes</label>
                                        <input id="nombre_cliente" type="text" class="form-control{{ $errors->has('nombre_cliente') ? ' is-invalid' : '' }}"
                                               name="nombre_cliente" value="{{ old('nombre_cliente') }}" required autofocus>

                                        @if ($errors->has('nombre_cliente'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre_cliente') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group"><label>Cedula</label>
                                        <input type="text" class="form-control{{ $errors->has('identificador_cliente') ? ' is-invalid' : '' }}"
                                               name="identificador_cliente" value="{{ old('identificador_cliente') }}"
                                               data-mask="9.999.999.999"  required autofocus>
                                        <span class="help-block">9.999.999.999</span>
                                        @if ($errors->has('identificador_cliente'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('identificador_cliente') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group"><label>Cuenta Bancaria</label>
                                        <input type="text" class="form-control{{ $errors->has('cuenta') ? ' is-invalid' : '' }}"
                                               name="cuenta" value="{{ old('cuenta') }}"
                                               data-mask="999-99999-99"  required autofocus>
                                        <span class="help-block">999-99999-99</span>
                                        @if ($errors->has('cuenta'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cuenta') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group"><button type="submit" class="btn btn-block btn-outline btn-primary">Registrar Cuenta de terceros</button></div>

                                </form>
                            </div>
                            <div class="col-sm-6">

                                <p class="text-center">
                                    @if($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>

                                    @foreach($errors->all() as $error)
                                    {{ $error }}<br/>
                                    @endforeach
                                </div>
                                @endif
                                    <a href=""><i class="fa fa-sign-in big-icon"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


    </div>
</div>
@endsection

@section('scripts')


<!--    <script>-->
<!--        $(document).ready(function() {-->
<!---->
<!--         toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');-->
<!---->
<!--        });-->
<!---->
<!---->
<!--    </script>-->

@show

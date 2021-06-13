@extends('layouts_configuracion.app')

@section('content')
<div class="container">
    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Tranferencias <small> a cuentas de terceros - Clientes</small></h5>
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
                    <div class="col-sm-6 b-r">
                        <h3 class="m-t-none m-b">Datos de la cuentas</h3>

                        <p>Por favor diligencias campos - todos son Obligatorios.</p>
                        <form role="form" method="POST" action="{{ route('registro_tranferencia') }}">

                            @csrf

                            <div class="form-group">
                                <strong>Destinos:</strong>
                                <select name="id_cuenta" id="id_cuenta"  class="form-control custom-select">
                                    @foreach ( $cuenta as $ct )
                                    <option value="{{ $ct->id_cuenta }}">Num - {{ $ct->numero_cuenta }} - Cta  </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <strong>Cuenta de Origen:</strong>
                                <select name="id_cliente" id="id_cliente"  class="form-control custom-select">
                                    @foreach ( $clientes as $cli )
                                    <option value="{{ $cli->id_cliente }}">{{ $cli->nombre_cliente }} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group"><label>Valor a tranferir</label>
                                <input type="text" class="form-control{{ $errors->has('valor_tranferir') ? ' is-invalid' : '' }}"
                                       name="valor_tranferir" value="{{ old('valor_tranferir') }}"
                                        required autofocus>
                                <span class="help-block">$ 999,999.99</span>
                                @if ($errors->has('valor_tranferir'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('valor_tranferir') }}</strong>
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
                        @empty($clientes->id_cliente)

                            <a class="btn btn-block btn-outline btn-warning" href="{{ route('cuentas_asociadas') }}">
                                {{ __('Registro de cuentas de terceros') }}
                            </a>
                        @endempty
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

<script>
    $(document).ready(function()
    {
        $('#200').addClass('active');
        $('#0').addClass('active');

    });

</script>


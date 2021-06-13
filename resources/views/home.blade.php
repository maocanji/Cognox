@extends('layouts_configuracion.app')

@section('content')
<div class="container">
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Basic form <small>Simple login form example</small></h5>
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
                            @foreach($cuenta as $link)

                                <div class="col-md-6">
                                    <div class="payment-card">
                                        <i class="fa fa-cc-visa payment-icon-big text-success"></i>
                                        <h2>
                                            Nùmero de Cuenta: {{$link->numero_cuenta}}
                                        </h2>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <small>
                                                    <strong>Registro creado:</strong>  {{$link->created_at}} <br>
                                                    <strong>Registro modificado:</strong>  {{$link->created_at}}
                                                </small>
                                            </div>
                                            <div class="col-sm-6 text-left">
                                                <small>
                                                    <strong>Nombre:</strong> {{$usuario->name}} <br>
                                                    <strong>Email:</strong> {{$usuario->email}}
                                                </small>
                                            </div>
                                            <h1 class="m-xs">$ {{$link->saldo_cuenta}}</h1>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>lista de transacciones</h5>
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

                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Valor de Transacciones</th>
                                                <th>Fecha de transaccion</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($cuenta as $link)
                                            @foreach($link->rel_cuenta_des as $li)
                                                <tr>
                                                    <td>{{$li['retiro']}}</td>
                                                    <td>{{$li['created_at']}}</td>
                                                </tr>
                                            @endforeach
                                            @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

    </div>
</div>
@endsection


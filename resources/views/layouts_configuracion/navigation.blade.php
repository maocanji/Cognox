 <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                             </span>


                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear">
                                <span class="block m-t-xs">
                                    <strong class="font-bold">Usuario :</strong>
                                </span>
                                <span class="text-muted text-xs block">
                                  Usuario  {!! Auth::user()->name !!}
                                    <b class="caret"></b>
                                </span>
                            </span>
                            </a>



                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="datos_perfil">Perfil</a></li>
                            <li><a href="contacts.html">Contactos</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar Sesión') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        Banca
                    </div>
                </li>
                <li id="100" name="100">
                    <a href="home"><i class="fa fa-desktop"></i> <span class="nav-label">Estado de la Cuenta</span>  <span class="pull-right label label-primary">ESPECIAL</span></a>
                </li>


                <li id="0" name="0">
                    <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">Transaciones </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li id="200" name="200">
                            <a href="cuentas_propia">Cuentas Propias</a>
                        </li>
                        <li id="300" name="300">
                            <a href="cuentas_terceros">Cuentas de Terceros</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>

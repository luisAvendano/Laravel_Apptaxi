<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>AppTax!</title>
    <link rel="icon" href="../../logo.ico">
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
</head>

<body>

    <div id="wrapper">


        <nav class="navbar navbar-inverse navbar-fixed-to" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <img src="../../images/Imagen5.png" />
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>



                <a class="navbar-brand" href="index.html">AppTaxi</a>


            </div>


            <ul class="nav navbar-top-links navbar-right">

              <img src="../../images/Imagen5.png" />

                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Administrador:
                        {!!Auth::user()->name!!}<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Ajustes</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Cerar Secion</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a href="#"><i class="fa fa-file fa-fw"></i> Usuario<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/usr/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/usr')!!}"><i class='fa fa-user fa-fw'></i> Usuarios</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-file fa-fw"></i> Taxis<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/taxis/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/taxis')!!}"><i class='fa fa-list-ol fa-fw'></i> Taxis</a>
                                </li>
                            </ul>
                        </li>

                        <!--li>
                            <a href="#"><i class="fa fa-file fa-fw"></i> Conductor<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/taxista/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/taxista')!!}"><i class='fa fa-list-ol fa-fw'></i> Conductor</a>
                                </li>
                            </ul>
                        </li-->
                        <li>
                            <a href="#"><i class="fa fa-file fa-fw"></i> Conductor<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/taxista/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/taxista')!!}"><i class='fa fa-user fa-fw'></i> Conductores</a>
                                </li>
                            </ul>
                        </li>

                        <!--li>
                            <a href="#"><i class="fa fa-file fa-fw"></i> Recepcion<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/taxista/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/taxista')!!}"><i class='fa fa-list-ol fa-fw'></i> Recepcion</a>
                                </li>
                            </ul>
                        </li-->


                        <li>
                            <a href="#"><i class="fa fa-file fa-fw"></i> Destino<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/dirrecion/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/dirrecion')!!}"><i class='fa fa-user fa-fw'></i> Destino</a>
                                </li>
                            </ul>
                        </li>



                    </ul>
                </div>
            </div>

     </nav>

        <div id="page-wrapper">
            @yield('content')
        </div>

    </div>

    <footer>
      <p class="pull-right"><a href="#">App</a></p>
      <p>&copy; 2015 Software Geols, Inc. &middot; <a href="#">AppTaxi</a> &middot; <a href="#">Info</a></p>
    </footer>


    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/metisMenu.min.js')!!}
    {!!Html::script('js/sb-admin-2.js')!!}

</body>

</html>

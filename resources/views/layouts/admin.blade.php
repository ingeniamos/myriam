<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ingeniamos - admin</title>

    <!-- Bootstrap Core CSS -->
    <style type="text/css">
        li.nav-item a{
            color: lightslategray !important;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-dark bg-dark" role="navigation" style="margin: 0 -15px 15px -15px;">
        <div class="navbar-header">
            <a class="navbar-brand text-white" href="admin"><i class="fa fa-home" aria-hidden="true"></i> Admin Ingeniamos</a>
        </div>

        <ul class="nav navbar-top-links navbar-right">
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {!! Auth::user()->name !!}
                    <i class="fa fa-user fa-fw"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Perfil</a>
                <a class="dropdown-item" href="#"><i class="fa fa-cog"></i> Opciones</a>
                <a class="dropdown-item" href="{!!URL::to('/logout')!!}"><i class="fa fa-window-close" aria-hidden="true"></i> Salir</a>
              </div>
            </div>
        </ul>
    </nav>

    <div class="row">
        <div class="col-3">
            <ul class="nav flex-column" style="line-height: 2;">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Buscador...">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                    </div>
                    <!-- /input-group -->
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample0" role="button" aria-expanded="false" aria-controls="multiCollapseExample0"><i class="fa fa-user-secret" aria-hidden="true"></i> Usuarios</a>
                    @if (Auth::user()->id ==1)
                    <div class="collapse multi-collapse" id="multiCollapseExample0">
                        <ul class="flex-column" style=" list-style: none;">
                            <li class="nav-item">
                                <a href="{!!URL::to('/user')!!}"><i class="fa fa-list fa-fw"></i> Listados</a>
                            </li>
                            <li class="nav-item">
                                <a href="{!!URL::to('/user/create')!!}"><i class="fa fa-plus fa-fw"></i> Agregar</a>
                            </li>
                        </ul>
                    </div>
                    @endif
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fa fa-users" aria-hidden="true"></i> Clientes</a>
                    <div class="collapse multi-collapse" id="multiCollapseExample1">
                        <ul class="flex-column" style=" list-style: none;">
                            <li class="nav-item">
                                <a href="{!!URL::to('/cliente')!!}"><i class="fa fa-list fa-fw"></i> Listados</a>
                            </li>
                            <li class="nav-item">
                                <a href="{!!URL::to('/cliente/create')!!}"><i class="fa fa-plus fa-fw"></i> Agregar</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample2" href="#"><i class="fa fa-edit fa-fw"></i> Informes</a>
                </li>
            </ul>
        </div>
        <div class="col-9">
            @yield('content')
        </div>
    </div>

    {{-- <div id="page-wrapper">
        
    </div> --}}
    <!-- /#page-wrapper -->

</div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    @section('scripts')
    @show    
    

</body>

</html>
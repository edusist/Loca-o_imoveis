<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Sistema de Imóveis</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{url('https://code.jquery.com/jquery-3.1.1.min.js')}}"></script>
        <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}"/>   
        <link rel="stylesheet" type="text/css" href="{{url('assets/css/stilo-form.css')}}"/>  
        <link rel="stylesheet" type="text/css" href="{{url('assets/datepicker/css/bootstrap-datepicker.css')}}"/>

    </head>
    <body>
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!--Menu-->
                        <nav class="navbar navbar-inverse">
                            <div class="container-fluid bg-primary">                                
                                <!-- Marca e alternar agrupados para melhor exibição móvel -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand visible-xs" href="#" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">Menu Principal</a>
                                </div>
                                <!--Cadastro-->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li class=""><a href="{{route('admin.painel')}}">Home</a></li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastro<span class="caret"></span></a>
                                            <ul class="dropdown-menu">                       
                                                <li><a href="{{route('admin.register')}}">Administrador</a></li>                                              
                                        </li>                                        
                                        <li><a href="#">teste</a></li>                      
                                    </ul>
                                 
                                </div><!-- /.navbar-collapse -->

                                <!--/fim do menu-->
                            </div><!--/fim do container-->
                        </nav><!-- /fim do navbar inverte-->

                    </div>
                </div>
            </div>
        </header>

        <!-- Contéudo principal -->
        <div class="container-fluid cabecalho">

            @yield('content')       
        </div>
        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{url('http://code.jquery.com/ui/1.10.3/jquery-ui.js')}}"></script>        

        @stack('scripts')

    </body>
</html>




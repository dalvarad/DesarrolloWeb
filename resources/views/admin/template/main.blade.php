<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Panel De Administración</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

	<link rel="stylesheet" href="{{asset ('estilos/plugins/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset ('estilos/barra/icoMoon/icono/icono.css') }}">
	<link rel="stylesheet" href="{{ asset ('estilos/barra/icoMoon/usuario/usuario.css') }}">

</head>
<body>
 	@include('admin.template.partials.adminav')

 	<!--contenido centrado-->
        <div class="container">
            
            <!--titulo panel-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" align="center">@yield('title')</h3>
                </div>  
            </div>

            <!--Cuerpo de panel-->
            <div class="panel-body">

                <!--Incluyo mensajes flash agregados en el controlador-->
                @include('template.partials.flash')

                <!--Incluyo mensajes arrojados por el UsuarioRequest-->
                @include('template.partials.error')

                <!--muestra contendos-->
                @yield('contenido')
                
            </div>
        </div><!--FIN contenido centrado-->

        <!--pie de panel FALTA dejarlo al FINAL-->
        <div class="panel panel-footer" align="center">
            @include('template.partials.footer')
        </div> 
</body>
    <script src="{{asset ('estilos/plugins/jquery-3.2.1.js')}}"></script>
    <script src="{{asset ('estilos/plugins/bootstrap/js/bootstrap.js')}}"></script>
</html>
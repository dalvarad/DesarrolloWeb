<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Hotel Acuarella') | Hotel Acuarella</title>

     <!-- Styles -->
    <link rel="stylesheet" href="{{asset ('estilos/plugins/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset ('estilos/barra/icoMoon/icono/icono.css') }}">
    <link rel="stylesheet" href="{{ asset ('estilos/barra/icoMoon/usuario/usuario.css') }}">
    <link rel="stylesheet" href="{{ asset ('estilos/custom.css') }}">

    @include('template.partials.background')
    
</head>
    <body>

        <!--Barra Menu-->
        @include('template.partials.nav')

        <!--contenido centrado-->
        <div class="container">
            
            <!--titulo panel-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" align="center">@yield('title')</h3>
                </div>  
            </div>

            <!--Cuerpo de panel-->
            <div class="panel panel-default">

                <!--Incluyo mensajes flash agregados en el controlador-->
                @include('template.partials.flash')

                <!--Incluyo mensajes arrojados por el UsuarioRequest-->
                @include('template.partials.error')

                <!--muestra contendos-->
                <div class="panel-body">
                    @yield('contenido')
                </div>
                
            </div>
        </div><!--FIN contenido centrado-->

        <!--pie de panel FALTA dejarlo al FINAL-->
        <div class="abajo" align="center">
            @include('template.partials.footer')
        </div>   
        
        <!-- Javascript -->
        <script src="{{asset ('estilos/plugins/jquery-3.2.1.js')}}"></script>
        <script src="{{asset ('estilos/plugins/bootstrap/js/bootstrap.js')}}"></script> 

    </body>
</html>

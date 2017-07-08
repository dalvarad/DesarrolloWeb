<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Hotel Acuarela') | Hotel Acuarela</title>
    <link rel="stylesheet" href="{{asset ('estilos/plugins/bootstrap/css/bootstrap.css')}}">
    <script src="{{asset ('estilos/plugins/jquery-3.2.1.js')}}"></script>
    <script src="{{asset ('estilos/plugins/bootstrap/js/bootstrap.js')}}"></script>    
</head>
    <body>
        
    <!--

        ESTE ES EL MOLDE PARA EL SITIO WEB, 
        LAS OTRAS VISTAS INCLUYEN ESTA 
        PARA QUE SE VEAN TODAS IGUALES

    -->

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
            <div class="panel-body">

                <!--Incluyo mensajes flash agregados en el controlador-->
                @include('template.partials.flash')

                <!--Incluyo mensaje arrojados por el UsuarioRequest-->
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
</html>
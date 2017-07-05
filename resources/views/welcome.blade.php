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
                <!--muestra contendos-->
                @yield('contenido')
            </div>

            <!--pie de panel FALTA dejarlo al FINAL-->
            <div class="panel panel-footer">
                @include('template.partials.footer')
            </div>  

        </div><!--FIN contenido centrado-->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hotel Acuarella</title>
    <link rel="stylesheet" href="{{asset ('estilos/barra/estilos.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset ('estilos/plugins/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset ('estilos/barra/fonts.css')}}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script rel="javascript"  type="text/javascript" src="estilos/barra/menu.js"></script>
</html>
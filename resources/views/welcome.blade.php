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
  
        <nav class="navbar navbar-default navbar-static-top">     
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toogle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">     
                                                                                                                               
                        <span class="sr-only"> Este boton despliega la barra de navegacion</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Menu</a>
                </div>
                
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-center">
                        <li><a href="{{url('/')}}"><span class="icon-home3"></span>Inicio</a></li>
                        <li><a href="{{url('sucursales')}}"><span class="icon-briefcase"></span>Habitaciones</a></li>
                        <li><a href="{{url('hotel')}}"><span class="icon-earth"></span>¿Quiénes somos?</a></li>
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="icon-rocket"></span>Log In</a></li>
                        <li><a href="#"><span class="icon-mail3"></span>Contactos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
         @yield('contenido')



    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script rel="javascript"  type="text/javascript" src="estilos/barra/menu.js"></script>
</body>
</html>
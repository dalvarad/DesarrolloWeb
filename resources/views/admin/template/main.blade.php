<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
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
</html>
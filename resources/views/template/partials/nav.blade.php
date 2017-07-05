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
                <li><a href="{{url('/')}}"><span class="icon-home3"></span> Inicio</a></li>
                <li><a href="{{url('quienessomos')}}"><span class="icon-earth"></span> ¿Quiénes somos?</a></li>                
                <li><a href="{{url('hotel')}}"><span class="glyphicon glyphicon-header"></span> Hotel</a></li>
                <li><a href="{{url('habitaciones')}}"><span class="icon-briefcase"></span> Habitaciones</a></li>
                
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="icon-rocket"></span> Log In</a></li>
                <li><a href="{{url('contacto')}}"><span class="icon-mail3"></span> Contactos</a></li>
            </ul>
        </div>
    </div>
</nav>
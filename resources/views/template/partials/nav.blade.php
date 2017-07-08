<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
        <li><a href="{{url('quienessomos')}}"><span class="glyphicon glyphicon-sunglasses"></span> ¿Quiénes somos?</a></li>                
        <li><a href="{{url('hotel')}}"><span class="glyphicon glyphicon-header"></span> Hotel</a></li>
        <li><a href="{{route('admin.habitaciones.index')}}{{--url('habitaciones')--}}"><span class="glyphicon glyphicon-bed"></span> Habitaciones</a></li> 
        <li><a href="{{route('admin.usuarios.index')}}{{--url('habitaciones')--}}"><span class="glyphicon glyphicon-bed"></span> usuarios</a></li>         
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-off"></span> Log In</a></li>
        <li><a href="{{url('contacto')}}"><span class="glyphicon glyphicon-envelope"></span> Contactenos</a></li>
      </ul>
    </div>
  </div>
</nav>
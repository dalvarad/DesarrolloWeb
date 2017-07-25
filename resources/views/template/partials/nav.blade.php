<nav class="navbar navbar-default navbar-static-top">     
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toogle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> 
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
  
              @if (!Auth::guest())
                @if(Auth::user()->type == 'administrador')
                    <a class="navbar-brand" href="#">Administración</a>
                @elseif(Auth::user()->type == 'recepcionista')
                    <a class="navbar-brand" href="#">Recepción</a>
                @elseif(Auth::user()->type == 'cliente')
                    <a class="navbar-brand" href="#">Cliente</a>
                @endif
              @endif
  
        </div>

    <div id="navbar" class="navbar-collapse collapse">
 
    @if (!Auth::guest()) 
            @if(Auth::user()->type == 'administrador')
                <ul class="nav navbar-nav navbar-center">
                    <li><a href="{{url('home')}}"><span class="icon-home3"></span> Inicio</a></li>
                    <li><a href="{{url('hotel')}}"><span class="glyphicon glyphicon-header"></span> Hotel</a></li>
                    <li><a href="{{url('quienessomos')}}"><span class="icon-earth"></span> ¿Quiénes somos?</a></li> 
                    <li><a href="{{url('admin/users')}}"><span class="icon-user">Usuarios</span></a></li>
                    <li><a href="{{url('admin/habitaciones')}}"><span class="icon-briefcase"></span> Habitaciones</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                        </ul>
                    </li>
                </ul>
            @elseif(Auth::user()->type == 'recepcionista')
                <ul class="nav navbar-nav navbar-center">
                    <li><a href="{{url('home')}}"><span class="icon-home3"></span> Inicio</a></li>
                    <li><a href="{{url('hotel')}}"><span class="glyphicon glyphicon-header"></span> Hotel</a></li>
                    <li><a href="{{url('quienessomos')}}"><span class="icon-earth"></span> ¿Quiénes somos?</a></li> 
                    <li><a href="{{url('admin/users')}}"><span class="icon-user">Usuarios</span></a></li>
                    <li><a href="{{url('admin/habitaciones')}}"><span class="icon-briefcase"></span> Habitaciones</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                        </ul>
                    </li>
                </ul>
            @elseif(Auth::user()->type == 'cliente')
                <ul class="nav navbar-nav navbar-center">
                    <li><a href="{{url('home')}}"><span class="icon-home3"></span> Inicio</a></li>
                    <li><a href="{{url('hotel')}}"><span class="glyphicon glyphicon-header"></span> Hotel</a></li>
                    <li><a href="{{url('quienessomos')}}"><span class="icon-earth"></span> ¿Quiénes somos?</a></li> 
                    <li><a href="{{url('admin/habitaciones')}}"><span class="icon-briefcase"></span> Habitaciones</a></li>
                    <li><a href="{{url('admin/reservas')}}"><span class="glyphicon glyphicon-pencil"></span> Reservas</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                        </ul>
                    </li>
                </ul>
            @endif

        @else

            <ul class="nav navbar-nav navbar-center">
                <li><a href="{{url('home')}}"><span class="icon-home3"></span> Inicio</a></li>
                <li><a href="{{url('hotel')}}"><span class="glyphicon glyphicon-header"></span> Hotel</a></li>
                <li><a href="{{url('quienessomos')}}"><span class="icon-earth"></span> ¿Quiénes somos?</a></li> 
                <li><a href="{{url('habitaciones')}}"><span class="glyphicon glyphicon-bed"></span> Habitaciones</a></li>
            </ul>        

            <ul class="nav navbar-nav navbar-right">
                  <li><a href="{{ url('/login') }}">Iniciar Sesión</a></li>
                  <li><a href="{{ url('/register') }}">Registrar</a></li>
            </ul>
        @endif

    </div>
  </div>
</nav>
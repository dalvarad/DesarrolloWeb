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

    <div id="navbar" class="navbar-collapse collapse">
     @if(Auth::user())
            <ul class="nav navbar-nav navbar-center">
                <li><a href="{{url('home')}}"><span class="icon-home3"></span> Inicio</a></li>
                <li><a href="{{url('admin/users')}}"><span class="icon-user">Usuarios</span></a></li>
                <li><a href="{{url('hotel')}}"><span class="glyphicon glyphicon-header"></span> Hotel</a></li>
                <li><a href="{{url('admin/habitaciones')}}"><span class="icon-briefcase"></span> Habitaciones</a></li>
                <li><a href="{{url('quienessomos')}}"><span class="icon-earth"></span> ¿Quiénes somos?</a></li>    
            </ul>
      @else
      <ul class="nav navbar-nav">
        <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
        <li><a href="{{url('hotel')}}"><span class="glyphicon glyphicon-header"></span> Hotel</a></li>
        <li><a href="{{url('habitaciones')}}"><span class="glyphicon glyphicon-bed"></span> Habitaciones</a></li>
        <li><a href="{{url('quienessomos')}}"><span class="glyphicon glyphicon-sunglasses"></span> ¿Quiénes somos?</a></li>
      </ul>
      @endif
      <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
        </ul>
    </div>
  </div>
</nav>
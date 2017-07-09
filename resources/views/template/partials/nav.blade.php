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
        <li><a href="{{route('admin.users.index')}}{{--url('habitaciones')--}}"><span class="glyphicon glyphicon-bed"></span> usuarios</a></li>         
      </ul>

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
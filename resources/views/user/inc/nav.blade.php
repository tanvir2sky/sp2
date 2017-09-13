<nav class="navbar navbar-default" style="background-color: lightslategrey">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <h1><a href="{{url('/')}}"><span>A</span>iub <p class="s-log">Hotel</p></a>

        </h1>
    </div>
    <!-- navbar-header -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <ul class="nav navbar-nav">
            <li class="{{ Request::path() =='/' ? 'active' : '' }}"><a href="{{url('/')}}">Home</a></li>
            <li class="{{ Request::path() =='about' ? 'active' : '' }}"><a href="{{url('/about')}}">About</a></li>
            <li class="{{ Request::path() =='gallery' ? 'active' : '' }}"><a href="{{url('/gallery')}}">Gallery</a></li>
            <li class="{{ Request::path() =='contact' ? 'active' : '' }}"><a href="{{url('/contact')}}">Contact</a></li>
            @if (Auth::guest())
            <li class="{{ Request::path() =='login' ? 'active' : '' }}"><a href="{{url('/login')}}">Login</a></li>
            <li class="{{ Request::path() =='register' ? 'active' : '' }}"><a href="{{url('/register')}}">Register</a></li>
            @endif
            @role('customer')
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
            @endrole
        </ul>


    </div>
    <div class="clearfix"></div>
</nav>
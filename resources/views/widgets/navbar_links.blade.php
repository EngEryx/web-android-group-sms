<ul id="dropdown1" class="dropdown-content">
    <li><a href="{{ url('/smses/new') }}">New</a></li>
    <li><a href="{{ url('/smses/sent') }}">Sent</a></li>
    <li class="divider"></li>
    <li><a href="{{ url('/smses/queued') }}">Queued SMS</a></li>
</ul>
<ul id="dropdown2" class="dropdown-content">
    <li><a href="{{ url('/contacts') }}">All</a></li>
    <li><a href="{{ url('/contacts/add') }}">Add New</a></li>
    <li class="divider"></li>
    <li><a href="{{ url('/communities') }}">Communities</a></li>
    <li><a href="{{ url('/communities/add') }}">Add Community</a></li>
</ul>
<ul id="dropdown3" class="dropdown-content">
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

<div class="navbar-fixed light-blue lighten-5">
    <nav>
        <div class="nav-wrapper container">
            <a href="#" id="logo-container" class="brand-logo"> Innovators </a>
            <ul id="nav-mobile" class="right hid-on-med-and-down">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">SMSes<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Members<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-button" href="#!" data-activates="dropdown3">User<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </div>
    </nav>
</div>
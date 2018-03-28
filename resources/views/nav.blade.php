 @if(Auth::check())
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Smart-Joint Hotel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item {{Request::is('/') ? 'active' : ''}}"><a class="nav-link" href="{{url('/')}}">Home</a></li>
      <li class="nav-item {{Request::is('meals') ? 'active' : ''}}"><a class="nav-link" href="{{url('/meals')}}">Meals</a></li>
      <li class="nav-item {{Request::is('/message') ? 'active' : ''}}"><a class="nav-link" href="{{url('/message')}}">Contact Us</a></li>
      <li class="nav-item"><a class="nav-link" href="">{{Auth::user()->name}}</a></li>
      <li class="nav-item"><a class="nav-link" href="{{'/signout'}}">Logout</a></li>
    </ul>
  </div>
</nav>

@else

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Smart-Joint Hotel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="  navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item {{Request::is('/') ? 'active' : ''}}"><a class="nav-link" href="{{url('/')}}">Home</a></li>
      <li class="nav-item {{Request::is('meals') ? 'active' : ''}}"><a class="nav-link" href="{{url('/meals')}}">Meals</a></li>
      <li class="nav-item {{Request::is('/message') ? 'active' : ''}}"><a class="nav-link" href="{{url('/message')}}">Contact Us</a></li>
      <li class="nav-item {{Request::is('/customer') ? 'active' : ''}}"><a class="nav-link" href="{{url('/customer')}}">Account</a></li>
    </ul>
    </ul>
  </div>
</nav>

   @endif
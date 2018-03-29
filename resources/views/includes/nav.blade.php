 @if(Auth::check())
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Smart-Joint Hotel</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item {{Request::is('/') ? 'active' : ''}}"><a class="nav-link" href="{{url('/')}}">Home</a></li>
      <li class="nav-item {{Request::is('meals') ? 'active' : ''}}"><a class="nav-link" href="{{url('/meals')}}">Tosha Foods and Beverages</a></li>
      <li class="nav-item {{Request::is('/message') ? 'active' : ''}}"><a class="nav-link" href="{{url('/message')}}">Contact Us</a></li>
      <li class="nav-item"><a class="nav-link" href="">{{Auth::user()->name}}</a></li>
           <li class="nav-item">
              <a href="{{ url('/logout') }}" class="nav-link"
          onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
         <i class="fa fa-fw fa-sign-out"></i> Logout
      </a>

      <form id="logout-form" action="{{ url('/signout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
      </form>
        </li>
    </ul>
  </div>
</nav>

@else

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Smart-Joint Hotel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="  navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item {{Request::is('/') ? 'active' : ''}}"><a class="nav-link" href="{{url('/')}}">Home</a></li>
      <li class="nav-item {{Request::is('meals') ? 'active' : ''}}"><a class="nav-link" href="{{url('/meals')}}">Tosha Foods and Beverages</a></li>
      <li class="nav-item {{Request::is('/message') ? 'active' : ''}}"><a class="nav-link" href="{{url('/message')}}">Contact Us</a></li>
       <!-- Link trigger modal -->
<li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#exampleModalCenter" href="#">Login</a>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="     exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          <form action="{{url('/signin')}}" method="post">
            {{ csrf_field() }}
            @if(Session::has('error'))
            <div class="form-group">
              <p class="alert alert-warning">{{Session::get('error')}}</p>
            </div>
            @endif
    
             <div class="form-group">
              <label class="control-label">EMAIL ADDRESS</label>
              <input class="form-control" type="email" name="email" placeholder="Email" autofocus required="">
            </div>

            <div class="form-group">
              <label class="control-label">PASSWORD</label>
              <input class="form-control" type="password" name="password" placeholder="Password" required="">
            </div>
         
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">SIGN IN</button>
      </div>
    </form>
    </div>
  </div>
</div>
</li>
<li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#myModalCenter" href="#">Register</a>

<!-- Modal -->
<div class="modal fade" id="myModalCenter" tabindex="-1" role="dialog" aria-labelledby="myModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLongTitle">CREATE ACCOUNT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          <form action="{{url('/customer')}}" method="post">
          {{ csrf_field() }}
          @if(Session::has('success'))
          <div class="form-group">
            <p class="alert alert-success">{{Session::get('success')}}</p>
          </div>
          @endif
          @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <div class="form-group">
            <label class="control-label">FULL NAME</label>
            <input class="form-control" type="text" name="name" placeholder="Email" autofocus>
          </div>
           <div class="form-group">
            <label class="control-label">EMAIL ADDRESS</label>
            <input class="form-control" type="email" name="email" placeholder="Email" autofocus>
          </div>
           <div class="form-group">
            <label class="control-label">PHONE NO.</label>
            <input class="form-control" type="text" name="phone" placeholder="Phone Number" autofocus>
          </div>
           <div class="form-group">
            <label class="control-label">TOWN OF RESIDENCE</label>
            <input class="form-control" type="text" name="residence" placeholder="Where do you live? eg. Nakuru" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" name="password" placeholder="Password">
          </div>
      
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">SIGN UP</button>
      </div>
        </form>
   
    </div>
  </div>
</div>
</li>
    </ul>
  </div>
</nav>

   @endif

 
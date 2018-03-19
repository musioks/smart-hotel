    <div class="navbar navbar-inverse" role="navigation" style="margin-bottom:1px;">
          <div class="container">
            @if(Auth::check())
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="sr-only">Toggle navigation </span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>

                  <a class="navbar-brand" href="{{url('/')}}">Smart Joint Hotel System</a>
              </div>
              <div class="navbar-collapse collapse navbar-responsive-collapse navbar-right">
                  <ul class="nav navbar-nav ">
        <li class="{{Request::is('/') ? 'active' : ''}}"> <a href="{{url('/')}}"> <i class="fa fa-home fa-fw"></i> Home</a></li>
         <li class="{{Request::is('meals') ? 'active' : ''}}"> <a href="{{url('/meals')}}">  <i class="fa fa-bars fa-fw"></i>Meals</a></li>
       <li class="{{Request::is('message') ? 'active' : ''}}"> <a href="{{url('/message')}}"> <i class="fa fa-phone fa-fw"></i> Contact Us</a></li>
        <li class=""> <a href=""> <i class="fa fa-user fa-fw"></i> {{Auth::user()->name}} </a></li>
       <li class=""> <a href="{{'/signout'}}"> <i class="fa fa-poweroff fa-fw"></i> Logout</a></li>
    
   
                  </ul>

              </div>
@else

              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="sr-only">Toggle navigation </span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>

                  <a class="navbar-brand" href="{{url('/')}}">Smart Joint Hotel System</a>
              </div>
              <div class="navbar-collapse collapse navbar-responsive-collapse navbar-right">
                  <ul class="nav navbar-nav ">
      <li class="{{Request::is('/') ? 'active' : ''}}"> <a href="{{url('/')}}"> <i class="fa fa-home fa-fw"></i> Home</a></li>
      <li class="{{Request::is('meals') ? 'active' : ''}}"> <a href="{{url('/meals')}}">  <i class="fa fa-bars fa-fw"></i>Meals</a></li>
      <li class="{{Request::is('message') ? 'active' : ''}}"> <a href="{{url('/message')}}"> <i class="fa fa-phone fa-fw"></i> Contact Us</a></li>
      <li class="{{Request::is('customer') ? 'active' : ''}}"><a href="{{url('/customer')}}"> <i class="fa fa-user fa-fw"></i> Account</a></li>
   
   
                  </ul>

              </div>
           @endif
          </div>
      </div>
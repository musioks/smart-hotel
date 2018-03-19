<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
   <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <title>Smart Joint Hotel</title>
  </head>
  <style type="text/css">
    .carousel-inner img{
      width:100%;
    }
  </style>
  <body>
      <!--beginning of navigation bar-->
      @include('nav')
      <!--end of navigation bar-->
<div class="container">
  <h1></h1>
     <div class="row">
      <div class="col-sm-5">
    <div class="panel panel-info">
      <div class="panel panel-heading">
        <h2 class="text-center">Login</h2>
      </div>
    <div class="panel-body">
          <form class="login-form" action="{{url('/signin')}}" method="post">
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
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>
    </div>
  </div>
      </div>
      <div class="col-sm-7">
           <div class="panel panel-warning">
      <div class="panel panel-heading">
        <h2 class="text-center">Create Account</h2>
      </div>
    <div class="panel-body">
 <form class="login-form" action="{{url('/customer')}}" method="post">
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
          <div class="form-group btn-container">
            <button class="btn btn-success btn-block" type="submit"><i class="fa fa-pencil fa-lg fa-fw"></i>SIGN UP</button>
          </div>
        </form>
    </div>
  </div>
      </div>
    </div><!--end row-->

  </div><!--end main container-->
   <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins/pace.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

  </body>
</html>


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
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>SMART JOINT HOTEL</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="{{url('/register')}}" method="post">
          {{ csrf_field() }}
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>ADMIN SIGN UP</h3>
          @if(Session::has('error'))
          <div class="form-group">
            <p class="alert alert-danger">{{Session::get('error')}}</p>
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
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" name="password" placeholder="Password">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-success btn-block" type="submit"><i class="fa fa-pencil fa-lg fa-fw"></i>SIGN UP</button>
          </div>
        </form>
      
      </div>
    </section>
  </body>
   <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins/pace.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</html>
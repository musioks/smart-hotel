<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
   <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <title>Smart Joint Hotel</title>
  </head>

  <body>
      <!--beginning of navigation bar-->
      @include('nav')
      <!--end of navigation bar-->
<div class="container">
  <h1></h1>
     <div class="row">

      <div class="col-sm-8 col-sm-offset-2">
           <div class="panel panel-success">
      <div class="panel panel-heading">
        <h2 class="text-center">Talk to us</h2>
      </div>
    <div class="panel-body">
 <form class="login-form" action="{{url('/message')}}" method="post">
          {{ csrf_field() }}
          @if(Session::has('error'))
          <div class="form-group">
            <p class="alert alert-info">{{Session::get('error')}}</p>
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
          @if(Auth::check())
            <div class="form-group">
            <label class="control-label">FULL NAME</label>
            <input class="form-control" type="text" name="name" value="{{Auth::user()->name}}" readonly="">
          </div>
           <div class="form-group">
            <label class="control-label">EMAIL ADDRESS</label>
            <input class="form-control" type="email" name="email" value="{{Auth::user()->email}}" readonly="">
          </div>
          @else
             <div class="form-group">
            <label class="control-label">FULL NAME</label>
            <input class="form-control" type="text" name="name" placeholder="Email" autofocus>
          </div>
           <div class="form-group">
            <label class="control-label">EMAIL ADDRESS</label>
            <input class="form-control" type="email" name="email" placeholder="Email" autofocus>
          </div>
          @endif
           <div class="form-group">
            <label class="control-label">SUBJECT</label>
            <input class="form-control" type="text" name="subject" placeholder="Subject" autofocus>
          </div>
           <div class="form-group">
            <label class="control-label">MESSAGE</label>
            <textarea class="form-control"  name="body" placeholder="Write your message here..." autofocus>
            </textarea>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-success btn-block" type="submit"><i class="fa fa-send fa-lg fa-fw"></i>SEND</button>
          </div>
        </form>
    </div>
  </div>
      </div>
    </div><!--end row-->

  </div><!--end main container-->
   <script src="{{asset('js/app.js')}}"></script>

  </body>
</html>

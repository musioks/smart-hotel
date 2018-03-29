
@extends('includes.main')
@section('content')
    <div class="container">
      <div class="logo">
        <h1></h1>
      </div>
      <div class="row">
      <div class="col-md-6 offset-md-3">
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
    </div>
  </div><!--end row-->
</div>
 @endsection
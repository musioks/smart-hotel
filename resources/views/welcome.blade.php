@extends('includes.main')
@section('content')
<div class="container">
  <h1></h1>
     <div class="row">
      <div class="col-md-6 offset-md-3">
           <div class="panel panel-success">
      <div class="card">
        <h2 class="card-title text-center text-warning rounded-0">Message Us</h2>
      </div>
    <div class="card-body">
<p class="card-text text-center">Please fill out the form below to get in touch.</p>
 <form class="login-form" action="{{url('/message')}}" method="post">
          {{ csrf_field() }}
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
@endsection
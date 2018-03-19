@extends('layouts.master')
@section('title') <i class="fa fa-bars"></i> Customer Feedback @stop
@section('crumbs') 
<li><i class="fa fa-home"></i></li>
<li><a href="{{url('/admin')}}">Dashboard</a></li>
<li><a href="#">Feedback</a></li>
 @stop

@section('content')
  <div class="row">
          <div class="col-md-12">
            <div class="card card-success">
              <h3 class="card-title">Customer Feedback 
              </h3>
              <hr>

      <table class="table table-hover table-bordered" id="myTable">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email Address</th>
                      <th>Subject</th>
                      <th>Message</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($messages as $message)
                    <tr>
                      <td>{{$message->name}}</td>
                      <td>{{$message->email}}</td>
                      <td>{{$message->subject}}</td>
                      <td>{{$message->body}}</td>
                    </tr>
                    @empty
                    <p>No message found!</p>
                    @endforelse
                  </tbody>
                </table>
            </div>
          </div>
        </div><!--end row-->
     
@stop
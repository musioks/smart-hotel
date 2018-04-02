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

      <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email Address</th>
                      <th>Subject</th>
                      <th>Message</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($messages as $message)
                    <tr>
                      <td>{{$message->name}}</td>
                      <td>{{$message->email}}</td>
                      <td>{{$message->subject}}</td>
                      <td>{{$message->body}}</td>
                      <td><button class="btn btn-danger" data-toggle="modal" data-target="#panel-modal-{{ $message->id }}"><i class="fa fa-remove"></i></button></td>
                      <!-- ====================Delete Modal===========================  -->
<div id="panel-modal-{{ $message->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
                    <h5>Are you sure you want to delete this message?</h5>
                </div>
                  <div class="modal-footer">
        <a href="{{ url('/admin/messages/delete/'.$message->id) }}" class="btn btn-success pull-left">Okay</a>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
            </div>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- ====================End Delete Modal===========================  -->
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
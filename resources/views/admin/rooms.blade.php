@extends('layouts.master')
@section('title') <i class="fa fa-bars"></i> Rooms @stop
@section('crumbs') 
<li><i class="fa fa-home"></i></li>
<li><a href="{{url('/admin')}}">Dashboard</a></li>
<li><a href="#">Rooms and facilities </a></li>
 @stop
@section('content')
  <div class="row">
          <div class="col-md-12">
            <div class="card">
              <h3 class="card-title">Hotel Rooms and facilities List 
                <button class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal">Create Room/Facility</button>
              </h3>
  <hr>
<!-- Add User Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New Room/Facility</h4>
      </div>
      <div class="modal-body">
     <form role="form"   method="post" action="{{ url('/admin/rooms') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="category_id" value="2">
     <div class="form-group">
        <label  for="form-username">Room/Facility Identity(name) <span class="text-danger">*</span></label>
        <input type="text" name="name" placeholder="e.g Room 104" class="form-control"  required>
    </div>
       <div class="form-group">
        <label  for="form-username">Description <span class="text-danger">*</span></label>
        <textarea name="description"  class=" form-control"    required> Describe the room or facility features... </textarea>
    </div>
    <div class="form-group">
        <label  for="form-username">Price <span class="text-danger">*</span></label>
        <input type="number" name="price" placeholder="Price..." class=" form-control"  min="0"   required>
    </div>
      <div class="form-group">
        <label  for="form-username">Image <span class="text-danger">*</span></label>
        <input type="file" name="photo"  class=" form-control"  required>
    </div>
      <div class="form-group">
    <button type="submit" class="btn btn-info">Submit</button>
</div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End Add User Modal -->
    @if(Session::has('message'))
            <p class="alert alert-info">{{Session::get('message')}}</p>
          @endif
      <table class="table table-hover table-bordered" id="myTable">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Price</th>
                      <th>Image</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($rooms as $room)
                    <tr>
                      <td>{{$room->name}}</td>
                      <td>{{$room->description}}</td>
                      <td>{{$room->price}}</td>
                      <td><img src="{{asset('/images/products/'.$room->photo)}}" height="200" width="250"></td>
                    </tr>
                    @empty
                    <p>No room found!</p>
                    @endforelse
                  </tbody>
                </table>
            </div>
          </div>
        </div><!--end row-->
     
@stop
@extends('layouts.master')
@section('title') <i class="fa fa-bars"></i> Meals @stop
@section('crumbs') 
<li><i class="fa fa-home"></i></li>
<li><a href="{{url('/admin')}}">Dashboard</a></li>
<li><a href="#">Meals</a></li>
 @stop

@section('content')
  <div class="row">
          <div class="col-md-12">
            <div class="card">
              <h3 class="card-title">Meals List 
                <button class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal">Add Meal</button>
              </h3>
              <hr>
<!-- Add User Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Meal</h4>
      </div>
      <div class="modal-body">
     <form role="form"   method="post" action="{{ url('/admin/meals') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="category_id" value="1">
     <div class="form-group">
        <label  for="form-username">Meal Name <span class="text-danger">*</span></label>
        <input type="text" name="name" placeholder="e.g French Fries..." class="form-control"  required>
    </div>
       <div class="form-group">
        <label  for="form-username">Description <span class="text-danger">*</span></label>
        <textarea name="description"  class=" form-control"    required> Describe the meal... </textarea>
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
      <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Price</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($meals as $meal)
                    <tr>
                      <td>{{$meal->name}}</td>
                      <td>{{$meal->description}}</td>
                      <td>{{$meal->price}}</td>
  <td><img src="{{asset('/images/products/'.$meal->photo)}}" height="200" width="250"></td>
<td>
  <button class="btn btn-danger" data-toggle="modal" data-target="#panel-modal-{{ $meal->id }}"><i class="fa fa-remove"></i></button>
   <a href="" class="btn btn-success" data-toggle="modal" data-target="#update-modal-{{$meal->id }}">
          <i class="fa fa-edit"></i>
  </a>
</td>
<!-- ====================Delete Modal===========================  -->
<div id="panel-modal-{{ $meal->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
                    <h5>Are you sure you want to delete this meal?</h5>
                </div>
                  <div class="modal-footer">
        <a href="{{ url('/admin/meals/delete/'.$meal->id) }}" class="btn btn-success pull-left">Okay</a>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
            </div>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- ====================End Delete Modal===========================  -->
<!-- Update Modal -->
<div class="modal fade" id="update-modal-{{ $meal->id }}" style="overflow: hidden;" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Food/Beverage Details</h4>
      </div>
      <div class="modal-body">
     <form  role="form" id="update-form-{{$meal->id}}" method="post" action="{{ url('/admin/meals/update') }}" enctype="multipart/form-data" >
        {{ csrf_field() }}
        {{ method_field('patch') }}
<input type="hidden" name="id" value="{{ $meal->id }}">
 <input type="hidden" name="category_id" value="1">
     <div class="form-group">
        <label  for="form-username">Food/Beverage Identity(name)</label>
        <input type="text" name="name" value="{{$meal->name}}" class="form-control">
    </div>
       <div class="form-group">
        <label  for="form-username">Description</label>
        <textarea name="description"  class=" form-control" > {{$meal->description}} </textarea>
    </div>
    <div class="form-group">
        <label  for="form-username">Price</label>
        <input type="number" name="price" value="{{$meal->price}}" class=" form-control"  min="0">
    </div>
      <div class="form-group">
        <label  for="form-username">Image</label>
        <input type="file" name="photo"  class=" form-control" value="{{$meal->photo}}">
    </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success pull-left" onclick="$('#update-form-{{$meal->id}}').submit()">Submit</button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End Update Modal --> 
                    </tr>
                    @empty
                    <p>No Meal found</p>
                    @endforelse
                  </tbody>
                </table>
            </div>
          </div>
        </div><!--end row-->
     
@stop
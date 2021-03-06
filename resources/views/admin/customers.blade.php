@extends('layouts.master')
@section('title') <i class="fa fa-bars"></i> Customers @stop
@section('crumbs') 
<li><i class="fa fa-home fa-fw"></i></li>
<li><a href="{{url('/admin')}}">Dashboard</a></li>
<li><a href="#">Customers</a></li>
 @stop

@section('content')
  <div class="row">
          <div class="col-md-12">
            <div class="card">
              <h3 class="card-title">Customers List 
              </h3>
              <hr>
      <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email Address</th>
                      <th>Phone Number</th>
                      <th>Place of Residence</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($customers as $customer)
                    <tr>
                      <td>{{$customer->name}}</td>
                      <td>{{$customer->email}}</td>
                      <td>{{$customer->phone}}</td>
                      <td>{{$customer->residence}}</td>
                      <td>
                <button class="btn btn-success" data-toggle="modal" data-target="#panel-modal-{{ $customer->id }}"><i class="fa fa-eye"></i>View Report</button>
                <button class="btn btn-danger" data-toggle="modal" data-target="#delete-modal-{{ $customer->id }}"><i class="fa fa-remove"></i></button></td>
       <!-- ====================Delete Modal===========================  -->
<div id="delete-modal-{{ $customer->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
                    <h5>Are you sure you want to delete this customer?</h5>
                </div>
                  <div class="modal-footer">
        <a href="{{ url('/admin/customers/delete/'.$customer->id) }}" class="btn btn-success pull-left">Okay</a>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
            </div>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- ====================End Delete Modal===========================  -->
       <!-- ====================Report Modal===========================  -->
<div id="panel-modal-{{ $customer->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
  <h3>Customer Report</h3>
  <hr>
       <form role="form"   method="post" action="{{ url('/admin/customers') }}" >
        {{ csrf_field() }}
        <input type="hidden" name="customer_id" value="{{$customer->id}}">

      <div class="form-group">
    <button type="submit" class="btn btn-warning btn-block">Generate Report</button>
</div>
</form>
{{--       <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
 --}}      </div>
        <div class="modal-footer">
      </div>
            </div>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- ====================End Report Modal===========================  -->
                    </tr>
                    @empty
                    <p>No Customer found!</p>
                    @endforelse
                  </tbody>
                </table>
            </div>
          </div>
        </div><!--end row-->
     
@stop
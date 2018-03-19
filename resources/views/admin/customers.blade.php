@extends('layouts.master')
@section('title') <i class="fa fa-bars"></i> Customers @stop
@section('crumbs') 
<li><i class="fa fa-home"></i></li>
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
      <table class="table table-hover table-bordered" id="myTable">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email Address</th>
                      <th>Phone Number</th>
                      <th>Place of Residence</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($customers as $customer)
                    <tr>
                      <td>{{$customer->name}}</td>
                      <td>{{$customer->email}}</td>
                      <td>{{$customer->phone}}</td>
                      <td>{{$customer->residence}}</td>
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
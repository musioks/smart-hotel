@extends('layouts.master')
@section('title') <i class="fa fa-bars"></i> Ordered Meals @stop
@section('crumbs') 
<li><i class="fa fa-home"></i></li>
<li><a href="{{url('/admin')}}">Dashboard</a></li>
<li><a href="#">Ordered meals </a></li>
 @stop
@section('content')
  <div class="row">
          <div class="col-md-12">
            <div class="card">
  <hr>
      <table class="table table-hover table-bordered" id="myTable">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Customer</th>
                      <th>Checkin date</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($meals as $meal)
                    <tr>
                      <td>{{$meal->name}}</td>
                      <td>{{$meal->price}}</td>
                      <td>{{$meal->customer}}</td>
                      <td>{{$meal->created_at}}</td>
                    </tr>
                    @empty
                    <p>No data found!</p>
                    @endforelse
                  </tbody>
                </table>
            </div>
          </div>
        </div><!--end row-->
     
@stop
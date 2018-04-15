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
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($meals as $meal)
                    <tr>
                      <td>{{$meal->name}}</td>
                      <td>{{$meal->price}}</td>
                      <td>{{$meal->customer}}</td>
                      <td>{{$meal->created_at}}</td>
                      @if($meal->status==1)
                      <td>
                        <form action="{{url('/admin/release')}}" method="post">
                          {{csrf_field()}}
                          <input type="hidden" name="id" value="{{$meal->id}}">
                          <button type="submit" class="btn btn-info btn-sm" onclick="confirm('Are you sure you want to release this product?')">Release</button>
                        </form>
                        </td>
                      @else
                      <td><a href="" class="btn btn-success btn-sm">ORDER</a></td>
                      @endif
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
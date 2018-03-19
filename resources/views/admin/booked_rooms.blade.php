@extends('layouts.master')
@section('title') <i class="fa fa-bars"></i> Booked Rooms @stop
@section('crumbs') 
<li><i class="fa fa-home"></i></li>
<li><a href="{{url('/admin')}}">Dashboard</a></li>
<li><a href="#">Booked Rooms and facilities </a></li>
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
                      <th>No. of People</th>
                      <th>Checkin date</th>
                      <th>Checkout date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($rooms as $room)
                    <tr>
                      <td>{{$room->name}}</td>
                      <td>{{$room->price}}</td>
                      <td>{{$room->customer}}</td>
                      <td>{{$room->no_people}}</td>
                      <td>{{$room->checkin_date}}</td>
                      <td>{{$room->checkout_date}}</td>
                      @if($room->checkout_date <=date('Y-m-d'))
                      <td>
                        <form action="{{url('/admin/release')}}" method="post">
                          {{csrf_field()}}
                          <input type="hidden" name="id" value="{{$room->id}}">
                          <button type="submit" class="btn btn-info btn-sm">Release</button>
                        </form>
                        </td>
                          }
                      @else
                      <td><a href="" class="btn btn-success btn-sm">Occupied</a></td>
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
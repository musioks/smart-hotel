@extends('layouts.master')
@section('title') <i class="fa fa-dashboard"></i> Dashboard @stop
@section('crumbs') 
<li><i class="fa fa-home"></i></li>
<li><a href="#">Dashboard</a></li>
 @stop

@section('content')

<!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-group"></i>
              </div>
              <div class="mr-5"><span class="badge badge-light">@php 
               $customers=\DB::table('customers')->get()->count();
                  @endphp
                  {{$customers}}
                </span> Customers!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="{{url('admin/customers')}}">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-chat"></i>
              </div>
              <div class="mr-5"><span class="badge badge-light">
               @php 
               $messages=\DB::table('messages')->get()->count();
                  @endphp
                {{$messages}}
                </span> Customer Messages </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="{{url('admin/messages')}}">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-bag"></i>
              </div>
              <div class="mr-5"><span class="badge badge-light"> @php 
               $rooms=DB::table('products')
                  ->join('categories','products.category_id','=','categories.id')
                  ->select('products.*','categories.name as category')
                  ->where('categories.name','like','%rooms%')
                  ->get()->count();
                  @endphp
                {{$rooms}}  
                </span> Rooms /Facilities</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="{{url('admin/rooms')}}">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-money"></i>
              </div>
              <div class="mr-5"><span class="badge badge-light">@php
  $meals=DB::table('products')
                  ->join('categories','products.category_id','=','categories.id')
                  ->select('products.*','categories.name as category')
                  ->where('categories.name','like','%meals%')
                  ->get()->count();
                  @endphp
                  {{$meals}}
                </span> Meals</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="{{url('admin/meals')}}">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
  
    
       
@stop
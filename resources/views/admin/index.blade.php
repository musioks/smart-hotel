@extends('layouts.master')
@section('title') <i class="fa fa-dashboard"></i> Dashboard @stop
@section('crumbs') 
<li><i class="fa fa-home"></i></li>
<li><a href="#">Dashboard</a></li>
 @stop

@section('content')
         <div class="row">
          <div class="col-md-3">
            <div class="widget-small primary"><i class="icon fa fa-users fa-3x"></i>
              <div class="info">
                <h4>Customers</h4>
                <p><b>
                  @php 
               $customers=\DB::table('customers')->get()->count();
                  @endphp
                {{$customers}}
                </b></p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="widget-small info"><i class="icon fa fa-inbox fa-3x"></i>
              <div class="info">
                <h4>Customer messages</h4>
                <p><b>
                      @php 
               $messages=\DB::table('messages')->get()->count();
                  @endphp
                {{$messages}}

                </b></p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="widget-small warning"><i class="icon fa fa-files-o fa-3x"></i>
              <div class="info">
                <h4>Rooms /Facilities</h4>
                <p><b>
                      @php 
               $rooms=DB::table('products')
                  ->join('categories','products.category_id','=','categories.id')
                  ->select('products.*','categories.name as category')
                  ->where('categories.name','like','%rooms%')
                  ->get()->count();
                  @endphp
                {{$rooms}}
                </b></p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="widget-small danger"><i class="icon fa fa-bars fa-3x"></i>
              <div class="info">
                <h4>Meals</h4>
                <p><b>
                  @php
  $meals=DB::table('products')
                  ->join('categories','products.category_id','=','categories.id')
                  ->select('products.*','categories.name as category')
                  ->where('categories.name','like','%meals%')
                  ->get()->count();
                  @endphp
                  {{$meals}}
                </b></p>
              </div>
            </div>
          </div>
        </div>
       
@stop
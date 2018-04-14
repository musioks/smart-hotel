@extends('includes.main')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('images/uploads/5.jpg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/uploads/6.jpg')}}" alt="First slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/uploads/3.jpg')}}" alt="First slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/uploads/7.jpeg')}}" alt="First slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/uploads/1.jpg')}}" alt="First slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end carousel -->
<div class="jumbotron bg-info rounded-0 text-center">
 <h3 class=" text-white">Welcome to TOSHA HOTEL Services </h3>
  <p class="text-warning">Have a look at our facilities including rooms, conferences, swimming pools and many more</p>
 </div><!--end jumbotron-->
<div class="container">
 
  <div class="card-deck">
  @foreach($rooms as $room)
  <div class="card text-center" style="width: 18rem;">
  <img class="card-img-top img-fluid" src="{{asset('/images/products/'.$room->photo)}}" alt="Card image cap" style="height:400px;">
  <div class="card-body">
    <h5 class="card-title">{{ucfirst($room->name)}}</h5>
    <p class="card-text">{{$room->description}}</p>
    <p class="card-text">KShs.{{$room->price}}</p>
     @if(Auth::check())
              <p><a href="" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-fw fa-shopping-basket"></i>BOOK NOW</a></p>
               <!-- Add My Modal -->
<div class="modal fade" id="myModal" style="overflow: hidden;" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Book this room/facility</h4>
      </div>
      <div class="modal-body">
            <form  role="form" action="{{ url('/') }}" method="post">
              {{ csrf_field() }}
             <div class="form-group"> 
               <input type="hidden"  name="product_id"  value="{{$room->id}}"> 
               <input type="hidden"  name="customer_id"  value="  @php
            $customer=\DB::table('customers')->where('user_id',Auth::user()->id)->first();
                @endphp
               {{$customer->id}}
               "> 
             </div>
              <div class="form-group"> 
               <label for="name">No. of People</label>
               <input type="number"  name="no_people"  placeholder="Number of People" class="form-control" required=""> 
             </div> 
                <div class="form-group"> 
                   <label for="t_date">Checkin Date</label>
                   <input type="text" id="datepicker" name="checkin_date"  class="form-control input-group date" placeholder="Y-m-d" required=""> 
              </div>
                 <div class="form-group"> 
                   <label for="t_date">Check-out Date</label>
                   <input type="text" id="datepicker1" name="checkout_date"  class="form-control input-group date" placeholder="Y-m-d" required=""> 
              </div>
                   
  <button type="submit" class="btn btn-info">BOOK NOW</button>
</form>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End My Modal -->
              @else
               <p><a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-warning"><i class="fa fa-fw fa-rocket"></i>LOGIN TO BOOK</a></p>
              @endif
  </div>
</div>
@endforeach
</div><!--end card-deck-->
  </div><!--end main container-->
 @endsection

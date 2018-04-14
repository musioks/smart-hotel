@extends('includes.main')
@section('content')
<div class="jumbotron bg-info rounded-0 text-center">
 <h3 class=" text-white">Tosha Hotel Foods and Beverages </h3>
  <p class="text-warning">Browse some of our meals and make an order</p>
 </div><!--end jumbotron-->
<div class="container">
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="myModalCenter" tabindex="-1" role="dialog" aria-labelledby="myModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="card-deck">
  @foreach($meals as $meal)
  <div class="card text-center" style="width: 18rem;">
  <img class="card-img-top img-fluid" src="{{asset('/images/products/'.$meal->photo)}}" alt="Card image cap" style="height:400px;">
  <div class="card-body">
    <h5 class="card-title">{{ucfirst($meal->name)}}</h5>
    <p class="card-text">{{$meal->description}}</p>
    <p class="card-text">KShs.{{$meal->price}}</p>
     @if(Auth::check())
              <p><a href="" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-fw fa-shopping-basket"></i>BOOK NOW</a></p>
               <!-- Add My Modal -->
<div class="modal fade" id="myModal" style="overflow: hidden;" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">ORDER this Food/Beverage</h4>
      </div>
      <div class="modal-body">
         <form  role="form" action="{{ url('/meals') }}" method="post">
              {{ csrf_field() }}
             <div class="form-group"> 
               <input type="hidden"  name="product_id"  value="{{$meal->id}}"> 
               <input type="hidden"  name="customer_id"  value="  @php
            $customer=\DB::table('customers')->where('user_id',Auth::user()->id)->first();
                @endphp

               {{$customer->id}}
               "> 
                      <div class="form-group"> 
                   <label for="t_date">Checkin Date</label>
                   <input type="text" id="datepicker" name="checkin_date"  class="form-control input-group date" placeholder="Y-m-d" required=""> 
              </div>
                 <div class="form-group"> 
                   <label for="t_date">Check-out Date</label>
                   <input type="text" id="datepicker1" name="checkout_date"  class="form-control input-group date" placeholder="Y-m-d" required=""> 
              </div>
             </div>
                   
  <button type="submit" class="btn btn-success">ORDER NOW</button>
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
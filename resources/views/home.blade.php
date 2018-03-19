<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
   <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <title>Smart Joint Hotel</title>
  </head>
  <style type="text/css">
    .carousel-inner img{
      width:100%;
    }
  </style>
  <body>

 <!--beginning of navigation bar-->
      @include('nav')
      <!--end of navigation bar-->

<div class="container-fluid">

     <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{asset('images/pic11.jpg')}}" alt="...">
      <div class="carousel-caption">
        <h3 class="text-white">Serene environment for refreshment..</h3>
      </div>
    </div>
    <div class="item">
      <img src="{{asset('images/pic2.jpg')}}" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="{{asset('images/pic4.jpg')}}" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <i class="fa fa-arrow-left" aria-hidden="true"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
  <i class="fa fa-arrow-right" aria-hidden="true"></i>
    <span class="sr-only">Next</span>
  </a>
</div>
  <h3 >Welcome to Smart Joint Hotel <span class="label label-success">Please browse some of our facilities below</span></h3>
  <div class="panel panel-primary">
    <div class="panel-body">
      <div class="row">
    @foreach($rooms as $room)
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="{{asset('/images/products/'.$room->photo)}}" alt="Room" height="200" width="250" class="img-rounded">
            <div class="caption">
              <h3>{{ucfirst($room->name)}}</h3>
              <p>{{$room->description}}</p>
              <p>KShs.{{$room->price}}</p>
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
                   
  <button type="submit" class="btn btn-success">BOOK NOW</button>
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
               <p><a href="{{url('/customer')}}" class="btn btn-warning"><i class="fa fa-fw fa-rocket"></i>LOGIN TO BOOK</a></p>
              @endif
              
            </div>
          </div>
        </div>
        
  @endforeach
      </div>
    </div>
      @if(Session::has('error'))
          <div class="form-group">
            <p class="alert alert-success">{{Session::get('error')}}</p>
          </div>
          @endif
  </div>
  </div><!--end main container-->
   <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins/pace.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript">

      
      $('#datepicker1').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true,
        todayHighlight: true
      });
         $('#datepicker').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true,
        todayHighlight: true
      });
      
      $('#demoSelect').select2();
    </script>

  </body>
</html>

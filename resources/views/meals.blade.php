<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smart Joint Hotel</title>
    @include('layouts.styles')
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
<div class="container">

  <h3 >Smart Joint Hotel Meals <span class="label label-success">Browse some of our meals and make an order</span></h3>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalCenter">
  Launch demo modal
</button>

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



  <div class="panel panel-primary">
    <div class="panel-body">
      <div class="row">
    @foreach($meals as $meal)
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="{{asset('/images/products/'.$meal->photo)}}" alt="meal" height="200" width="250" class="img-rounded">
            <div class="caption">
              <h3>{{ucfirst($meal->name)}}</h3>
              <p>{{$meal->description}}</p>
              <p>KShs. {{$meal->price}}</p>
              @if(Auth::check())
              <p><a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-fw fa-pencil"></i>ORDER NOW</a></p>
              
                     <!-- Add My Modal -->
<div class="modal fade" id="myModal" style="overflow: hidden;" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">ORDER this Meal</h4>
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
               <p><a href="{{url('/customer')}}" class="btn btn-warning"><i class="fa fa-fw fa-rocket"></i>LOGIN TO ORDER</a></p>
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
   @include('layouts.scripts')
    

    <script src="{{asset('js/app.js')}}"></script>

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

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class BookingController extends Controller
{
    public function meals(){
$meals=DB::table('bookings')
   	              ->join('products','bookings.product_id','=','products.id')
   	              ->join('customers','bookings.customer_id','=','customers.id')
   	              ->join('categories','products.category_id','=','categories.id')
   	              ->select('bookings.*','products.name','products.price','categories.name as category','customers.name as customer')
   	              ->where('categories.name','like','%meals%')
                  ->where('bookings.status',1)
   	              ->get();
   	        return view('admin.meal_orders',['meals'=>$meals]);
    }
      public function rooms(){
	$rooms=DB::table('bookings')
   	              ->join('products','bookings.product_id','=','products.id')
   	              ->join('customers','bookings.customer_id','=','customers.id')
   	              ->join('categories','products.category_id','=','categories.id')
   	              ->select('bookings.*','products.name','products.price','categories.name as category','customers.name as customer')
   	              ->where('categories.name','like','%rooms%')
   	              ->where('bookings.status',1)
   	              ->get();
   	        return view('admin.booked_rooms',['rooms'=>$rooms]);
    }
    public function release(Request $request){
      //dd($request->all());
    	DB::table('bookings')
    	->where('id',$request->id)
    	->update(['status'=>0]);

    	return redirect()->back();
    }

}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	public function index(){
		return view('admin.index');
	}
	public function customers(){
		return view('admin.customers',['customers'=>DB::table('customers')->get()]);
	}
	public function generate_report(Request $request){
		
		$reports=DB::table('bookings')
   	              ->join('products','bookings.product_id','=','products.id')
   	              ->join('customers','bookings.customer_id','=','customers.id')
   	              ->join('categories','products.category_id','=','categories.id')
   	              ->select('bookings.*','products.name','products.price','categories.name as category','customers.name as customer')
   	              //->where('categories.name','like','%meals%')
   	               ->where('bookings.status',1)
   	               ->where('customers.id',$request->customer_id)
   	              ->get();
   	    $customer=$reports->pluck('customer')->first();
   	             //dd($customer);
   	            //  dd($reports);
   	              $pdf = PDF::loadView('admin.customer-report', ['customer'=>$customer,'reports'=>$reports])->setPaper('a4', 'landscape');
return $pdf->stream('customer-report.pdf');
	}
	public function delete_customer($id){
    $query = DB::table('customers')->where('id',$id);
    $query->delete();
       return redirect()->back()->with('warning','Customer has been deleted!');
	}
	public function messages(){
		return view('admin.messages',['messages'=>DB::table('messages')->get()]);
	}
	public function delete_message($id){
    $query = DB::table('messages')->where('id',$id);
    $query->delete();
       return redirect()->back()->with('warning','Message has been removed!');
	}
    //
}

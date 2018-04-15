<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class HomeController extends Controller
{
   public function index(){
      $rooms=DB::table('products')
                  ->join('categories','products.category_id','=','categories.id')
                  ->select('products.*','categories.name as category')
                  ->where('categories.name','like','%rooms%')
                  ->get();
   	return view('home',['rooms'=>$rooms]);
   }
      public function meals(){
      $meals=DB::table('products')
                  ->join('categories','products.category_id','=','categories.id')
                  ->select('products.*','categories.name as category')
                  ->where('categories.name','like','%meals%')
                  ->get();
    return view('meals',['meals'=>$meals]);
   }
   public function register(){
      return view('register');
    }
    public function customer(){
      return view('customer');
    }
    public function storeCustomer(Request $request){
        $this->validate($request,[
  'name'=>'required',
  'phone'=>'required',
  'email'=>'required|unique:users|email',
  'password'=>'required',
     ]);
     $user=new \App\User();
     $user->name=$request->name;
     $user->user_type=0;
     $user->email=$request->email;
     $user->password=bcrypt($request->password);
     $user->save();
     \App\Customer::create([
      'user_id'=>$user->id,
      'name'=>$request->name,
      'email'=>$request->email,
      'phone'=>$request->phone,
      'residence'=>$request->residence,
     ]);
     return redirect('/')->with('success',' Account has been created');
    }
    public function postRegister(Request $request){
     $this->validate($request,[
  'name'=>'required',
  'email'=>'required|unique:users|email',
  'password'=>'required',
     ]);
     $user=new \App\User();
     $user->name=$request->name;
     $user->user_type=1;
     $user->email=$request->email;
     $user->password=bcrypt($request->password);
     $user->save();
     return redirect('/customer')->with('success',' Account has been created');
    }
  public function login(){
   	return view('welcome');
   }
   public function signin(Request $request){
   	//dd($request->all());
   	$this->validate($request,[
  'email'=>'required',
  'password'=>'required',
   	]);
   	if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed...
   		$user=Auth::user();
   		if($user->user_type==1){
            return redirect('/admin');
        }
        else{
        	return redirect('/');
        }
   		}
    return redirect()->back()->with('error','Login not successful!');
   }
   public function getLogout(){
   Auth::logout();
   return redirect('/');
   }
      public function message(){
      return view('welcome');
    }
    public function storeMessage(Request $request){
        $this->validate($request,[
  'name'=>'required',
  'email'=>'required',
  'subject'=>'required',
  'body'=>'required',
     ]);
    \App\Message::create(array_merge($request->all()));
     return redirect()->back()->with('success',' Message has been send!');
    }
      public function bookMeal(Request $request){
 
    \App\Booking::create(array_merge($request->all()));
     return redirect()->back()->with('success',' Meal has been ordered successfully!');
    }
      public function bookRoom(Request $request){
  $status=DB::table('bookings')->where('product_id',$request->product_id)->latest()->first();
  if(collect($status)->isEmpty()){
\App\Booking::create(array_merge($request->all()));
    return redirect()->back()->with('success','You have booked the room successfully!');
  }
    else{
  if($status->status==1){
     return redirect()->back()->with('warning',' Room has already been booked!');
  }
  else{
    \App\Booking::create(array_merge($request->all()));
    return redirect()->back()->with('success','You have booked the room successfully!');
}
  }  
}
    
}

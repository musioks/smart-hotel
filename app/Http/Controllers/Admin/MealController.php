<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Product;
class MealController extends Controller
{
   public function index(){
   	$meals=DB::table('products')
   	              ->join('categories','products.category_id','=','categories.id')
   	              ->select('products.*','categories.name as category')
   	              ->where('categories.name','like','%meals%')
   	              ->get();
   	        return view('admin.meals',['meals'=>$meals]);
   }
   public function store(Request $request){
   	//dd($request->all());
          $meal = Product::create(array_merge($request->all()));
if ($request->hasFile('photo')) {
      $file=$request->file('photo');
        $fileName= time().'.'.$file->getClientOriginalExtension();
        $request->photo->move('images/products/',$fileName);
        $meal->update(['photo' => $fileName]);
}
return redirect()->back()->with('message','Data has been submitted successfully!');
   }
}

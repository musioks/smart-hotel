<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Product;
class RoomController extends Controller
{
     public function index(){
   	$rooms=DB::table('products')
   	              ->join('categories','products.category_id','=','categories.id')
   	              ->select('products.*','categories.name as category')
   	              ->where('categories.name','like','%rooms%')
   	              ->get();
   	        return view('admin.rooms',['rooms'=>$rooms]);
   }
   public function store(Request $request){
   	//dd($request->all());
          $room = Product::create(array_merge($request->all()));
if ($request->hasFile('photo')) {
      $file=$request->file('photo');
        $fileName= time().'.'.$file->getClientOriginalExtension();
        $request->photo->move('images/products/',$fileName);
        $room->update(['photo' => $fileName]);
}
return redirect()->back()->with('message','Data has been submitted successfully!');
   }
    public function destroy($id){
    $query = DB::table('products')->where('id',$id);
    $query->delete();
       return redirect()->back()->with('warning','Room has been removed!');
   }
   public function update(Request $request){
   //dd($request->all());
   $id=$request->id;
    $room=Product::find($id);
    $room->update(array_merge($request->all()));
if ($request->hasFile('photo')) {
      $file=$request->file('photo');
        $fileName= time().'.'.$file->getClientOriginalExtension();
        $request->photo->move('images/products/',$fileName);
        $room->update(['photo' => $fileName]);
}
    return redirect()->back()->with('info','Room/Facility info has been updated!');
    }
   
}

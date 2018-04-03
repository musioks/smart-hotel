<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	public function index(){
		return view('admin.index');
	}
	public function customers(){
		return view('admin.customers',['customers'=>DB::table('customers')->get()]);
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

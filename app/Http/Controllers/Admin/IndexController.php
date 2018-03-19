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
	public function messages(){
		return view('admin.messages',['messages'=>DB::table('messages')->get()]);
	}
    //
}

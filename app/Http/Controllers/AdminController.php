<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class AdminController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    // $data['user'] = \App\User::paginate(10);
    $data['user'] = \App\User::Where('role','1')->paginate(10);
    return view('blog.admin')->with($data);
  }

  public function activate($id){
  	  	
  	$a = \App\User::find($id);
    $a->role = 3;
    $a->save();
    
    return redirect(url('admin'));

  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

  public function delete($id)
  {
    $a = \App\User::find($id);
    $a->delete();
    
    return redirect(url('admin'));
  }

    public function activate($id)
  {
    $a = \App\User::find($id);
    $a->status=true;
    $a->save();
    
    return redirect(url('admin'));
  }


}

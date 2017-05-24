<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class DetailController extends Controller
{

  public function index()
  {
    // if (Auth::user()->role == 1)
    // {
    //   return Redirect('/artikel');
    // }else {
    //     return Redirect('/admin');
    // }
    $data['artikel'] = \App\Artikel::paginate(30);
    return view('blog.home')->with($data);
  }
  public function detail($id)
  {
    $data['artikel'] = \App\Artikel::whereSlug($id)->first();
    $data['komentar']=\App\Komentar::whereIdArtikel($data['artikel']->id)->get();
    return view('blog.detail')->with($data);
  }
  public function access()
  {
    return view('blog.access');
  }
}

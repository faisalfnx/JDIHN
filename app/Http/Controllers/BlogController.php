<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Auth;
use PDF;

class BlogController extends Controller
{


  public function __construct()
  {
    $this->middleware('auth');
  }

  public function komentar()
   {
       $a = new \App\Komentar;
       $a->id_user = Auth::user()->id;
       $a->isi = Input::get('isi');
       $a->id_artikel = Input::get('id_artikel');
       $a->save();
       $key = \App\Artikel::find(Input::get('id_artikel'));
       return redirect(url($key->slug));

 }
  public function hapuskomentar()
  {
    $a = \App\Komentar::find($id);
    $key = \App\Artikel::find(Input::get('id_artikel'));
    $a->delete();
    return redirect(url($key->slug));
  }
  public function pdf($id)
  {
    $data['artikel'] = \App\Artikel::whereSlug($id)->first();
    $pdf = PDF::loadview('blog.pdf', $data);
    return $pdf->stream();
  }
  // public function pdf_download($id)
  // {
  //   $data['artikel'] = \App\Artikel::whereSlug($id)->first();
  //   $pdf = PDF::loadview('blog.pdf', $data);
  //   	return $pdf->download($data['artikel']->judul.".pdf");
  // }

}

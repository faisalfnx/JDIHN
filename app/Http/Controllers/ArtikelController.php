<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Auth;

class ArtikelController extends Controller
{

      public function __construct()
      {
          $this->middleware('auth');
      }

    public function index()
    {
     $data['artikel'] = \App\Artikel::where('id_user', Auth::user()->id)->paginate(10);
      return view('artikel.all')->with($data);
    }

    public function add()
    {
      return view('artikel.add');
    }

    public function save()
    {
      $a = new \App\Artikel;
      $a->slug = str_slug(Input::get('judul'));
      $a->judul = Input::get('judul');
      $a->isi = Input::get('isi');
      $a->id_user = Auth::user()->id;
      $a->sampul = '';
      if(Input::hasFile('sampul')){
        $sampul = date('YmdHis').uniqid().".".
        Input::file('sampul')->getClientOriginalExtension();
          Input::file('sampul')->move(storage_path()."/sampul",
          $sampul);
          $a->sampul = $sampul;
      }
      $a->save();

      return redirect(url('artikel'));
    }
    public function edit($id)
    {
      $data['artikel'] = \App\Artikel::find($id);
      return view('artikel.edit')->with($data);
    }

    public function search(Request $request)
    {
      $query = $request->get('q');
      $hasil = \App\Artikel::where('judul', 'LIKE','%' . $query . '%')->paginate(6);
      return view('result', compact('hasil', 'search'));
      return view('menu', compact('hasil','search'));
    }

    public function update()
    {
      $a = \App\Artikel::find(Input::get('id'));
      $a->slug = str_slug(Input::get('judul'));
      $a->judul = Input::get('judul');
      $a->isi = Input::get('isi');
      if(Input::hasFile('sampul')){
        $sampul = date('YmdHis').uniqid().".".
        Input::file('sampul')->getClientOriginalExtension();
          Input::file('sampul')->move(storage_path()."/sampul",
          $sampul);
          $a->sampul = $sampul;
      }
      $a->save();

      return redirect(url('artikel'));
    }
    public function delete($id)
    {
      $a = \App\Artikel::find($id);
      $a->delete();

      return redirect(url('artikel'));
    }
}

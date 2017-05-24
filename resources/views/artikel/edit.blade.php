@extends('app')

@section('header')

<title>Laravel &raquo; Artikel &raquo; Add </title>
@endsection

@section('content')
  <div class="row">
  <form class="col s12" method="POST" action="{{url('artikel/update')}}" enctype="multipart/form-data">
  <div class="input-field col s12">
    <input id="judul" type="text" class="validate" name="judul" value="{{$artikel->judul}}">
    <label for="judul">Title</label>
  </div>
  <div class="input-field col s12">
    <textarea id="isi" type="text" class="materialize-textarea" name="isi">{{$artikel->isi}}</textarea>
  <label for="isi">Content</label>
</div>
<div class="file-field input-field col s12">
  <div class="btn #0d47a1 blue darken-4">
    <span>Image</span>
      <input name="sampul" type="file">
    </div>
    <div class="file-path-wrapper">
      <input class="file-path validate" type="text">
    </div>
  </div>
</div>

<div class="right">
    <button type="submit" class="btn #0d47a1 blue darken-4">Save</button>
  </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}">

      <input type="hidden" name="id" value="{{$artikel->id}}">
  </form>
</div>
@endsection

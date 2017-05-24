@extends('app')

@section('header')

	<title>Laravel &raquo; Blog</title>

	@endsection

	@section('content')
		<!-- <center>
      <h3>Forum Diskusi JDIHN</h3></center>  -->

  <div class="row">
      @foreach($artikel as $key)


      <div class="col s4 m4">
          <div class="card">
						<div class="card-content">
				 <img style="width:100%" src="{{url('images/'.$key->sampul)}}">
							<span class ="card-title"><b>{{$key->judul}}</span></b>
							<hr>
							<p>{{substr(strip_tags($key->isi),0,25)}} ...</p>

							<br>
						<div class="right">
							Posted by {{\App\User::find($key->id_user)['name']}} at {{$key->created_at->format('D, F jS Y \a\t h:i a')}}</div>
						</div>
							<br>
							<form action="{{url('/'.$key->slug)}}">
	          <div class="card-action"><!--
					<a href="{{url('/'.$key->slug)}}">Read More</a> -->
					<button class="btn" style="width: 100%;">Read More</button>
					</form>
						</div>
          </div>
      </div>
      @endforeach
  </div>
  <center>
    <ul class="pagination">
    <li>{{$artikel->render()}}</li>
  </ul>


  @endsection

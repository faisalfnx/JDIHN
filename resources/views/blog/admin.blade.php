@extends('app')

@section('header')

	<title>Forum Diskusi JDHIN &raquo; Artikel &raquo; All</title>

	@endsection

	@section('content')
	<br>
	<h5>Data User</h5>
		<table>
			<thread>
				<tr>
					<th>Nama</th>
					<th>Email</th>
					<th colspan="2">Action</th>

					</tr>

				</thread>

				<tbody>

					@foreach($user as $key)
					<tr>						
						<td>{{$key->name}}</td>
						<td>{{$key->email}}</td>

						<td><form action="{{url('user/activate/'.$key->id)}}" method="post">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<button class="waves-effect waves-light btn" type="submit">Setuju</button>
						</form>
						</td>						
						
						<form>
						<td><a href="{{url('user/delete/'.$key->id)}}" onclick="return confirm('Are you sure to not give permission {{$key->judul}}?')">
						Tidak Setuju
						</a></td>
						</form>
						</tr>
						@endforeach
						
				</tbody>
				</table>

				@endsection

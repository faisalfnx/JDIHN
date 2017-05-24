                <li><a href="{{url('/artikel')}}">Create Artikel</a></li>
                        <li><a href="{{url('/about')}}">About</a></li>
			
			<li>

			<form method="GET" action="{{ url('search')}}"> 
          <input name="q" type="text" required placeholder="Search">
        </form>
          </li>

                        @if(!Auth::check())
                            <li><a href="{{url('/login')}}">Login</a></li>
                            <li><a href="{{url('/register')}}">Register</a></li>
                            @else
                                <li><a href="{{url('/logout')}}">Logout</a></li>
                                @endif

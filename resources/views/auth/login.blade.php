@extends('app')
<title>Login</title>
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            @if(session('warning'))

            <div class="alert alert-warning"> {{session('warning')}} </div>
                @endif
              <br>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                <!-- <input type="hidden" class="form-control" name="status" value="true"> -->

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                  <?php /**  <label>
                                          <input type="checkbox" name="remember"> Remember Me
                                    </label> **/?>
                                </div>
                            </div>
                        </div>

                    <p>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary #0d47a1 blue darken-4">
                                    Login
                                </button>

                                <a class="btn btn-link #0d47a1 blue darken-4" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>

                            </div>
                            

                </div>
            </div>
        </div>
    </div>
</div>
<!--                           <form action="{{url('/register')}}">
                        <button class="btn btn-link #0d47a1 blue darken-4" style="width: 55%;">Register</button>
                        </form>
                        </div>
                    </form> -->
@endsection


<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="{{url('materialize/css/materialize.min.css')}}"  media="screen,projection"/>
  <style type="text/css">
    .logo {
      padding-top:10px;
      height: 40px;
    }
  </style>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

  @yield('header')
  <nav class="#0d47a1 blue darken-4" role="navigation">
    <div class="nav-wrapper">
      <div class="container">
        <!--  <a href="#!" class="brand-logo">Logo</a> -->
        <a href="{{url('/')}}" class="brand-logo"><img class="logo" src="{{url('images/images.jpg')}}">&nbsp;Forum Diskusi JDIHN</a>
        <a href="{{url('/')}}" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          @include('menu')
        </ul>a
        <ul class="side-nav" id="mobile-demo">
          @include('menu')
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <br>

    @yield('content')
  </div>


  <!--Import jQuery before materialize.js-->
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="{{url('materialize/js/jquery-3.1.0.min.js')}}"></script>
  <script type="text/javascript" src="{{url('materialize/js/materialize.min.js')}}"></script>

  <script type="text/javascript">
  $(document).ready(function(){
    $(".button-collapse").sideNav();
  });
  </script>

</body>
</html>

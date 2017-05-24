
    <title>laravel</title>

  </head>
  <body>
    <div class='container'>
    <table class="table">

     <tr>
       <th>Id</th>
       <th>Judul</th>
       <th>Pengarang</th>
     </tr>
       	@foreach($artikel as $key)
        <tr>
          <td>{{$key->judul}}</td>
          <td>{{$key->isi}}</td>
          <td>{{$key->id_user}}</td>
          <td>{{$key->created_at}}</td>
        </tr>
    @endforeach
    </table>

  </div>
   </body>

  </body>

</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PDF</title>
  </head>
  <body>
    <h3>{{$artikel->judul}}</h3>
    <img style="width:100%" src="{{storage_path('sampul/'.$artikel->sampul)}}"/>
    <p>{{$artikel->isi}}</p>
  </body>
</html>

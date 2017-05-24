<?php

//Auth::routes();
Route::auth();

Route::get('/images/{filename}', function ($filename)
{
  $path = storage_path('sampul') . '/' . $filename;
  $file = File::get($path);
  $type = File::mimeType($path);
  $response = Response::make($file);
  $response->header("Content-Type", $type);
  return $response;
});

Route::get('/', 'DetailController@index');
Route::get('logout', function()
{
    Auth::logout();
    return redirect(url('/'));
});
Route::get('admin','AdminController@index');
Route::post('user/activate/{id}','AdminController@activate');
Route::get('user/delete/{id}','UserController@delete');
Route::get('wait','DetailController@access');
Route::get('artikel','ArtikelController@index');
Route::get('artikel/add','ArtikelController@add');
Route::post('artikel/save','ArtikelController@save');
Route::get('artikel/edit/{id}','ArtikelController@edit');
Route::post('artikel/update','ArtikelController@update');
Route::get('artikel/delete/{id}','ArtikelController@delete');
Route::get('siswa','KomentarController@index');
Route::get('search' ,'ArtikelController@search');
Route::get('about', function()
{
  return view('about');
});
Route::get('tes','ArtikelController@index2');
Route::get('artikel/edit', function()
{
    return redirect(url('artikel'));
});
Route::get('blog','DetailController@index');
Route::get('{id}','DetailController@detail');
Route::post('komentar','BlogController@komentar');
Route::delete('komentar','BlogController@hapuskomentar');
Route::get('{id}/pdf','BlogController@pdf');

Route::group(['middleware' => 'admin'], function(){
  Route::get('admin','AdminController@index');
});

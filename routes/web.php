<?php

use Illuminate\Support\Facades\Routes;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/',function(){
//   return view('welcome'); 
// });

Route::get('/','PostController@index');
Route::get('/posts/{post}', 'PostController@show');

// {}で囲んだ部分が動的に変更される部分．
// Laravelの機能diを利用するため，idではなく，postと記載している．
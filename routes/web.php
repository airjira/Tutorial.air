<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/',function(){
//  if(DB::connection()->getDatabaseName())
//  {
//  return "Yes! successfully connected to the DB: " . DB::connection()->getDatabaseName();
//  }else{
//  return 'Connection False !!';
//  }
 
// });
Route::resource('admin/posts', 'Admin\\PostsController');
Route::get('/landing','LandingPageController@getIndex')->name('landing');

Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');
Route::get('/', 'LandingPageController@getName')->name('getName');


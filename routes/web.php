<?php
use DanielsEliteEngineering\About;
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

Route::get('/', function () {
	$prose = About::all();
    return view('welcome',compact('prose'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('about','AboutController');
Route::get('about.edit',['as'=>'about.edit','uses'=>'AboutController@edit']);
Route::get('about.create',['as'=>'about.create','uses'=>'AboutController@create']);
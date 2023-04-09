<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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
    return view('welcome');
});
Route::get('/logout', function () {
    if(session()->has('user'))
    {
        session()->pull('user');
    }else  if(session()->has('id'))
    {
        session()->pull('id');
    }
    return view('index');
});
Route::get('/login', function () {
    if(session()->has('user')||session()->has('id'))
    {
        return redirect('index'); 
    }
    return view('login');
});
Route::get('/login1', function () {
    if(session()->has('id') || session()->has('user'))
    {
        return redirect('index'); 
    }
    return view('login1');
});

//Route::get('/login1', 'App\Http\Controllers\UserController@login1');
Route::post('/login1', 'App\Http\Controllers\UserController@match1');
Route::get('/index','App\Http\Controllers\UserController@index');
//Route::get('/login', 'App\Http\Controllers\UserController@login');
Route::post('/login', 'App\Http\Controllers\UserController@match');
Route::get('/register','App\Http\Controllers\UserController@r1');
Route::post('/register','App\Http\Controllers\UserController@register');
Route::get('/ap','App\Http\Controllers\UserController@apshow');
Route::post('/ap','App\Http\Controllers\UserController@ap');
Route::get('/find','App\Http\Controllers\UserController@showlist');
Route::post('/find','App\Http\Controllers\UserController@find');
Route::get('/showdoc','App\Http\Controllers\UserController@showdoc');
Route::get('/viewappointment','App\Http\Controllers\UserController@viewapp');
Route::post('/viewappointment','App\Http\Controllers\UserController@viewappointment');
Route::get('/showppointment2','App\Http\Controllers\UserController@viewapp2');
Route::get('/lab','App\Http\Controllers\UserController@labshow');
Route::post('/lab','App\Http\Controllers\UserController@lab');
Route::get('/view','App\Http\Controllers\UserController@viewdoc');
Route::post('/view','App\Http\Controllers\UserController@view');
Route::get('/delete', 'App\Http\Controllers\UserController@deleteFish')->name('delete');
Route::get('/edit', 'App\Http\Controllers\UserController@viewupdate');
Route::post('/update', 'App\Http\Controllers\UserController@update');
Route::get('/fetch-nurse', 'App\Http\Controllers\UserController@fetchNurse');
Route::get('/nurse', 'App\Http\Controllers\UserController@nurse');
Route::post('/nurses', 'App\Http\Controllers\UserController@store');
Route::get('/cov', 'App\Http\Controllers\UserController@cov');
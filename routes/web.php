<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\TodoController@home')->name('home');

Route::get ('/about-us',function(){
    return view('about',['title'=>'About Us']);
});
Route::post('/store',"App\Http\Controllers\TodoController@store")->name('store');

Route::get ('/update',function(){
    return view('update');
});

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('user/{id}', 'UserController@show');
Route::get('/login','authenticate@login');
Route::get('/register','authenticate@register');
Route::get('/loginsubmit','authenticate@loginsubmit');
Route::get('/registersubmit','authenticate@registersubmit');
Route::get('home',function()
{
    echo "home page";
})->middleware('usermiddleware');

Route::get('/viewdata','authenticate@viewdata');
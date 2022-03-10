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

//Route::get('/home', function () {
 // return view('welcome');/});
Route::get('/', "StudentController@index");
Route::get('/add', "StudentController@add");
Route::post('/addstudent', "StudentController@addstudent");
Route::get('/delete/{id}', "StudentController@delete");
Route::get('/show/{id}', "StudentController@show");




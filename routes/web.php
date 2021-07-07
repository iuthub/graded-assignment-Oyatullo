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


Route::get('/','ToDoListController@getHome');
Route::get('/register','ToDoListController@postRegister');
Route::get('/signin','ToDoListController@signIn');

Route::get('/home',  'ToDoListController@getHome')->name('getRegister');

Route::get('/signin',function (){

});

/*Route::post('/home', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);



//Route::post('/','ToDoListController@postRegister');
//Route::get('/','ToDoListController@getShow');
//Route::get('/','ToDoListController@getDelete');
//Route::get('/','ToDoListController@postDelete');


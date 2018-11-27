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

// Route::get('/item/{code}', function ($code) {
//     return view('item',compact('code'));
// });
//Route::get('/{code}','ItemController@index');
//Route::get('/personal/{id}','PersonalController@getPersonalInfo');
Route::get('/list','ItemController@getList');
//Route::get('/bookList/{aaa}','BookController@getBookList');
Route::get('/setting/{uid}','SettingController@getList');
Route::get('/setting/{uid}/{name}','SettingController@getListByName');
Route::get('/setting','SettingController@insert');
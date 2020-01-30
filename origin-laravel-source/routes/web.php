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

Route::get("/hello", function(){
    return "<html><body>Hello world!</body></html>";
});

/**
 * {path name}で、URIのパスを動的に設定できる
 * 基本、パスは必須であり、nullableとするには?を付与する
 * {id}←idは必須、ないと404としてルーティングされない
 * {path?}←pathはに必須でない
 */
Route::get("/helloController/{id}/{pass?}", "SampleController@index");

Route::get("/multi", "MultiHandlerController@first");
Route::get("/multi/{path}", "MultiHandlerController@second");

Route::get("/request", "RequestController@index");

Route::get("/layout", "SampleController@view");
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

Route::get('hello',function () {
    return 'cacacac';
});
Route::get('getForm', function () {
    return view('postForm');
});

Route::post('postForm',[ 'as'=>'postForm','uses'=>'nhansu@postForm']);

//cookie
Route::get('setCookie','nhansu@setCookie');
Route::get('getCookie','nhansu@getCookie');

//view
Route::get('myView','nhansu@myView');

Route::geT('time/{t}','nhansu@Time');

View::share('NhanSu','Nhân sự đây');

Route::get('blade',function(){
    return view('pages.laravel');
});
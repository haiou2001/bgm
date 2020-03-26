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
    return view('index');
});
Route::get('live/index','live\IndexController@index');//��½��ͼ


Route::get('live/reg','live\LiveController@reg');//ע����ͼ
Route::post('live/reg_do','live\LiveController@reg_do');//ע��
Route::get('live/login','live\LiveController@login');//��½��ͼ
Route::post('live/login_do','live\LiveController@login_do');//��½�阿萨德
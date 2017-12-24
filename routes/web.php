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

//后台管理路由组
Route::group(['prefix'=>'admin', 'namespace'=>'Admin'], function () {
    //后台首页
    Route::get('index', 'IndexController@index');
    Route::get('index/show', 'IndexController@show');
    //视频管理
    Route::get('video/index', 'VideoController@index');
    Route::get('video/add', 'VideoController@add');
    Route::get('video/edit', 'VideoController@edit');
    //栏目管理
    Route::get('channel/index', 'ChannelController@index');
    //类型管理
    Route::get('mcat/index', 'McatController@index');
});

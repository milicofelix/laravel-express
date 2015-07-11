<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin/posts'],function(){
    Route::get('index',['as'=>'admin.posts.index','uses'=>'PostAdminController@index']);
    Route::get('create',['as'=>'admin.posts.create','uses'=>'PostAdminController@create']);
    Route::post('store',['as'=>'admin.posts.store','uses'=>'PostAdminController@store']);
    Route::get('edit/{id}',['as'=>'admin.posts.edit','uses'=>'PostAdminController@edit']);
    Route::put('update/{id}',['as'=>'admin.posts.update','uses'=>'PostAdminController@update']);
    Route::get('remove/{id}',['as'=>'admin.posts.remove','uses'=>'PostAdminController@remove']);
});

Route::get('ola/{nome}','TestController@index');
Route::get('notas','TestController@notas');
Route::get('blog','BlogController@index');
Route::get('posts','PostsController@index');
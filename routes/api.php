<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('user', 'UserController@showUser');
Route::post('user', 'UserController@saveUser');
Route::put('user', 'UserController@updateUser');
Route::delete('user{id}', 'UserController@deleteUser');
Route::post('articles', 'ArticleController@saveArticle');
Route::get('articles/{title}', 'ArticleController@showArticle');
Route::put('articles/', 'ArticleController@updateArticle');
Route::get('articles', 'ArticleController@showAll');
Route::delete('articles/{id}', 'ArticleController@deleteArticle');



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

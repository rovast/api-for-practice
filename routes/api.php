<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Api'], function () {
    // 获取文章列表
    Route::get('articles', 'ArticleController@index');

    // 获取分类列表
    Route::get('categories', 'CategoryController@index');

    // 标签列表
    Route::get('tags', 'TagController@index');
});

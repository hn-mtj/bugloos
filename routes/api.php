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

//$this->middleware(['auth:api','authorize'])->group(function() {
    $this->namespace('Post')->group(function () {

        $this->get('post', 'postController@index');
        $this->get('post/show', 'postController@show');
        $this->post('post', 'postController@store');
        $this->patch('post/{id}', 'postController@update');
        $this->get('post/delete', 'postController@destroy');

    });

    $this->namespace('Post')->group(function () {

        $this->get('category', 'CategoryController@index');
        $this->get('category/show', 'CategoryController@show');
        $this->post('category', 'CategoryController@store');
        $this->patch('category/{id}', 'CategoryController@update');
        $this->get('category/delete', 'CategoryController@destroy');

    });
//});

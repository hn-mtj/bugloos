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


$this->namespace('Post')->group(function() {
    $this->get('post', 'postController@index');
    $this->post('post', 'postController@store');
    $this->get('post/{id}', 'postController@edit');
    $this->patch('post/{id}', 'postController@update');
    $this->delete('post/{id}', 'postController@destroy');

});

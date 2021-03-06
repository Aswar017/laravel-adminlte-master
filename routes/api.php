<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/product')->name('api.product')->uses('ProductController@datatables');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// <a href="/questionnaires/create" class="btn btn-primary">create new question</a>
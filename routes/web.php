<?php

use Illuminate\Support\Facades\Route;

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
    return view('product/index');
});

 Route::get('/')->name('home.index')->uses('HomeController@index');

 Route::get('questionnaires/create', 'QuestionnaireController@create');
 Route::post('questionnaires', 'QuestionnaireController@store');
 Route::get('questionnaires/{questionnaire}','QuestionnaireController@show' );

 Route::get('questionnaires/{questionnaire}/questions/create', 'QuestionController@create');
 Route::post('questionnaires/{questionnaire}/questions', 'QuestionController@store');

 Route::get('surveys/{questionnaire}-{slug}', 'SurveyController@show');

Route::get('/product')->name('product.index')->uses('ProductController@index');
Route::get('/yajra')->name('yajra.index')->uses('ProductController@datatablesIndex');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

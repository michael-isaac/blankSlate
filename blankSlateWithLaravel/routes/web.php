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

Route::get('/', 'HomeController@index');


Route::get('/recipes', 'RecipeController@index');

Route::get('/recipes/create', 'RecipeController@create');

Route::get('/recipes/{id}', 'RecipeController@show');

Route::post('/recipes', 'RecipeController@store');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/meals/addToCart', 'MealController@store');



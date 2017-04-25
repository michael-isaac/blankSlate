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


Route::get('/Laravel', function () {
    return view('welcome');
});


Route::get('/meals', function () {
    
    $recipes = DB::table('Recipes')->get();

    return view('meals.index', compact('recipes'));
});


Route::get('/meals/{id}', function ($id) {
    
    $recipe = DB::table('Recipes')->find($id);

    //return $recipe;
    return view('meals/show', compact('recipe'));
});
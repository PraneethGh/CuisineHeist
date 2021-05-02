<?php

use Illuminate\Support\Facades\Route;
use App\Recipe;


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
    $recipes=Recipe::all();
    return view('welcome',['recipes'=>$recipes]);
});

//Route::get('/food','RecipeController@index');

Route::get('/food/create','RecipeController@create');

Route::get('/food/{id}','RecipeController@show'); 

Route::post('/food','RecipeController@store');

Route::get('/new-login','RecipeController@log');

Route::get('/new-register','RecipeController@reg');

Route::get('/help','RecipeController@help');

Route::get('/profile','RecipeController@prof');

Route::get('/new-forget',function(){
    return view('newForget');
});
Route::get('/add/{id}','FavouriteController@add');
Route::post('/','RecipeController@uploadrecipe');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
    return view('main');
});
Route::get('catalog', function () {
    return view('catalog');
});
Route::get('product', function () {
    return view('product');
});
Route::get('articles', 'ArticlesController@allArticles');
Route::get('reviews', function () {
    return view('reviews');
});
Route::get('news', function () {
    return view('news');
});
Route::get('login', function () {
    return view('login');
});
Route::get('register', function () {
    return view('register');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'HomeController@profile')->name('profile');

Route::get('/myArticles', 'ArticlesController@index')->name('myArticles');

Route::get('/myArticles/create', 'ArticlesController@create')->name('createArticles');

Route::get('/myArticles/{id}', 'ArticlesController@edit');

Route::patch('/myArticles/{id}', 'ArticlesController@update');

Route::delete('/myArticles/{id}', 'ArticlesController@delete');

Route::post('/articles', 'ArticlesController@store');

Route::get('/favorites', 'HomeController@favorites')->name('favorites');

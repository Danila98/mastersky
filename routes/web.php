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

Route::get('/', 'GuestController@main');
Route::get('catalog', 'GuestController@allProduct');
Route::get('product/{id}', 'GuestController@oneProduct');
Route::get('articles', 'GuestController@allArticles');
Route::get('article/{id}', 'GuestController@oneArticles');
Route::get('reviews', function () {
    return view('reviews');
});
Route::get('new/{id}', 'GuestController@oneNews');
Route::get('login', function () {
    return view('login');
});
Route::get('register', function () {
    return view('register');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', function()
{
    Auth::logout();

    return redirect('/');
});

Route::get('/profile', 'HomeController@profile')->name('profile');

Route::post('/user/{id}', 'HomeController@update')->name('profileUpdate');

Route::get('/favorites', 'HomeController@favorites')->name('favorites');

//Статьи

Route::get('/myArticles', 'ArticlesController@index')->name('myArticles');

Route::get('/myArticles/create', 'ArticlesController@create')->name('createArticles');

Route::get('/myArticles/{id}', 'ArticlesController@edit');

Route::patch('/myArticles/{id}', 'ArticlesController@update');

Route::delete('/myArticles/{id}', 'ArticlesController@delete');

Route::post('/articles', 'ArticlesController@store');

//Категории статей

Route::get('/categoriesArticle', 'CategoriesArticleController@index')->name('categoriesArticle');

Route::get('/categoriesArticle/create', 'CategoriesArticleController@create')->name('categoriesArticle');

Route::get('/categoriesArticle/{id}', 'CategoriesArticleController@edit');

Route::patch('/categoriesArticle/{id}', 'CategoriesArticleController@update');

Route::delete('/categoriesArticle/{id}', 'CategoriesArticleController@delete');

Route::post('/createCategoriesArticle', 'CategoriesArticleController@store');

//Категории продуктов

Route::get('/categoriesProduct', 'CategoriesProductController@index')->name('categoriesProduct');

Route::get('/categoriesProduct/create', 'CategoriesProductController@create')->name('categoriesProduct');

Route::get('/categoriesProduct/{id}', 'CategoriesProductController@edit');

Route::patch('/categoriesProduct/{id}', 'CategoriesProductController@update');

Route::delete('/categoriesProduct/{id}', 'CategoriesProducteController@delete');

Route::post('/createCategoriesProduct', 'CategoriesProductController@store');

//Продукция

Route::get('/products', 'ProductsController@index')->name('products');

Route::get('/products/create', 'ProductsController@create');

Route::get('/products/{id}', 'ProductsController@edit');

Route::patch('/products/{id}', 'ProductsController@update');

Route::delete('/products/{id}', 'ProductsController@delete');

Route::post('/products', 'ProductsController@store');

//Новости

Route::get('/news', 'NewsController@index')->name('news');

Route::get('/news/create', 'NewsController@create');

Route::get('/news/edit/{id}', 'NewsController@edit');

Route::patch('/news/{id}', 'NewsController@update');

Route::delete('/news/{id}', 'NewsController@delete');

Route::post('/news', 'NewsController@store');
//

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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



Route::get('/','PagesController@index');
Route::get('about','PagesController@about');

Route::get('blog', 'PostsController@index')->name('blog');
Route::get('blog/{slug}', 'PostsController@show')->name('blog.show');
Route::get('blog/categoria/{category_id}', 'PostsController@categorie')->name('blog.categorie');
Route::get('blog/autore/{author_id}', 'PostsController@xautore')->name('blog.perautore');
Route::get('portfolio','PagesController@portfolio');
Route::get('contact','PagesController@contact');
Route::get('services','PagesController@services');
// Route::get('/', 'PagesController@index')->name('home');
// Route::get('/home', 'PagesController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

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





Route::get('/','PagesController@index')->name('home');
Route::get('about','PagesController@about')->name('about');

Route::get('blog', 'PostsController@index')->name('blog');
Route::get('blog/{slug}', 'PostsController@show')->name('blog.show');
Route::get('blog/categoria/{category_id}', 'PostsController@categorie')->name('blog.categorie');
Route::get('blog/autore/{author_id}', 'PostsController@xautore')->name('blog.perautore');
Route::get('portfolio','PagesController@portfolio')->name('portfolio');
Route::get('contact','PagesController@contact')->name('contatti');
Route::get('services','PagesController@services')->name('servizi');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('{slug}', 'PagesController@show');
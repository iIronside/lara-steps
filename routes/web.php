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

Route::get('/', 'MainController@index')->name('main.index');

Route::group(['namespace' => 'Post'], function () {
    Route::get('/post', 'IndexController')->name('post.index');
    Route::get('/post/create', 'CreateController')->name('post.create');
    Route::post('/post', 'StoreController')->name('post.store');
    Route::get('/post/{post}', 'ShowController')->name('post.show');
    Route::get('/post/{post}/edit', 'EditController')->name('post.edit');
    Route::patch('/post/{post}', 'UpdateController')->name('post.update');
    Route::delete('/post/{post}', 'DestroyController')->name('post.destroy');
});



Route::prefix('news')->group(function () {
    Route::get('/', 'NewsController@index')->name('news.index');
    Route::get('/create', 'NewsController@create')->name('news.create');
    Route::post('/', 'NewsController@store')->name('news.store');
    Route::get('/{news}', 'NewsController@show')->name('news.show');
    Route::get('/{news}/edit', 'NewsController@edit')->name('news.edit');
    Route::patch('/{news}', 'NewsController@update')->name('news.update');
    Route::delete('/{news}', 'NewsController@destroy')->name('news.destroy');
});

Route::prefix('tags')->group(function () {
    Route::get('/', 'TagsController@index')->name('tags.index');
    Route::get('/create', 'TagsController@create')->name('tags.create');
    Route::post('/store', 'TagsController@store')->name('tags.store');
    Route::get('/{tag}', 'TagsController@show')->name('tags.show');
    Route::get('/{tag}/edit', 'TagsController@edit')->name('tags.edit');

    Route::patch('/{tag}', 'TagsController@update')->name('tags.update');

    Route::delete('/{tag}', 'TagsController@destroy')->name('tags.destroy');
});











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

Route::get('/', 'BookController@index')->name('book.index');
Route::get('/book/{book}', 'BookController@show')->name('book.show');

Route::get('/order/{book}', 'OrderController@show')->name('order.show');
Route::post('/order/{bookId}', 'OrderController@store')->name('order.store');

Route::post('/review/{bookId}', 'ReviewController@store')->name('review.store');


Route::prefix('admin')
    ->name('admin.')
    ->namespace('Admin')
    ->group(function () {
        Route::resource('/book', 'BooksController');
        Route::resource('/review', 'ReviewController',  ['only' => [
            'edit', 'update' ,'destroy'
        ]]);

        Route::get('order', 'OrdersController@index')->name('order.index');
        Route::get('order/{order}/update', 'OrdersController@update')->name('order.update');
    });


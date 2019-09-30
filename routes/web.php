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
    return view('welcome');
});

Route::get('export', 'ExcelController@export')->name('export');
Route::get('exportcont', 'ExcelController@exportcont')->name('export_cont');
Route::get('importExportView', 'ExcelController@importExportView');
Route::post('import', 'ExcelController@import')->name('import');

Route::get('register', 'PagesController@create');
Route::post('register', 'PagesController@store')->name('register');


Route::get('admin/login', 'UserController@getlogin');
Route::post('admin/login', 'UserController@postlogin')->name('admin_login');
Route::get('admin/logout', 'UserController@logoutadmin');

Route::group(['prefix' => 'admin', 'middleware' => 'is_admin'], function () {

    Route::group(['prefix' => 'users'], function () {
        Route::get('list', 'UserController@index');
        Route::get('add', 'UserController@create');
        Route::post('add', 'UserController@store')->name('user_add');
        Route::get('edit/{id}', 'UserController@edit');
        Route::post('edit/{id}', 'UserController@update')->name('user_edit');
        Route::get('delete/{id}', 'UserController@destroy')->name('user_destroy');

    });

    Route::group(['prefix' => 'news'], function () {
        Route::get('list', 'NewsController@index');
        Route::get('add', 'NewsController@create');
        Route::post('add', 'NewsController@store')->name('news_add');
        Route::get('edit/{id}', 'NewsController@edit');
        Route::post('edit/{id}', 'NewsController@update')->name('news_edit');
        Route::get('delete/{id}', 'NewsController@destroy');
    });

    Route::group(['prefix' => 'contestants'], function () {
        Route::get('list', 'ContestantsController@index');
        Route::get('add', 'ContestantsController@create');
        Route::post('add', 'ContestantsController@store')->name('contestants_add');
        Route::get('edit/{id}', 'ContestantsController@edit');
        Route::post('edit/{id}', 'ContestantsController@update')->name('contestants_edit');
        Route::get('delete/{id}', 'ContestantsController@destroy');
    });
});
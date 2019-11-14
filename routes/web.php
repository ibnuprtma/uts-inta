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

Route::get('/tokopedia', 'TokopediaSourceController@index')->name('tokopedia.index');
Route::get('/tokopedia/search/{method}','TokopediaSourceController@search')->name('tokopedia.search');

Route::get('/shopee', 'ShopeeSourceController@index')->name('shopee.index');
Route::get('/shopee/search/{method}','ShopeeSourceController@search')->name('shopee.search');

Route::get('/mediated', 'MediatedSchemaController@index')->name('mediated.index');
Route::get('/mediated/getData', 'MediatedSchemaController@getData')->name('mediated.getData');
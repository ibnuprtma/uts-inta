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


Route::get('/shopee', 'ShopeeSourceController@index')->name('shopee.index');


Route::get('/shopee/stemming','ShopeeSourceController@stemming')->name('shopee.stemming');
Route::get('/shopee/token','ShopeeSourceController@tokenazing')->name('shopee.token');
Route::get('/shopee/case','ShopeeSourceController@casefolding')->name('shopee.case');
Route::get('/shopee/stopword','ShopeeSourceController@stopword')->name('shopee.stopword');
Route::get('/shopee/tandabaca','ShopeeSourceController@tandabaca')->name('shopee.tandabaca');
Route::get('/shopee/katatanya','ShopeeSourceController@katatanya')->name('shopee.katatanya');
Route::get('/shopee/removemot','ShopeeSourceController@removemot')->name('shopee.removemot');

Route::get('/tokopedia', 'TokopediaSourceController@index')->name('tokopedia.index');


Route::get('/tokopedia/stemming','TokopediaSourceController@stemming')->name('tokopedia.stemming');
Route::get('/tokopedia/token','TokopediaSourceController@tokenazing')->name('tokopedia.token');
Route::get('/tokopedia/case','TokopediaSourceController@casefolding')->name('tokopedia.case');
Route::get('/tokopedia/stopword','TokopediaSourceController@stopword')->name('tokopedia.stopword');
Route::get('/tokopedia/tandabaca','TokopediaSourceController@tandabaca')->name('tokopedia.tandabaca');
Route::get('/tokopedia/katatanya','TokopediaSourceController@katatanya')->name('tokopedia.katatanya');
Route::get('/tokopedia/removemot','TokopediaSourceController@removemot')->name('tokopedia.removemot');


Route::get('/mediated-schema', 'MediatedSchemaController@index')->name('mediated-schema.index');

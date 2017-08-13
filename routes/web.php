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

Route::get('/', function ( ){
    return view('home');
});


Auth::routes();

Route::get('articles/create', function () {
    return view('articles/create');
});
//Route::group(['middleware'=>'auth'], function() {  ....  }

    Route::get('/index' , 'ArticlesController@index')->name('index');
    Route::post('/article','ArticlesController@insert_db_mail');
    Route::get('/articles','ArticlesController@index');
    Route::get('articles/index','ArticlesController@index')->name('articles/index');
    Route::get('articles/delete/{id}','ArticlesController@delete')->name('delete');
    Route::get('articles/edits/{id}','ArticlesController@edit1');
    Route::get('/home', 'ArticlesController@index')->name('home');
    Route::get('/save_update/{id}','ArticlesController@save_update');
    Route::get('student','studentController@index');
    Route::get('student/get_datatable','studentController@get_datatable');
    Route::get('articles/index/getdata','ArticlesController@getdata')->name('datatable'); //Datatable
    Route::get('/search','ArticlesController@search');//search website is up or down
    Route::post('/go','ArticlesController@go')->name('searchable');//search website is up or down
    Route::get('/test','test@hello');//Study with Senior
    Route::get('/tntindex','ArticlesController@tntindex');
    Route::post('/tntsearch','ArticlesController@tntsearch');
    Route::get('algoindex','ArticlesController@algoindex');
    Route::post('algosearch','ArticlesController@algosearch');
    Route::post('student','studentController@store');
    Route::post('getdb','studentController@getdb');







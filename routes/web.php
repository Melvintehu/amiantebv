<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', function () {
    return view('master');
});


//get routes
Route::get('/', 'PagesController@homepage');


Route::get('/bedrijfsinformatie', 'PagesController@bedrijfsinformatie');
Route::get('/contact', 'PagesController@contact');



Route::group(['prefix' => 'cms', 'middleware' => ['auth'] ], function () {


// cms routes
	
	// get routes
	Route::get('/', function(){
        return view('cms.cms');
    });

    
    // resource routes
	Route::resource('page', 'PageController');
	Route::resource('section', 'SectionController');
	Route::resource('project', 'ProjectController');
	Route::resource('discipline', 'DisciplineController');

	// get routes
	Route::get('/page/change-order-of-sections/{id}', 'PagesController@changeOrderOfSections');
	

});
Auth::routes();

Route::get('/home', 'HomeController@index');

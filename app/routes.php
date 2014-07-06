<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Blade::setContentTags('<%', '%>'); 		// for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>'); 	// for escaped data

Route::get('/', array('as' => 'site.index', function() { return View::make('site.index'); }));
// Route::get('/login', array('as' => 'site.login.get', function() { return View::make('site.login'); }));
Route::post('/auth/login', 'AuthController@login');
Route::post('/auth/check','AuthController@check');
Route::post('/auth/logout','AuthController@logout');

// //组路由
// Route::group(array('prefix' => 'site','before' => 'user.auth'), function(){
// 	Route::resource('topics','TopicController');
// });
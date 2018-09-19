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

Route::group(['middleware' => 'auth'], function () {
		//    Route::get('/link1', function ()    {
		//        // Uses Auth Middleware
		//    });

		//Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
		#adminlte_routes
	});

// Route::get('/test', function () {
// 		return "test";
// 	});

// Route::get('/test/abc', function () {
// 		return "test abc";
// 	});

// Route::get('/test/abc/{title}', function ($title) {
// 		return "test abc - ".$title;
// 	});

Route::group(['prefix' => 'test'], function () {
		Route::get('/', function () {
				// return "test";
				return view('test');
			});

		// Route::get('/abc', function () {
		// 		return "test abc";
		// 	});
		Route::get('/abc', 'TestController@showAbc');

		// Route::get('/abc/{title}', function ($title) {
		// 		return "test abc - ".$title;
		// 	});

		Route::get('/abc/{title}', 'TestController@showTitle');
	});

// Route::get('/students', 'TestController@showStudent');

// Route::get('/post/{category}/{subject}', function ($category, $subject) {
// 		return $category."<br/>".$subject;
// 	});

Route::get('/students', 'StudentController@showStudent');

Route::post('/addStudent', [
		'as'   => 'addStudent',
		'uses' => 'StudentController@addStudent'
	]);
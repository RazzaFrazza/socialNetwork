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


Route::group(['middleware' => ['web']], function () {

	Route::get('/', function () {
    return view('welcome');
    })->name('home');

	
	Route::post('/signup', [
        'uses' => 'UserController@postSignUp',
        'as' => 'signup'
	]);

	Route::post('/signin', [
        'uses' => 'UserController@postSignIn',
        'as' => 'signin'
	]);

	Route::get('/logout', [
		'uses' => 'UserController@getLogout',
		'as' => 'logout'
	]);

    Route::get('/account', [
        'uses' => 'UserController@getAccount',
        'as' => 'account'
    ]);

    Route::post('/updateaccount', [
        'uses' => 'UserController@postSaveAccount',
        'as' => 'account.save'
    ]);

    Route::get('/user/image/{filename}', [
        'uses' => 'UserController@getUserImage',
        'as' => 'account.image'
    ]);

	Route::get('/dashboard', [
       'uses' => 'PostController@getDashboard',
       'as' => 'dashboard',
       'middleware' => 'auth'
    ]);

    Route::post('/createpost', [
    	'uses' => 'PostController@postCreatePost',
    	'as' => 'post.create',
    	'middleware' => 'auth'
    ]);

    Route::get('/delete-post/{post_id}', [
    	'uses' => 'PostController@getDeletePost',
    	'as' => 'post.delete',
    	'middleware' => 'auth'
    ]);

    Route::post('/edit', [
    	'uses' => 'PostController@postEditPost',
    	'as' => 'edit'
    ]);

    Route::post('/like', [
        'uses' => 'PostController@postLikePost',
        'as' => 'like'
    ]);

});

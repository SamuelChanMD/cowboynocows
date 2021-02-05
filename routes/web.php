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

Route::get('/download/{f}', 'DownloadController@download')->name('download');

Route::get('/blog/{slug}', 'BlogController@getSingle')->name('blog.single');
		// ->where('slug', '[\w\d-\_]+'); should fix this sometime but its good for now

Route::get('/blog', 'BlogController@getIndex')->name('blog.index');		

Route::get('/about_me', 'AboutMeController@show')->name('about_me');

Route::resource('posts', 'PostController');

Route::resource('facts', 'FactController');

//User routes
Auth::routes();
Route::get('/user_info/', 'Auth\UserController@index')->name('user.index');
Route::get('/user_info/{user_id}', 'Auth\UserController@showUser')->name('user.show');
Route::put('/user_info/{user_id}', 'Auth\UserController@update')->name('user.update');

//Admin routes
Route::get('/auth/admin_login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/auth/admin_login', 'Auth\AdminLoginController@login');
Route::post('/admin_logout', 'Auth\AdminLoginController@logout');


//Comment Routes
Route::post('/comment/{post_id}/{user_id}', 'CommentController@store')->name('comment.store');
Route::put('/comment/{comment_id}', 'CommentController@update')->name('comment.update');
Route::delete('/comment/{comment_id}', 'CommentController@destroy')->name('comment.destroy');

//Home routes
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');


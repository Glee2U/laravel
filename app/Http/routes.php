<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('/intro', 'ViewPageController@to_intro');
Route::get('/index', 'ViewPageController@to_index');
Route::get('/lesson', 'ViewPageController@to_lesson');
Route::get('/profile', 'ViewPageController@to_profile');
Route::get('/pay', 'ViewPageController@to_pay');
Route::get('/courses', 'ViewPageController@to_course');
Route::get('/editprofile', 'User\UserController@editprofile');
Route::resource('user', 'User\UserController');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function()
{
    Route::get('/', 'AdminController@to_course');
    Route::resource('courses', 'CoursesController');
});

Route::get('courses/{id}', 'Course\CourseController@show');
Route::get('user/{id}', 'User\UserController@show');
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::post('comment/store', 'CommentsController@store');


Route::get('fileentry', 'FileEntryController@index');
Route::get('fileentry/get/{filename}', [
	'as' => 'getentry', 'uses' => 'FileEntryController@get']);
Route::post('fileentry/add',[ 
        'as' => 'addentry', 'uses' => 'FileEntryController@add']);
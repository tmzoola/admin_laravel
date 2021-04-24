<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/', 'HomeController@action')->name('home');

Route::get('/index', 'Pages\AccountController@index')->name('account');
Route::get('/user/profile', 'Pages\AccountController@kids_main')->name('user_profile');

Route::get('/course_content', 'Pages\AccountController@course_content')->name('course_content');
Route::get('/courses', 'Pages\AccountController@courses')->name('courses');



Route::group(['middleware' => 'can:manage-users'], function () {
    Route::get('/admin', 'HomeController@index')->name('admin')->middleware('auth');
    Route::resources([
        'users' => 'UserController'
    ]);

    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::match(['put', 'patch'], 'profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::match(['put', 'patch'], 'profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
    Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);
    Route::get('tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables']);
    Route::get('typography', ['as' => 'pages.typography', 'uses' => 'PageController@typography']);
});
Route::get('/logout_new', 'Auth\LogoutController@logout');

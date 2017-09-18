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

// Pages
Route::get('/', 'PagesController@index');
Route::get('/learn', 'PagesController@learn');
Route::get('/discuss', 'PagesController@discuss');
Route::get('/share', 'PagesController@share');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Manage
Route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function () {
    Route::get('/', 'ManageController@index');
    Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
    Route::resource('/users', 'UserController');
    Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
    Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
});

// Profile
Route::prefix('profile')->middleware('auth')->group(function () {
    Route::get('/', 'ProfileController@index');
    Route::get('/dashboard', 'ProfileController@dashboard')->name('profile.dashboard');
});

// OAuth Routes
//Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
//Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('/callback/{provider}', 'SocialAuthController@callback');

// Posts
Route::resource('posts', 'PostsController');
<?php

Auth::routes();

Route::get('/', 'Front\StartController@index')->name('start.index');
Route::get('/cources', 'Front\StartController@cources')->name('start.cources');
Route::get('/team', 'Front\StartController@team')->name('start.team');
Route::get('/blog', 'Front\StartController@blog')->name('start.blog');

Route::middleware('auth')->namespace('admin')->prefix('admin')->group(function () {
    Route::get('/', 'DashboardController@index')->name('admin.dashboard');
    Route::resource('course', 'CourseController', ['except' => 'show']);
    Route::resource('blog', 'BlogController', ['except' => 'show']);
    Route::resource('team', 'TeamController', ['except' => 'show']);
});

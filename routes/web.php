<?php

Route::get('/', 'PostsController@index')->name('home');

Route::get('/posts', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');

Route::get('/posts/{id}', 'PostsController@show');

Route::get('/login', 'SessionsController@create');

Route::get('/register', 'RegistrationController@create');

Route::get('/logout', 'SessionsController@destroy');


Route::post('/posts/create', 'PostsController@store');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::post('/login', 'SessionsController@store');

Route::post('/register', 'RegistrationController@store');
<?php

Route::get('/', 'PostsController@index');
Route::get('/{post}', 'PostsController@show');

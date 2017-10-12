<?php

Auth::routes();

route::get('/', function() {
	return redirect('/threads');
});

route::get('/threads', 'ThreadsController@index');

route::post('/threads', 'ThreadsController@store');

route::get('/threads/create', 'ThreadsController@create');

route::get('/threads/{id}', 'ThreadsController@show');

route::get('/profile/{id}', 'ProfileController@index');
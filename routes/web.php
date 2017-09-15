<?php

Auth::routes();

route::get('/threads', 'ThreadsController@index');

route::get('/threads/create', 'ThreadsController@create');

route::get('/threads/{id}', 'ThreadsController@show');

#route::get('/greeting/{id}' , function($id) {
#	$a = ["þetta", "verkefni", "er", "rugl", "tregt"];
#	return view('messages.greeting', ['kalli' => $a[$id]]);
#})->where(["id" => "[0-4]"]);
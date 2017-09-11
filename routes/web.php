<?php

Auth::routes();

route::get('/threads' , function() {
	return view('threads.index');
});

route::get('/threads/create' , function() {
	return view('threads.create');
});

route::get('/' , function() {
	$name = 'Baldur';
	return view('messages.hello', compact('name'));
});

route::get('/greeting/{id}' , function($id) {
	$a = ["þetta", "verkefni", "er", "rugl", "tregt"];
	return view('messages.greeting', ['kalli' => $a[$id]]);
})->where(["id" => "[0-4]"]);
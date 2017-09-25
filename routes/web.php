<?php

Auth::routes();

route::get('/', function() {
	return redirect('/threads');
});

route::get('/threads', 'ThreadsController@index');

route::post('/threads', 'ThreadsController@store');

route::get('/threads/create', 'ThreadsController@create')->middleware('auth');

route::get('/threads/{id}', 'ThreadsController@show');

route::get('/profile/{id}', 'ProfileController@index');


#route::get('/greeting/{id}' , function($id) {
#	$a = ["þetta", "verkefni", "er", "rugl", "tregt"];
#	return view('messages.greeting', ['kalli' => $a[$id]]);
#})->where(["id" => "[0-4]"]);

        #@foreach ($users as $user)
        #    <h2>{{ $user->name }}</h2> <h4>Meðlimur síðan {{ $user->created_at }}</h4>
        #@endforeach
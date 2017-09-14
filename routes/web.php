<?php

Auth::routes();

route::get('/threads', 'ThreadsController@index');

route::get('/threads/create', 'ThreadsController@create');

route::get('/threads/{id}', 'ThreadsController@show');
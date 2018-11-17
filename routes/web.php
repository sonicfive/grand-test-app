<?php

Route::get('/', function () {
    return view('home');
});

Route::post('/tasks/create', 'TaskController@create');

Route::get('/tasks/all', 'TaskController@all');

Route::get('/tasks/{id}', 'TaskController@find');

Route::delete('/tasks/delete', 'TaskController@delete');

Route::put('/tasks/update', 'TaskController@update');


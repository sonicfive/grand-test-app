<?php

Route::get('/', function () {
    return view('home');
});

/*
* Part One: Local API
* Tasks App (ToDo)
*/

Route::post('/tasks/create', 'TaskController@create');

Route::get('/tasks/all', 'TaskController@all');

Route::get('/tasks/{id}', 'TaskController@find');

Route::post('/tasks/delete', 'TaskController@delete');

Route::put('/tasks/update', 'TaskController@update');

/*
* Part Two: External API
* Weather Report
*/

Route::post('/weather-report/get', 'WeatherReportController@get');

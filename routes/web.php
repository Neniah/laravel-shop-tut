<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
  return 'Hello World!!';
});

Route::get('hello', 'Hello@index');

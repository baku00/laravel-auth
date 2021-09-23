<?php

Route::get('hello', function(){
  return 'Hello';
});

Route::get('add/{a}/{b}', 'RND\Auth\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'RND\Auth\CalculatorController@subtract');

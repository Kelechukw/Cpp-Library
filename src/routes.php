<?php

Route::get('calculator', function(){
	echo 'A Calculator function';
});
Route::get('multiply/{a}/{b}', 'Kelechukw\Calculator\CalculatorController@multiply');

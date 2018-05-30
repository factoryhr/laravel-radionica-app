<?php

Route::post('login', 'Auth\ApiAuthController@login');
Route::post('register', 'Auth\ApiAuthController@register');

Route::group(['middleware' => 'auth:api'], function(){
	Route::post('details', 'Auth\ApiAuthController@details');
});
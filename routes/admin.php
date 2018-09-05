<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "adminauth" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin' , 'namespace' => 'Admin'] , function(){

	Config::set('auth.defines' , 'admin'); 
	
	Route::get('/login', 'AdminAuthController@loginpage' );
	Route::post('/login', 'AdminAuthController@login' );
	Route::get('/forgot/password', 'AdminAuthController@forgot_password' );
	Route::post('/forgot/password', 'AdminAuthController@forgot_password_post' );
	Route::get('reset/password/{token}', 'AdminAuthController@reset_password');
	Route::post('reset/password/{token}', 'AdminAuthController@reset_password_final'); 
	



	Route::group(['middleware' => 'adminauth:admin'] , function(){
		
		// Route::get('/register', 'RegisterController@showRegistrationForm' );
		// Route::post('/register', 'RegisterController@register' );
		
		Route::any('/logout', 'AdminAuthController@logout' );  
	 
		Route::get('/', function () { return view('admin.dashboard'); }); 

		Route::get('/slider', 'SliderController@show' );
		Route::post('/slider', 'SliderController@store' );
		Route::delete('/slider/delete/{id}', 'SliderController@destroy' );
		Route::post('/slider/{id}/edit', 'SliderController@update' ); 

		Route::resource('/article', 'ArticleController');

		
	});

});


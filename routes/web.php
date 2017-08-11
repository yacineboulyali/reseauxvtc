<?php
Route::group(['prefix' => 'admin'], function () {
  Route::get('/login' , 'AdminAuth\LoginController@showLoginForm');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Auth::routes();

Auth::routes();


Route::group(['prefix' => 'conducteur'], function () {
  Route::get('/login', 'ConducteurAuth\LoginController@showLoginForm');
  Route::post('/login', 'ConducteurAuth\LoginController@login');
  Route::post('/logout', 'ConducteurAuth\LoginController@logout');

  Route::get('/register', 'ConducteurAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'ConducteurAuth\RegisterController@register');

  Route::post('/password/email', 'ConducteurAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'ConducteurAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'ConducteurAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'ConducteurAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'client'], function () {
  Route::get('/login', 'ClientAuth\LoginController@showLoginForm');
  Route::post('/login', 'ClientAuth\LoginController@login');
  Route::post('/logout', 'ClientAuth\LoginController@logout');

  Route::get('/register', 'ClientAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'ClientAuth\RegisterController@register');

  Route::post('/password/email', 'ClientAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'ClientAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'ClientAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'ClientAuth\ResetPasswordController@showResetForm');
});


Route::get('/','RenderVousController@index')->name('home');
Route::get('/rendez_vous/create', 'RenderVousController@create')->name('addRendezVous');
//Route::post('rendez_vous', 'RenderVousController@store');







Route::get('client','ClientController@index')->name('client');
Route::get('client/{id}/edit','ClientController@edit')->name('editClient');
Route::put('client/{id}','ClientController@update');
Route::get('client/{id}','ClientController@show')->name('showClient');

Route::get('conducteur','ConducteurController@index')->name('conducteur');
Route::get('conducteur/{id}/edit','ConducteurController@edit')->name('editConducteur');;
Route::get('conducteur/{id}','ConducteurController@show')->name('showConducteur');
Route::put('conducteur/{id}','ConducteurController@update');
Route::post('conducteur/','VehiculeController@store');
Route::get('vehicule/create', 'VehiculeController@create')->name('addVehicule');
Route::get('vehicule/{id}/edit', 'VehiculeController@edit')->name('editVehicule');
Route::put('vehicule/{id}', 'VehiculeController@update');

Route::delete('vehicule/{id}', 'VehiculeController@destroy');

Route::post('vehicule/restore/{id}','VehiculeController@restore');
Route::post('vehicule/delete-forever/{id}','VehiculeController@DeleteForever');









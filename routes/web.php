<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index');


Route::group(['prefix' => 'hospital'], function () {
  Route::get('/login', 'HospitalAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'HospitalAuth\LoginController@login');
  Route::post('/logout', 'HospitalAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'HospitalAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'HospitalAuth\RegisterController@register');

  Route::post('/password/email', 'HospitalAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'HospitalAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'HospitalAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'HospitalAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'chw'], function () {
  Route::get('/login', 'CommunityhealthworkerAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'CommunityhealthworkerAuth\LoginController@login');
  Route::post('/logout', 'CommunityhealthworkerAuth\LoginController@logout')->name('logout');

  Route::post('/password/email', 'CommunityhealthworkerAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'CommunityhealthworkerAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'CommunityhealthworkerAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'CommunityhealthworkerAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'staff'], function () {
  Route::get('/login', 'StaffAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'StaffAuth\LoginController@login');
  Route::post('/logout', 'StaffAuth\LoginController@logout')->name('logout');

  Route::post('/password/email', 'StaffAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'StaffAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'StaffAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'StaffAuth\ResetPasswordController@showResetForm');
});

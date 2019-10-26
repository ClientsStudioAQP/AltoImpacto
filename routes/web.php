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

//Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => 'auth'],
    function (){
        Route::get('/panel', 'AdminController@index')->name('dashboard');   // dominio/admin/panel
        Route::get('/proyectos', 'ElaborationController@index')->name('admin.proyectos.index');
        Route::get('/proyectos/nuevo', 'ElaborationController@create')->name('admin.proyectos.create');

        Route::post('proyectos', 'ElaborationController@store')->name('admin.proyectos.store');
    });

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

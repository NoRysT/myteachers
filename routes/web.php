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
//先生用認証
Route::group(['prefix' => 'teachers'], function () { //teachesディレクトリをここで指定しておく
    Route::get('login', 'AuthTeacher\LoginController@showLoginForm')->name('teacher_auth.login');
    Route::post('login', 'AuthTeacher\LoginController@login')->name('teacher_auth.login');
    Route::post('logout', 'AuthTeacher\LoginController@logout')->name('teacher_auth.logout');
    Route::get('register', 'AuthTeacher\RegisterController@showRegisterForm')->name('teacher_auth.register');
    Route::post('register', 'AuthTeacher\RegisterController@register')->name('teacher_auth.register');
    Route::post('password/email', 'AuthTeacher\ForgotPasswordController@sendResetLinkEmail')->name('teacher_auth.password.email');
    Route::get('password/reset', 'AuthTeacher\ForgotPasswordController@showLinkRequestForm')->name('teacher_auth.password.request');
    Route::post('password/reset', 'AuthTeacher\ResetPasswordController@reset')->name('teacher_auth.password.update');
    Route::get('password/reset/{token}', 'AuthTeacher\ResetPasswordController@showResetForm')->name('teacher_auth.password.reset');
});

//  Route::get('/', 'NewsController@index');

//  Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
//    Route::get('news/create', 'Admin\NewsController@add');
//    Route::post('news/create', 'Admin\NewsController@create');
//    Route::get('news', 'Admin\NewsController@index');
//    Route::get('news/edit', 'Admin\NewsController@edit');
//    Route::post('news/edit', 'Admin\NewsController@update');
//    Route::get('news/delete', 'Admin\NewsController@delete');
//    Route::get('profile', 'Admin\ProfileController@index');
//    Route::post('profile/create', 'Admin\ProfileController@create');
//    Route::get('profile/create', 'Admin\ProfileController@add');
//    Route::get('profile/edit', 'Admin\ProfileController@edit');
//    Route::post('profile/edit', 'Admin\ProfileController@update');
//    Route::get('profile/delete', 'Admin\ProfileController@delete');

//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

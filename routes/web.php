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


Route::group(['domain' => 'travel.api'],function () {
    //应用首页
    Route::get('/', function () {
        return view('web.home.index');
    });
    //应用首页
    Route::get('/home', 'Web\HomeController@index')->name('web.home');
    //用户登陆页面
    Route::get('/login', 'Web\Auth\LoginController@showLoginForm')->name('web.get.login');
    //用户登陆接口
    Route::post('/login', 'Web\Auth\LoginController@login')->name('web.post.login');
    //用户登出接口
    Route::post('/logout', 'Web\Auth\LoginController@logout')->name('web.logout');
    //用户注册页面
    Route::get('/register', 'Web\Auth\RegisterController@showRegistrationForm')->name('web.get.register');
    //用户注册接口
    Route::post('/register', 'Web\Auth\RegisterController@register')->name('web.post.register');
    //密码重置页面
    Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('web.password.request');
    Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('web.password.email');
    Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('web.password.reset');
    Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('web.password.update');
    Route::get('/email/verify', 'Auth\VerificationController@show')->name('web.verification.notice');
    Route::get('/email/verify/{id}', 'Auth\VerificationController@verify')->name('web.verification.verify');
    Route::get('/email/resend', 'Auth\VerificationController@resend')->name('web.verification.resend');
});




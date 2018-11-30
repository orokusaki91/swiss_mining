<?php

//INSERT INTO `swiss`.`users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES ('1', 'test', 'a@a.com', NULL, '$2y$10$JbNUq9p.bl5Rv.Q1ED/tWeDJNWyUkTRVOQqJHTuUQNm5cwR3UQcpK', NULL, '2018-11-29 11:24:37', '2018-11-29 11:24:37');

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

Route::get('/', 'HomeController@index')->name('index');

Route::post('ajax/contact', 'ContactController@post');

Route::get('/admin', function(){
    return redirect()->route('login');
});

Route::get('/lang/{lang}', 'LangController@changeLang')->name('change-lang');

Route::namespace('Admin\Auth')
    ->prefix('admin')
    ->group(function(){

    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');

    // Registration Routes...
    Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'RegisterController@register');

    // Password Reset Routes...
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');

    // Email Verification Routes...
    // Route::get('email/verify', 'VerificationController@show')->name('verification.notice');
    // Route::get('email/verify/{id}', 'VerificationController@verify')->name('verification.verify');
    // Route::get('email/resend', 'VerificationController@resend')->name('verification.resend');
    

});

Route::namespace('Admin')
    ->prefix('admin')
    ->middleware('auth')
    ->group(function(){

        Route::get('/home', function(){
            return view('admin.partials.home');
        });

        Route::get('/about-us', 'AboutUsController@index')->name('admin.aboutUs');
        Route::post('/about-us-update', 'AboutUsController@update')->name('admin.aboutUs.update');

        Route::get('/mission-vision', 'MissionVisionController@index')->name('admin.missionVision');
        Route::get('/mission-vision/{vision}', 'MissionVisionController@edit')->name('admin.missionVision.show');
        Route::post('/mission-vision-update/{vision}', 'MissionVisionController@update')->name('admin.missionVision.update');
        
        // Logout
        Route::post('logout', 'LoginController@logout')->name('logout');


    });
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

Route::get('/', 'HomeController@index')->name('index');

Route::post('ajax/contact', 'ContactController@post');

Route::get('/lang/{lang}', 'HomeController@changeLang')->name('change-lang');

Route::post('/newsletter', 'HomeController@subscribe')->name('newsletter');

Route::get('/impressum', 'HomeController@impressum')->name('impressum');

Route::get('/admin', function(){
    return redirect()->route('login');
});

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
        })->name('admin.home');

        // About Us
        Route::get('/about-us', 'AboutUsController@index')->name('admin.aboutUs');
        Route::post('/about-us-update', 'AboutUsController@update')->name('admin.aboutUs.update');

        // Mission - Vision
        Route::get('/mission-vision', 'MissionVisionController@index')->name('admin.missionVision');
        Route::get('/mission-vision/{vision}', 'MissionVisionController@edit')->name('admin.missionVision.show');
        Route::post('/mission-vision-update/{vision}', 'MissionVisionController@update')->name('admin.missionVision.update');

        // Team
        Route::get('/team', 'TeamController@index')->name('admin.team');
        Route::get('/team/create', 'TeamController@create')->name('admin.team.create');
        Route::post('/team/store', 'TeamController@store')->name('admin.team.store');
        Route::get('/team-edit/{teamMember}', 'TeamController@edit')->name('admin.team.edit');
        Route::post('/team-update/{teamMember}', 'TeamController@update')->name('admin.team.update');
        Route::post('/team-delete/{teamMember}', 'TeamController@destroy')->name('admin.team.destroy');
        
        // Services
        // Route::get('/services', 'ServiceController@index')->name('admin.services');
        // Route::post('/services-update', 'ServiceController@update')->name('admin.services.update');

        // Solutions
        Route::get('/solutions', 'SolutionsController@index')->name('admin.solutions');
        Route::post('/solutions-update', 'SolutionsController@update')->name('admin.solutions.update');

        // Turbo Token
        Route::get('/turbo-token', 'TurboTokenController@index')->name('admin.turboToken');
        Route::post('/turbo-token-update', 'TurboTokenController@update')->name('admin.turboToken.update');

        // Partners
        Route::get('/partners', 'PartnersController@index')->name('admin.partners');
        Route::get('/partners/create', 'PartnersController@create')->name('admin.partners.create');
        Route::post('/partners/store', 'PartnersController@store')->name('admin.partners.store');
        Route::get('/partners-edit/{partner}', 'PartnersController@edit')->name('admin.partners.edit');
        Route::post('/partners-update/{partner}', 'PartnersController@update')->name('admin.partners.update');
        Route::post('/partners-delete/{partner}', 'PartnersController@destroy')->name('admin.partners.destroy');
    
        // Newsletters
        Route::get('newsletter', 'NewsletterController@index')->name('admin.newsletter');
        Route::post('newsletter-delete/{newsletter}', 'NewsletterController@destroy')->name('admin.newsletter.destroy');

        // Change password
        Route::get('/change-password', 'Auth\ChangePasswordController@index')->name('admin.changePass');
        Route::post('/change-password', 'Auth\ChangePasswordController@update')->name('admin.changePass.update');
        
        // Logout
        Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

    });

<?php

use App\Http\Controllers\LandingPageController;
use Common\Billing\PricingPageController;
use App\Http\Controllers\ShareableLinksController;
use Common\Core\Controllers\HomeController;
use Common\Pages\CustomPageController;
use Illuminate\Support\Facades\Route;

//FRONT-END ROUTES THAT NEED TO BE PRE-RENDERED

Route::get('/',  function(){
    return view('blitzlocker.index');
});
Route::get('drive/s/{hash}', [ShareableLinksController::class, 'show']);

Route::get('contact', function(){
    return view('blitzlocker.contact');
});
Route::get('login', function(){
    return view('blitzlocker.login');
});
Route::get('register', [HomeController::class, 'render'])->name('register');
Route::get('forgot-password', [HomeController::class, 'render']);
Route::get('pricing', PricingPageController::class);
Route::get('privacy', function(){
    return view('blitzlocker.privacy');
});
Route::get('terms', function(){
    return view('blitzlocker.terms');
});
Route::get('cookie', function(){
    return view('blitzlocker.cookie');
});
Route::get('support', function(){
    return view('blitzlocker.support');
});
Route::get('join', function(){
    return view('blitzlocker.join');
});

//CATCH ALL ROUTES AND REDIRECT TO HOME
Route::fallback([HomeController::class, 'render']);

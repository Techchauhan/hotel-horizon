<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.webpage');
});


Route::get('/login', function(){
    return view('pages.login.login');
})->name('login.page');


Route::get('/admin-register',   [ RegistrationController::class, 'adminRegistrationPage'])->name('admin.register');
Route::post('/admin-register',   [ RegistrationController::class, 'adminRegister'])->name('admin.register');



//Other pages;

Route::get('/contact-us', function(){
    return view('contact-us');
})->name('contact-us');

Route::get('/about-us', function(){
    return view('about-us');
})->name('about-us');

Route::get('privacy-policy', function(){
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('terms-condition', function(){
    return view('terms-and-conditions');
})->name('terms-condition');

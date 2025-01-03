<?php
 
 
use Illuminate\Support\Facades\Route;
use frontend\template\Http\Livewire\Home;
use frontend\template\Http\Livewire\MissingPeopel;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
 
Route::group(
  [
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
  ], function(){
    

    Route::get('home',Home::class)->name('home');

    Route::get('missing-peopel',MissingPeopel::class)->name('missing.peopel');
    
  });
 
Route::post('/logout',function() {
    return 'code is here';
})->name('logout');

 
//  Route::view('sb','components.layouts.SB-Admin-app-black');
 
 
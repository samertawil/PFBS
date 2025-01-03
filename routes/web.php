<?php

use App\Livewire\Home;
use App\Livewire\Test;
use Livewire\Livewire;
use App\Http\Middleware\canAccess;
use App\Livewire\DateLogin\Dlogin;
use App\Livewire\DateLogin\Questions;
use Illuminate\Support\Facades\Route;
use App\Livewire\UserData\ContactData;
use App\Livewire\TechnicalSupport\TechSupportCreate;
 
use App\Livewire\MalnutritionServices\MalnutritionService;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/livewire/update', $handle);
    });


    Route::get('/', Home::class)->name('home')->middleware(canAccess::class);


    Route::post('/logout', function () {
        session()->forget('auth_idc');
        return redirect()->route('login');
    })->name('logout');

    Route::get('login', Dlogin::class)->name('login');

    Route::get('user-verify-questions', Questions::class)->name('user.verify.questions');
    
    Route::get('contact-data',ContactData::class)->name('contact.data');

    Route::get('malnutrition-app',MalnutritionService::class)->name('mal-app');

    Route::prefix('support/')->middleware(['web'])->name('support.')->group(function () {

        Route::get('create', TechSupportCreate::class)->name('create');

      });

  
});

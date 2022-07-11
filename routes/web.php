<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;

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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

/**Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});**/

Route::get('/contact-us', function () {
	return view('contact-us');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/weather-checker', [WeatherController::class, 'fetchData'], function (){
    return view('weather-checker?weather=London'); //A little hacky requesting a parameter from the get go, need to work out a better alternative but for now it works
})->middleware(['auth'])->name('weather');

// Route::get('/weather-checker/{location}', function ($location) {
//     return 'User '.$location;
// });

//Route::get('/weather-checker', [WeatherController::class, 'fetchData']);

//Route::get('/weather-checker', 'WeatherController::class@david');

require __DIR__.'/auth.php';

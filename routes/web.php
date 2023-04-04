<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/academics', function () {
    return view('academics');
});

Route::get('/faculty', function () {
    return view('faculty');
});
Route::get('/pvmo', function () {
    return view('pvmo');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/events/index', [EventController::class, 'allEvents'])->name('events.dashboard');
Route::resource('events', EventController::class);
Route::get('/events/{event}', [EventController::class, 'show'])->name('event.show');


require __DIR__ . '/auth.php';



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

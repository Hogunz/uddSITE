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
Route::get('/faculty', function () {
    return view('faculty');
});
Route::get('/pvmo', function () {
    return view('pvmo');
});

Route::get('/events', function () {
    return view('admin.events.events');
});
Route::get('/contact', function () {
    return view('contact');
});


Route::resource('events', EventController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

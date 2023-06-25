<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\TestimonialController;

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

Route::get('/', [DashboardController::class, 'welcome']);
Route::get('/about', function () {
    return view('about');
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
//Events
Route::get('/events/index', [EventController::class, 'allEvents'])->name('events.dashboard');
Route::resource('events', EventController::class);
Route::get('/events/{event}', [EventController::class, 'show'])->name('event.show');
//testimonials
Route::get('/academics', [TestimonialController::class, 'academics'])->name('academics');
Route::get('/academics', [TestimonyController::class, 'academics'])->name('academics');
Route::resource('testimonies', TestimonyController::class);
Route::resource('testimonials', TestimonialController::class);

//SoftDelete
Route::delete('testimonials/forceDelete/{testimonial}', [TestimonialController::class, 'forceDelete'])->name('testimonials.forceDelete');
Route::delete('testimonies/forceDelete/{testimonies}', [TestimonialController::class, 'forceDelete'])->name('testimonies.forceDelete');
//Restore
Route::get('testimonials/restore/{testimonial}', [TestimonialController::class, 'restore'])->name('testimonials.restore');
Route::get('testimonies/restore/{testimonial}', [TestimonialController::class, 'restore'])->name('testimonies.restore');
//Approvals
Route::get('/admin/events/index', [ApprovalController::class, 'index'])->name('events.approval.index');
Route::put('/admin/blog/user/index/{event}/change-status', [ApprovalController::class, 'changeStatus'])->name('events.approval.change');
require __DIR__ . '/auth.php';



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

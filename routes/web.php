<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Middleware\SetLocale;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'sw'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');

Route::view('/faq', 'faq')->name('faq');

Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ElderController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\LocaleController;

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
Route::get('/blog', [PostController::class, 'create'])->name('posts.create');
Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::get('/blog/{id}', [PostController::class, 'show'])->name('blog.show');
Route::post('/blog/store', [PostController::class, 'store'])->name('posts.store');
Route::get('/blog/search', [PostController::class, 'search'])->name('blog.search');
Route::get('/blog/category/{id}', [PostController::class, 'filterByCategory'])->name('blog.category');
Route::post('/blog/{id}/comments', [CommentController::class, 'store'])->name('comments.store');
// Route::get('/blog/search', [PostController::class, 'search'])->name('blog.search');


Route::get('/contact', function () {
    return view('contact');
});

Route::get('locale/{lang}',[LocaleController::class, 'setLocale']);


Route::view('/faq', 'faq')->name('faq');

Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');
});

Route::get('/elder/dashboard', [ElderController::class, 'dashboard'])->middleware(['auth'])->name('elder.dashboard');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth'])->name('admin.dashboard');

// User profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


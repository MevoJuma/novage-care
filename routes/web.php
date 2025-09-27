<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ElderController;
use App\Http\Controllers\CaregiverController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\WellnessController;

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

Route::get('locale/{lang}', [LocaleController::class, 'setLocale']);


Route::view('/faq', 'faq')->name('faq');

Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');
});

Route::get('/elder/dashboard', [ElderController::class, 'dashboard'])->middleware(['auth'])->name('elder.dashboard');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth'])->name('admin.dashboard');

// routes/web.php
Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    // Route::get('/elders', [ElderController::class, 'index'])->name('elders.index');
    Route::get('/elders/reports', [ElderController::class, 'reports'])->name('elders.reports');
    Route::resource('elders', ElderController::class);
    Route::get('/caregiver/assign', [CaregiverController::class, 'assignCaregiverToElder'])->name('caregiver.assign');
    Route::get('/caregiver/performance', [CaregiverController::class, 'performance'])->name('caregiver.performance');
    Route::resource('caregivers', CaregiverController::class);
    Route::get('/appointments/upcoming', [AppointmentController::class, 'index'])->name('appointments.upcoming');
    Route::get('/appointments/history', [AppointmentController::class, 'history'])->name('appointments.history');
    Route::resource('appointments', AppointmentController::class);
    Route::get('/wellness/checkins', [WellnessController::class, 'checkins'])->name('wellness.checkins');
    Route::get('/wellness/alerts', [WellnessController::class, 'alerts'])->name('wellness.alerts');
    Route::resource('wellness', WellnessController::class);
    Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
    Route::get('/settings/profile', [ProfileController::class, 'edit'])->name('settings.profile');
});


// User profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
// Route::post('/posts', [PostController::class, 'store'])
//     ->middleware(['auth', 'role:admin'])
//     ->name('posts.store');

<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ElderController;
use App\Http\Controllers\CaregiverController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\WellnessController;

// One-time setup: visit this URL to run cache/config/optimize + storage link (no SSH needed). REMOVE THIS ROUTE AFTER USE.
Route::get('/setup-storage-link', function () {
    $results = [];
    $commands = [
        'config:clear' => 'Config cache cleared',
        'cache:clear'  => 'Application cache cleared',
        'optimize'     => 'Optimize (config + route + view cache)',
    ];
    foreach ($commands as $command => $label) {
        try {
            Artisan::call($command);
            $results[] = ['ok' => true, 'label' => $label, 'message' => trim(Artisan::output()) ?: 'OK'];
        } catch (\Throwable $e) {
            $results[] = ['ok' => false, 'label' => $label, 'message' => $e->getMessage()];
        }
    }
    $html = '<h1>Setup complete</h1><ul style="font-family:sans-serif">';
    foreach ($results as $r) {
        $html .= '<li><strong>' . e($r['label']) . ':</strong> ' . ($r['ok'] ? '&#9989; ' . e($r['message']) : '&#10060; ' . e($r['message'])) . '</li>';
    }
    $html .= '</ul><p>You can remove the /setup-storage-link route from routes/web.php now.</p>';
    return response($html, 200, ['Content-Type' => 'text/html; charset=UTF-8']);
});

// Fallback: serve files from storage/app/public when public/storage symlink doesn't exist (e.g. shared hosting). Safe to keep.
Route::get('/storage/{path}', function (string $path) {
    $base = realpath(storage_path('app/public'));
    if ($base === false) {
        abort(404);
    }
    $fullPath = realpath(storage_path('app/public/' . $path));
    if ($fullPath === false || !is_file($fullPath) || !str_starts_with($fullPath, $base)) {
        abort(404);
    }
    return response()->file($fullPath);
})->where('path', '.*')->name('storage.serve');

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
    Route::get('/posts', [PostController::class, 'indexForAdmin'])->name('posts.index');
    Route::get('/posts/create', [PostController::class, 'createForAdmin'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
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


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobPostController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home - Skill Connect Landing Page
Route::get('/', function () {
    $featuredJobs = \App\Models\JobPost::latest()
        ->take(4)
        ->get();

    return view('home', compact('featuredJobs'));
})->name('home');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Job Routes
Route::middleware('auth')->group(function () {

    // Available Jobs
    Route::get('/jobs', [JobPostController::class, 'index'])
        ->name('jobs.index');

    // Create Job
    Route::get('/jobs/create', [JobPostController::class, 'create'])
        ->name('jobs.create');

    // Store Job
    Route::post('/jobs', [JobPostController::class, 'store'])
        ->name('jobs.store');

    // Job Details
    Route::get('/jobs/{job}', [JobPostController::class, 'show'])
        ->name('jobs.show');

    // My Jobs
    Route::get('/my-jobs', [JobPostController::class, 'myJobs'])
        ->name('jobs.my');

    // Apply Page
    Route::get('/jobs/{job}/apply', [JobPostController::class, 'apply'])
        ->name('jobs.apply');

    // Submit Application
    Route::post('/jobs/{job}/apply', [JobPostController::class, 'submitApplication'])
        ->name('jobs.apply.submit');

    // Applicants
    Route::get('/jobs/{job}/applicants', [JobPostController::class, 'applicants'])
        ->name('jobs.applicants');

    // My Applications
    Route::get('/my-applications', [JobPostController::class, 'myApplications'])
        ->name('applications.my');

    // Accept Application
    Route::patch(
        '/applications/{application}/accept',
        [JobPostController::class, 'acceptApplication']
    )->name('applications.accept');

    // Reject Application
    Route::patch(
        '/applications/{application}/reject',
        [JobPostController::class, 'rejectApplication']
    )->name('applications.reject');

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

// Authentication Routes
require __DIR__ . '/auth.php';

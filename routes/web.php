<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\RatingController;

// Home Page
Route::get('/', function () {
    return view('index');
});

// About Page
Route::get('/about', function () {
    return view('about');
});

// Appointment Page
Route::get('/appointment', function () {
    return view('appointment');
});

// Contact Page
Route::get('/contact', function () {
    return view('contact');
});

// Doctors Page - Fetch doctors and their reviews from the controller
Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');

// Treatment Page
Route::get('/treatment', function () {
    return view('treatment');
});

Route::post('/rate', [RatingController::class, 'storeRating'])->name('rating.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home', function () {
        return view('index'); // Assuming index.blade.php is your home page view
    })->name('home');
    
    // Overriding the default dashboard route and redirecting it to /home after login
    Route::get('/dashboard', function () {
        return redirect()->route('home'); // Redirect to the /home route
    })->name('dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointments.index');
    Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
    Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointments.store');
    Route::delete('/appointment/{id}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');
});

// Route for submitting a rating
Route::middleware(['auth'])->post('/doctors', [DoctorController::class, 'storeReview'])->name('rating.store');


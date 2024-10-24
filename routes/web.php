<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;

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

// Doctors Page
Route::get('/doctors', function () {
    return view('doctors');
});

// Treatment Page
Route::get('/treatment', function () {
    return view('treatment');
});

Route::post('/rate-doctor/{doctor}', [DoctorController::class, 'rate']);

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
    Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointments.store');
    Route::delete('/appointment/{id}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');
});




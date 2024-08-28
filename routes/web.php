<?php

use App\Http\Controllers\JobController;
use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', [JobController::class, 'index']);

// Show create form

Route::get('/jobs/create', [JobController::class, 'create']);


// Show one
Route::get('/jobs/{job}', [JobController::class, 'show']);

// store
Route::post('/jobs', [JobController::class, 'store']);

// Edit -- display edit form

Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);

// Update

Route::patch('/jobs/{job}/', [JobController::class, 'update']);

// Delete

Route::delete('/jobs/{job}', [JobController::class, 'destroy']);
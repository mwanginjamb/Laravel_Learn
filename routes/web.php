<?php

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

Route::get('/jobs', function () {

    $jobs = Job::all();
    dd($jobs);
    return view('jobs', [
        'jobs' => Job::all(),
        'title' => 'Advertised Jobs'
    ]);
});

Route::get('/jobs/{id}', function ($id) {

    $job = Job::find($id);
    return view('job', [
        'job' => $job,
        'title' => 'Job Details'
    ]);
});

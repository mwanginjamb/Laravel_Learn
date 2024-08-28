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
    $jobs = Job::with('employer')->latest()->paginate(5);
    return view('jobs.index', [
        'jobs' => $jobs,
        'title' => 'Advertised Jobs'
    ]);
});

// Show create form

Route::get('/jobs/create', function () {
    return view('jobs.create');
});


// Show one
Route::get('/jobs/{job}', function (Job $job) {
    return view('jobs.show', [
        'job' => $job,
        'title' => 'Job Details'
    ]);
});

// create
Route::post('/jobs', function () {

    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => request('employer_id') ?? 1,

    ]);

    return redirect('/jobs');
});

// Edit -- display edit form

Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.edit', ['job' => $job]);
});

// Update

Route::patch('/jobs/{job}/', function (Job $job) {
    //validate Input

    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required', 'numeric'],
    ]);

    // Check Authorization (To do)

    // Update the entry
    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    // redirect
    return redirect('/jobs/' . $job->id);
});

// Delete

Route::delete('/jobs/{job}', function (Job $job) {

    // Authorize

    // find and delete
    $job->delete();

    // redirect
    return redirect('/jobs');
});
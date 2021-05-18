<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseCatalogController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PlayerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function() {

    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/', CourseCatalogController::class)->name('home');

    Route::get('course/{id}', CourseController::class)->name('course');

    Route::get('lesson/{id}', PlayerController::class)->name('player');
});

Route::fallback(function () {
    return redirect()->route('home');
});

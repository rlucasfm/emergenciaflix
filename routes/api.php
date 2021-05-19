<?php

use App\Http\Controllers\UserLessonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('annotation/save', [UserLessonController::class, 'annotation'])->name('api-annotation');
Route::post('completed/save', [UserLessonController::class, 'completed'])->name('api-completed');


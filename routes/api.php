<?php

use App\Http\Controllers\NameController;
use App\Http\Controllers\QuotaTaskController;
use App\Http\Controllers\RegularTaskController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TrainingTaskController;
use App\Http\Controllers\UnplannedTaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(NameController::class)->group(function () {
    Route::post('/name', 'store');
    Route::put('/name/{id}', 'update');
    Route::delete('/name/{id}', 'destroy');
});

Route::controller(TaskController::class)->group(function () {
    Route::post('/task', 'store');
    Route::put('/task/{id}', 'update');
    Route::delete('/task/{id}', 'destroy');
});


Route::controller(QuotaTaskController::class)->group(function () {
    Route::post('/quota-task', 'store');
    Route::put('/quota-task/{id}', 'update');
    Route::delete('/quota-task/{id}', 'destroy');
});

Route::controller(RegularTaskController::class)->group(function () {
    Route::post('/regular-task', 'store');
    Route::put('/regular-task/{id}', 'update');
    Route::delete('/regular-task/{id}', 'destroy');
});
Route::controller(TrainingTaskController::class)->group(function () {
    Route::post('/training-task', 'store');
    Route::put('/training-task/{id}', 'update');
    Route::delete('/training-task/{id}', 'destroy');
});

Route::controller(UnplannedTaskController::class)->group(function () {
    Route::post('/unplanned-task', 'store');
    Route::put('/unplanned-task/{id}', 'update');
    Route::delete('/unplanned-task/{id}', 'destroy');
});


Route::get('/result', [ResultController::class, 'index']);

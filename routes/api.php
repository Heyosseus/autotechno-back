<?php

use App\Http\Controllers\NameController;
use App\Http\Controllers\QuotaTaskController;
use App\Http\Controllers\RegularTaskController;
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

Route::post('/name', [nameController::class, 'store']);
Route::post('/task', [TaskController::class, 'store']);
Route::post('/quota-task', [QuotaTaskController::class, 'store']);
Route::post('/regular-task', [RegularTaskController::class, 'store']);
Route::post('/training-task', [TrainingTaskController::class, 'store']);
Route::post('/unplanned-task', [UnplannedTaskController::class, 'store']);

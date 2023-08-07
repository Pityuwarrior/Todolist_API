<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('tasks', [TaskController::class,'index']);
Route::get('tasks/{task}', [TaskController::class,'show']);
Route::post('tasks', [TaskController::class,'store']);
Route::put('tasks/{task}', [TaskController::class,'update']);
Route::delete('tasks/{task}', [TaskController::class,'delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
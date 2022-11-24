<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\InstanceController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "Api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});


Route::post('/user/create', [UserController::class, 'createUser']);
Route::post('/auth', [AuthenticationController::class, 'authenticate']);



Route::middleware('apiAuth')->group(function () {
    Route::controller(ReferenceController::class)->group(function () {
        Route::post('/reference/exercise/save', 'saveExercise');
        Route::post('/reference/session/save', 'saveSession');
        Route::get('/reference/session/{id}/base','getBaseSession');
    });

    Route::controller(InstanceController::class)->group(function () {
        Route::post('/instance/session/save', 'saveSessionInstance');
        Route::get('/instance/exercise/data/{exercise_id}','getExerciseData');  // data for visuals
        Route::get('/instance/exercise/{exercise_id}','getExerciseInstances');  // raw instances
        Route::get('/instance/exercise/{exercise_id}/{session_id}','getExerciseInstances');  // raw instances
    });

});

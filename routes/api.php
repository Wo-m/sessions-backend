<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\InstanceController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\UserController;
use App\Models\Exercise;
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
    Route::get('/test', function (){
        return 'authed';
    });

    Route::post('/exercise', [ReferenceController::class, 'saveExercise']);
    Route::post('/session', [ReferenceController::class, 'saveSession']);
    Route::post('/instance/session/save', [InstanceController::class, 'saveSessionInstance']);
});

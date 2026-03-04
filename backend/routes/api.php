<?php

use App\Http\Controllers\DeedCommentController;
use App\Http\Controllers\DeedController;
use App\Http\Controllers\OtherTableDataController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', fn(Request $request) => $request->user()->load('office_id'));
    Route::delete('/user/logout', [UserController::class, 'logout']);
    //my deed comments route
    Route::get('/deed-comments/my', [DeedCommentController::class, 'myComments']);
});
// Other data for form options
Route::get('/other-table-data', [OtherTableDataController::class, 'index']);
Route::get('/users-information', [OtherTableDataController::class, 'usersInformations']);


// User routes
Route::post('/user/register', [UserController::class, 'register']);

Route::post('/user/login', [UserController::class, 'login']);

Route::get('/user/draft/{user}', [UserController::class, 'userDraft']);


// Deed Table routes
Route::get('/deed/{deed_type}', [DeedController::class, 'index']);

Route::get('/deed/detail/{deed}', [DeedController::class, 'show']);

Route::delete('/deed/detail/{deed}', [DeedController::class, 'destroy']);

Route::post('/deed', [DeedController::class, 'store']);

Route::put('/deed/{deed}', [DeedController::class, 'update']);


//Deed Comment routes
Route::post('/deed-comment', [DeedCommentController::class, 'store']);

<?php

use App\Http\Controllers\DeedController;
use App\Http\Controllers\OtherTableDataController;
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

Route::get('/deed/{deed_type}', [DeedController::class, 'index']);

Route::get('/deed/detail/{deed}', [DeedController::class, 'show']);

Route::delete('/deed/detail/{deed}', [DeedController::class, 'destroy']);

Route::post('/deed', [DeedController::class, 'store']);

// Other data for form options
Route::get('/other-table-data', [OtherTableDataController::class, 'index']);


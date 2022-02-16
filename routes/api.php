<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\mathCalcController;

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
Route::middleware(['middleware' => 'api'])->group(function () {
    // 処理
    Route::get('/squared', [mathCalcController::class, 'squared']);
    Route::get('/cubic', [mathCalcController::class, 'cubic']);
    Route::get('/area_circle', [mathCalcController::class, 'area_circle']);
  });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

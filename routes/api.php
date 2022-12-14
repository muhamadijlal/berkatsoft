<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/index', [PostController::class, 'index']);
Route::post('/create', [PostController::class, 'create']);
Route::get('/edit/{id}', [PostController::class, 'edit']);
Route::post('/update/{id}', [PostController::class, 'update']);
Route::get('/delete/{id}', [PostController::class, 'delete']);

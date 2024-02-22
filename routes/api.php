<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\AuthController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('get_list',[AuthController::class, 'get_list'])->name('get_list');
Route::post('post_list',[AuthController::class, 'post_list'])->name('post_list');
// Route::get('edit_list/{id}', [AuthController::class, 'edit'])->name('edit_list');
// Route::delete('/delete/{id}', [AuthController::class, 'delete'])->name('delete');   
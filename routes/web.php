<?php

use App\Http\Controllers\clientController;
// use DebugBar\DebugBar;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     // Debugbar::info("hello");
//     return view('welcome');
// });


Route::get('/', [clientController::class, "home"]);
Route::get('/client', [clientController::class, "index"]);
Route::get('/client/create', [clientController::class, "create"]);
Route::post('/client/store', [clientController::class, "store"]);
Route::get('/client/{id}/edit', [clientController::class, "edit"]);
Route::put('/client/{id}', [clientController::class, "update"]);
Route::delete('/client/{id}', [clientController::class, "destroy"]);
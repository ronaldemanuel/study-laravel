<?php

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

use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;

Route::get('/', [EventController::class, 'index']);

Route::get('/eventos/criar', [EventController::class, 'create'])->middleware('auth');
Route::get('/eventos/{id}', [EventController:: class, 'show']);
Route::post('/eventos', [EventController::class, 'store']);

Route::get('/contato', [ContactController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

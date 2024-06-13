<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\TodoController;
use App\Models\Todo;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TodoController::class, 'todo']);

Route::get('/completed', [TodoController::class, 'completed']);

Route::get('/destroy/{id}', [TodoController::class, 'destroy']);

Route::post('/todo', [TodoController::class, 'store']);

Route::post('/update/{id}', [TodoController::class, 'update']);

Route::get('/edit/{todo}', [TodoController::class, 'edit']);

Route::get('/complete/{todo}', [TodoController::class, 'complete']);

Route::get('/decomplete/{todo}', [TodoController::class, 'decomplete']);
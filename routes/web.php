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

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', [TodoController::class, 'index']);

Route::get('/destroy/{id}', [TodoController::class, 'destroy']);

Route::get('/update/{todo}', [TodoController::class, 'update']);

Route::post('/save/{todo}', [TodoController::class, 'save']); 

Route::post('/todo', [TodoController::class, 'store']);

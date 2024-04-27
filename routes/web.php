<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\SelectionController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/one', [SelectionController::class, 'one']);
Route::get('/oneInside', [SelectionController::class, 'oneInside']);

Route::get('/level1/read', [LetterController::class, 'read']);
Route::get('/level1/readB', [LetterController::class, 'readB']);
Route::get('/level1/readC', [LetterController::class, 'readC']);
Route::get('/level1/readD', [LetterController::class, 'readD']);
Route::get('/level1/selamat', [LetterController::class, 'selamat']);
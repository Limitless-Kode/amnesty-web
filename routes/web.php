<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\FormsController;

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
Route::get('/', [PagesController::class, 'index']);
Route::get('join', [PagesController::class, 'join']);
Route::post('join', [FormsController::class, 'join']);
Route::post('subscribe', [FormsController::class, 'subscribe']);
Route::post('contact_form', [FormsController::class, 'contact']);
Route::get('/resources/{query}', [PagesController::class, 'resources']);


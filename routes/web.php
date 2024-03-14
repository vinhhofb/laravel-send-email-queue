<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailConfigController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;

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
Route::get('/', [HomeController::class, 'index']);

Route::prefix('mail-config')->group(function () {
    Route::post('/add', [MailConfigController::class, 'add']);
});
Route::prefix('template')->group(function () {
    Route::post('/add', [TemplateController::class, 'add']);
});
Route::prefix('customer')->group(function () {
    Route::post('/add', [CustomerController::class, 'add']);
});
Route::prefix('send-mail')->group(function () {
    Route::post('/', [HomeController::class, 'sendMail']);
});

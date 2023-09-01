<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowFirst;
use App\Http\Controllers\Search;
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
Route::middleware(['guest'])->group(function () {
Route::get('/',ShowFirst::class);
Route::get('/login',[HomeController::class, 'login'])->name('login');

Route::post('/login_check',[HomeController::class, 'login_check'])->name('login_check');
});
Route::middleware(['auth','isAdmin'])->group(function () {
    Route::get('/qrcode',[HomeController::class, 'qrcode'])->name('qrcode');

    Route::post('/qrcode_create',[HomeController::class, 'qrcode_create'])->name('qrcode_create');
    Route::get('/delete/{id}',[HomeController::class, 'delete'])->name('delete');

});
Route::get('/user',[HomeController::class, 'user'])->name('user')->middleware('auth');
Route::get('/logout',[HomeController::class, 'logout'])->name('logout')->middleware('auth');
Route::post('search',Search::class)->name('search');

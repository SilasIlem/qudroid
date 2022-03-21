<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\chatController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Portfolios;
use App\Http\Controllers\SuperAdminController;
use App\Models\User;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashgame', function () {
        return view('dashgame');
    });

    Route::get('/port/{port?}/{owner_email?}', [Portfolios::class, 'index'])->name('port');

    Route::get('/dashboard', function () {
        return view('dashboard', ['users' => User::with('roles')->get()]);
    })->name('dashboard');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/gallery', function () {
        return view('gallery');
    })->name('gallery');

    Route::get('/calendar', function () {
        return view('calendar');
    })->name('calendar');

    Route::get('/builder', [Portfolios::class, 'build'])->name('builder');

    Route::post('/builder/addFile', [Portfolios::class, 'addFile'])->name('builder');

    Route::post('/builder/run', [Portfolios::class, 'run'])->name('builder');

    Route::post('/builder', [Portfolios::class, 'upload'])->name('builder');

    Route::get('/chats', [chatController::class, 'index'])->name('chats');
});

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/superadmin', [SuperAdminController::class, 'index'])->name('superadmin');

require __DIR__ . '/auth.php';

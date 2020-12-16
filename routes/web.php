<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DivitionController;
use App\Http\Controllers\MailNumberController;
use App\Http\Controllers\PermitController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::prefix('user')->group(function () {
    Route::get('index', [UsersController::class, 'index'])->name('user');
    Route::get('status', [UsersController::class, 'userOnlineStatus']);

    Route::get('{id}/detail', [UsersController::class, 'show'])->name('show.detail.user');

    Route::get('search', [UsersController::class, 'search'])->name('users.search');

    Route::get('create', [UsersController::class, 'create'])->name('add.user');
    Route::post('create', [UsersController::class, 'store']);
});

Route::prefix('divition')->group(function () {
    Route::get('index', [DivitionController::class, 'index'])->name('divition');
});

Route::prefix('mail')->group(function () {
    Route::get('index', [MailNumberController::class, 'index'])->name('outmail');

    Route::get('search', [MailNumberController::class, 'search'])->name('outmail.search');

    Route::get('create', [MailNumberController::class, 'create'])->name('outmail.create');
    Route::post('create', [MailNumberController::class, 'store']);

    Route::get('{id}/edit', [MailNumberController::class, 'edit'])->name('outmail.edit');
    Route::put('{id}/edit', [MailNumberController::class, 'update']);

    Route::delete('{id}/delete', [MailNumberController::class, 'destroy'])->name('outmail.delete');
});

Route::prefix('permit')->group(function () {
    Route::get('index', [PermitController::class, 'index'])->name('izin');
});


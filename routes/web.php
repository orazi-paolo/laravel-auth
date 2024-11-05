<?php

use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Guest\ProjectController as GuestProjectController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [GuestProjectController::class, 'index']);

Route::name('guest.')->group(function () {
    Route::resource('projects', GuestProjectController::class)->only(['index', 'show']);
});


Auth::routes();

Route::middleware('auth')->name('admin.')->prefix('admin')->group(function () {
    Route::resource('projects', AdminProjectController::class);
});
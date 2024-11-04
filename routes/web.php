<?php

use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::name('admin.project.')->prefix('admin/projects')->group(function () {
    Route::get('/', [AdminProjectController::class, 'index'])->name('index');
    Route::get('/create', [AdminProjectController::class, 'create'])->name('create');
    Route::post('/store', [AdminProjectController::class, 'store'])->name('store');
    Route::get('/{project}', [AdminProjectController::class, 'show'])->name('show');
    Route::put('/{project}', [AdminProjectController::class, 'update'])->name('update');
    Route::delete('/{project}', [AdminProjectController::class, 'destroy'])->name('destroy');
    Route::get('/{project}/edit', [AdminProjectController::class, 'edit'])->name('edit');
});
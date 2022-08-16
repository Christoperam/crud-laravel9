<?php

use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;


Route::get('/', [EmpleadoController::class, 'index'],function () {
    return view('admin.index');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');



Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
    ->name('login.destroy');


/*Route::get('/admin/home', [EmpleadoController::class, 'index'])
    ->name('admin.index');

Route::get('/admin/create', [EmpleadoController::class, 'create'])
    ->name('admin.create');

Route::post('/admin/add', [EmpleadoController::class, 'store'])
    ->name('admin.store');

Route::get('/admin/edit', [EmpleadoController::class, 'edit'])
    ->name('admin.edit');

Route::put('/admin/update', [EmpleadoController::class, 'update'])
    ->name('admin.update');

Route::post('/admin/destroy', [EmpleadoController::class, 'destroy'])
    ->name('admin.destroy');*/

Route::resource('admin', EmpleadoController::class);
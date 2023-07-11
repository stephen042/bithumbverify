<?php

use App\Http\Controllers\Handler;
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

Route::get('/', [Handler::class, "index"])->name('home')->middleware('guest');
Route::post('/', [Handler::class, "index"])->name('home.post')->middleware('guest');

Route::get('/cancel', [Handler::class, "cancel"])->name('cancel')->middleware('guest');
Route::get('/success', [Handler::class, "success"])->name('success')->middleware('guest');


// admin
Route::get('/admin/dashboard', [Handler::class, "dashboard"])->name('dashboard')->middleware('auth');
Route::get('/admin', [Handler::class, "dashboard"])->name('dashboard')->middleware('auth');

Route::delete('/admin/dashboard/{info}', [Handler::class, "Delete"])->name('delete')->middleware('auth');

Route::get('admin/create', [Handler::class, "create"])->name('create')->middleware('auth');
Route::post('admin/create', [Handler::class, "create"])->name('create.post')->middleware('auth');

Route::get('admin/edit/{info}', [Handler::class, "edit"])->name('edit')->middleware('auth');
Route::post('admin/edit/{info}', [Handler::class, "edit"])->name('edit.post')->middleware('auth');

Route::get('admin/login', [Handler::class, "login"])->name('login')->middleware('guest');
Route::post('admin/login', [Handler::class, "login"])->name('login.post')->middleware('guest');

Route::post('/admin/dashboard', [Handler::class, "logout"])->name('logout')->middleware('auth');
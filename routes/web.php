<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

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

Route::get('/', [App\Http\Controllers\SongController::class, 'index']);

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('/');

Route::get('/home', [App\Http\Controllers\SongController::class, 'index']);

Route::get('home/genre}', [SongController::class, 'update'])->name('home.genre');

Route::get('/queue', [App\Http\Controllers\QueueController::class, 'queue']);

Route::get('/playlist', [App\Http\Controllers\PlaylistController::class, 'index']);

Route::get('/queue', [App\Http\Controllers\QueueController::class, 'queue'])->name('queue');

Route::get('/queue/add/{id}', [App\Http\Controllers\QueueController::class, 'addSong'])->name('addSong');

Route::get('/queue/delete/{id}', [App\Http\Controllers\QueueController::class, 'removeSong'])->name('removeSong');

Route::get('/queue/clear', [App\Http\Controllers\QueueController::class, 'clearQueue'])->name('clearQueue');

Route::get('/song/detail/{id}', [SongController::class, 'songDetail']);

Auth::routes();

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageFormController;
use App\Http\Controllers\PageHomeController;
use App\Http\Controllers\PageListeController;

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

Route::get('/', [PageHomeController::class, 'index'])->name('index');
Route::get('/liste/kabul', [PageListeController::class, 'listeOk'])->name('liste.ok');
Route::get('/liste/red', [PageListeController::class, 'listeNo'])->name('liste.no');

Route::get('/listesil/{sil_id}', [PageListeController::class, 'listeSil'])->name('veri.sil');


Route::post('/formkaydet', [PageFormController::class, 'formsave'])->name('form.kaydet');

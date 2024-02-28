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
Route::post('/formkaydet', [PageFormController::class, 'formsave'])->name('form.kaydet');
Route::get('/frontListe/{kategori_id}', [PageListeController::class, 'kitap_liste'])->name('kitap.liste');
Route::get('/panel', [PageHomeController::class, 'panel_open'])->name('panel');
Route::get('/kitapsil/{sil_id}', [PageListeController::class, 'kitapsil'])->name('kitap.sil');
Route::get('/kitapguncelle/{guncelle_id}', [PageListeController::class, 'kitapguncelle'])->name('kitap.guncelle');
Route::post('/kitapguncelleform', [PageListeController::class, 'kitapguncelleform'])->name('form.guncel');
Route::get('/kitapislem', [PageListeController::class, 'yansit'])->name('kitap.islem.liste');





<?php

use App\Http\Controllers\SheetController;
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


Route::get('/', [SheetController::class, 'index'])->name('sheet.index');
Route::get('/sheets/{sheet}', [SheetController::class, 'show'])->name('sheet.show');

Route::get('/add', [SheetController::class, 'create'])->name('create.sheet');
Route::post('/add', [SheetController::class, 'store'])->name('store.sheet');

require __DIR__.'/auth.php';

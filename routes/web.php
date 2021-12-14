<?php

use App\Http\Controllers\SheetController;
use App\Http\Livewire\AddSheet;
use App\Http\Livewire\EditSheet;
use App\Http\Livewire\SheetIndex;
use App\Models\Sheet;
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


Route::get('/', SheetIndex::class)->name('sheet.index');
Route::get('/sheets/{sheet}', [SheetController::class, 'show'])->name('sheet.show');

Route::get('/add', AddSheet::class)->name('create.sheet');
Route::get('/edit', EditSheet::class)->name('edit.sheet');


require __DIR__.'/auth.php';

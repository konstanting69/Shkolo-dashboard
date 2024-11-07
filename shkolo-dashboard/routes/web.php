<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CellController;
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
    return view('welcome');
});


Route::get('/cell', [CellController::class, 'index'])->name('cells.index');
Route::get('/cell/{cell}/edit', [CellController::class, 'edit'])->name('cell.edit');
Route::put('/cell/{cell}/update', [CellController::class, 'update'])->name('cell.update');
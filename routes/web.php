<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PawnshopsController;
use App\Http\Controllers\ResponseController;
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

Route::get('/', [PawnshopsController::class, 'index'])->name('home');
Route::get('/login', function() {return view('login');})->name('login');
Route::post('/store', [PawnshopsController::class, 'store'])->name('store');
Route::post('/auth', [PawnshopsController::class, 'auth'])->name('auth');

Route::middleware(['isLogin', 'CekRole:petugas'])->group(function() { 
    Route::get('/data/petugas', [PawnshopsController::class, 'dataPetugas'])->name('data.petugas');
    Route::get('/response/edit/{pawnshop_id}', [ResponseController::class, 'edit'])->name('response.edit');
    Route::patch('/response/update/{pawnshop_id}', [ResponseController::class, 'update'])->name('response.update');
 });
 Route::middleware(['isLogin', 'CekRole:admin,petugas'])->group(function() {
     Route::get('/logout', [PawnshopsController::class, 'logout'])->name('logout');
 });
 Route::middleware(['isLogin', 'CekRole:admin'])->group(function() {
    Route::get('/data', [PawnshopsController::class, 'data'])->name('data');
    Route::delete('/destroy/{id}', [PawnshopsController::class, 'destroy'])->name('destroy');
    Route::get('/export/pdf', [PawnshopsController::class, 'exportPDF'])->name('export-pdf');
    Route::get('/export/pdf/{id}', [PawnshopsController::class, 'printPDF'])->name('print-pdf');
    Route::get('/export/excel', [PawnshopsController::class, 'exportExcel'])->name('export.excel');
   });
   ?>
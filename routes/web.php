<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PengajuanController;


Route::get('/pengajuan/create', [PengajuanController::class, 'create'])->name('pengajuan.create');
Route::post('/pengajuan/store', [PengajuanController::class, 'store'])->name('pengajuan.store');
Route::get('/pengajuan/approval', [PengajuanController::class, 'approval'])->name('pengajuan.approval');
Route::post('/pengajuan/approve/{id}', [PengajuanController::class, 'approve'])->name('pengajuan.approve');
Route::post('/pengajuan/reject/{id}', [PengajuanController::class, 'reject'])->name('pengajuan.reject');
Route::get('/', function () {
    return view('welcome');
});

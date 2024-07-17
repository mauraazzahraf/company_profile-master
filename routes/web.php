<?php

use App\Http\Controllers\StrukturOrganisasiController;
use App\Models\StrukturOrganisasi;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('index', ['datas' => StrukturOrganisasi::all()]);
});

Route::prefix('/struktur-organisasi')->group(function(){
    Route::get('/', [StrukturOrganisasiController::class, 'index'])->name('so.index');
    Route::get('/create', [StrukturOrganisasiController::class, 'tambah'])->name('so.tambah');
    Route::post('/create', [StrukturOrganisasiController::class, 'aksiTambah'])->name('so.create');
    Route::get('{id}/update', [StrukturOrganisasiController::class, 'update'])->name('so.update');
    Route::post('{id}/update', [StrukturOrganisasiController::class, 'aksiUpdate'])->name('so.update.action');
    Route::get('{id}/delete', [StrukturOrganisasiController::class, 'delete'])->name('so.delete');
});

<?php

use App\Http\Controllers\BerobatController;
use App\Http\Controllers\HamilController;
use App\Http\Controllers\KberencanaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
})->name('landingpage');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile',                          [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile',                        [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile',                       [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard/berobat',                [BerobatController::class, 'index'])->name('berobat.index');
    Route::get('/create-berobat',                   [BerobatController::class, 'create'])->name('berobat.create');
    Route::post('/store-berobat',                   [BerobatController::class, 'store'])->name('berobat.store');
    Route::get('/edit-berobat/{id}',                [BerobatController::class, 'edit'])->name('berobat.edit');
    Route::patch('/patch-berobat/{id}',             [BerobatController::class, 'update'])->name('berobat.update');
    Route::delete('/delete-berobat/{id}',           [BerobatController::class, 'destroy'])->name('berobat.delete');

    Route::get('/admin/keluarga-berencana',         [KberencanaController::class, 'index'])->name('kb.index');
    Route::get('/admin/create-kb',                  [KberencanaController::class, 'create'])->name('kb.create');
    Route::post('/admin/store-kb',                  [KberencanaController::class, 'store'])->name('kb.store');
    Route::get('/admin/edit-kb/{nik}',              [KberencanaController::class, 'edit'])->name('kb.edit');
    Route::put('/admin/patch-kb/{id}',              [KberencanaController::class, 'update'])->name('kb.update');
    Route::delete('/admin/delete-kb/{id}',          [KberencanaController::class, 'destroy'])->name('kb.delete');

    Route::get('/admin/ibu-hamil',                  [HamilController::class, 'index'])->name('hamil.index');
    Route::get('/admin/ibu-hamil/create',           [HamilController::class, 'create'])->name('hamil.create');
    Route::post('/admin/ibu-hamil/create',          [HamilController::class, 'store'])->name('hamil.store');
    Route::get('/admin/ibu-hamil/{nik}',            [HamilController::class, 'edit'])->name('hamil.edit');
    Route::put('/admin/ibu-hamil/update/{id}',      [HamilController::class, 'update'])->name('hamil.update');
    Route::delete('/admin/ibu-hamil/delete/{id}',   [HamilController::class, 'destroy'])->name('hamil.delete');
});

require __DIR__ . '/auth.php';

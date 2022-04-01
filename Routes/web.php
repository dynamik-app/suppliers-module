<?php

use Modules\Suppliers\Http\Controllers\SuppliersController;

Route::middleware('auth')->prefix('app/suppliers')->group(function() {
    Route::get('/', [SuppliersController::class, 'index'])->name('app.suppliers.index');
    Route::get('create', [SuppliersController::class, 'create'])->name('app.suppliers.create');
    Route::post('create', [SuppliersController::class, 'store'])->name('app.suppliers.store');
    Route::get('edit/{id}', [SuppliersController::class, 'edit'])->name('app.suppliers.edit');
    Route::patch('edit/{id}', [SuppliersController::class, 'update'])->name('app.suppliers.update');
    Route::delete('delete/{id}', [SuppliersController::class, 'destroy'])->name('app.suppliers.delete');
});

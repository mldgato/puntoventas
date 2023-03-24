<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::get('', [HomeController::class, 'index'])->name('admin.index');

Route::get('suppliers', function () {
    return view('admin.stocktaking.suppliers.index');
})->name('admin.stocktaking.suppliers.index');
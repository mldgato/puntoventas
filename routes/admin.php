<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::get('', [HomeController::class, 'index'])->name('admin.index');

Route::get('suppliers', function () {
    return view('admin.stocktaking.suppliers.index');
})->name('admin.stocktaking.suppliers.index');

Route::get('measures', function () {
    return view('admin.stocktaking.measures.index');
})->name('admin.stocktaking.measures.index');

Route::get('warehouses', function () {
    return view('admin.stocktaking.warehouses.index');
})->name('admin.stocktaking.warehouses.index');

Route::get('racks', function () {
    return view('admin.stocktaking.racks.index');
})->name('admin.stocktaking.racks.index');

Route::get('products', function () {
    return view('admin.stocktaking.products.index');
})->name('admin.stocktaking.products.index');
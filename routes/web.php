<?php

use App\Http\Controllers\TransaksiHarianController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('transaksi.index');
});

Route::resource('transaksi', TransaksiHarianController::class)
    ->except(['show']);
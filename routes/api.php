<?php

use App\Http\Controllers\MewaController;
use Illuminate\Support\Facades\Route;


Route::post('/animalnum/CamelApp/Data/SearchOwnerByBarcode', [MewaController::class, 'index'])->name('search_owners_by_barcode');

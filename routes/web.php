<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    $url = route('search_owners_by_barcode');
//
//    return sprintf('please use this url : <a href="%s" target="_blank">%s</a>', $url, $url);
//});

Route::view('/', 'instructions');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

// routes/web.php
Route::view('/', 'landing')->name('landing');
Route::view('/opsi-paket', 'opsi-paket')->name('opsi-paket');
Route::view('/faq', 'faq')->name('faq');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// routes/web.php
Route::get('/myskill', function () {
    return view('myskill');
})->name('myskill');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/portofolio', function () {
    return view('portofolio');
})->name('portofolio');


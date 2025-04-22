<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/cv/english', function () {
    return view('curriculum_vitae.eng');
})->name('cv.english');

Route::get('/cv/spanish', function () {
    return view('curriculum_vitae.esp');
})->name('cv.spanish');

Route::get('/cv/arabic', function () {
    return view('curriculum_vitae.ar');
})->name('cv.arabic');

Route::get('/art/chronology', function () {
    return view('art.chronology');
})->name('art.chronology');

Route::get('/articles', function () {
    return view('articles.index');
})->name('articles.index');

Route::get('/art/available', function () {
    return view('art.available');
})->name('art.available');
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(view: 'index');
})->name('home');

Route::get('/english_cv', function () {
    return view(view: 'curriculum_vitae.eng');
})->name('english_cv');

Route::get('/art_chronology', function () {
    return view(view: 'chronology.art_chronology');
})->name('chronology');

Route::get('/articles', function () {
    return view(view: 'articles.articles');
})->name('articles');
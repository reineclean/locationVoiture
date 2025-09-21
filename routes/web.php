<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('accueil'); // affichera accueil.blade.php
});

Route::get('/conecter', function () {
    return view('conecter'); // affichera contact.blade.php
});

Route::get('/inscription', function () {
    return view('inscription'); // affichera location.blade.php
});

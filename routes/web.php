<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('bloglist');
});


Route::get('/details', function() {
    return view('layouts/details');
});
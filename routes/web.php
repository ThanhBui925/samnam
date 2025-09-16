<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client'); // Client layout
});

Route::get('/admin/{any?}', function () {
    return view('admin'); // Admin layout
})->where('any', '.*');



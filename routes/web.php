<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Hello Fortify!";
})->middleware(['auth']);

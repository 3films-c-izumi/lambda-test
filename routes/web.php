<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\FormController;

Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');

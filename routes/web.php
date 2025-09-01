<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [FormController::class, 'ShowForm'])->name('form');

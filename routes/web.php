<?php

use App\Http\Controllers\FormProcessor;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::match(['get', 'post'], '/userform', [FormProcessor::class, 'index']);

Route::post('/store_form', [FormProcessor::class, 'store']);

Route::get('/hello/{firstname}', [FormProcessor::class, 'hello'])->name('hello'); 
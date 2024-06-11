<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UKMController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ukm', [UKMController::class, 'index']);

Route::get('/kepengurusan', function () {
    return view('kepengurusan');
});

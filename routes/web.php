<?php

use App\Http\Controllers\KycRequestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kyc', [KycRequestController::class, 'create']);
Route::post('/kyc', [KycRequestController::class, 'store']);
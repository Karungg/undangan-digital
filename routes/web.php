<?php

use Illuminate\Support\Facades\Route;

Route::get('', [\App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');
Route::get('invitation', [\App\Http\Controllers\InvitationController::class, 'index'])
    ->name('invitation');

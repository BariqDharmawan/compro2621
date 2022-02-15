<?php

use App\Http\Controllers\HeaderContentController;
use App\Http\Controllers\OurFeatureController;
use App\Http\Controllers\OurPackageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::resource('our-feature', OurFeatureController::class);
    Route::resource('header-content', HeaderContentController::class)->only('index', 'update');
    Route::resource('our-package', OurPackageController::class);
    Route::resource('testimony', TestimonyController::class);
    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
});

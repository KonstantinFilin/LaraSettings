<?php

use KonstantinFilin\LaraSettings\Http\Controllers\SettingsController;

Route::middleware(['web'])->prefix("larasettings")->name("larasettings.")->group(function () {
    Route::get('/', [SettingsController::class, 'index'])->name('index');
    Route::post('/save', [SettingsController::class, 'save'])->name('save');
});

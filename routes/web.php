<?php

use Illuminate\Support\Facades\Route;
use Modules\MMG\Http\Controllers\MMGController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('mmgs', MMGController::class)->names('mmg');
});

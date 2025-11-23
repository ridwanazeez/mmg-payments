<?php

use Illuminate\Support\Facades\Route;
use Modules\MMG\Http\Controllers\MMGController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('mmgs', MMGController::class)->names('mmg');
});

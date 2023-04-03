<?php

use App\Http\Controllers\TestMailController;
use Illuminate\Support\Facades\Route;

Route::prefix('/teacher')->group(function () {
    Route::get('/dashboard', function () {
        echo "HEllo";
    });

    
});

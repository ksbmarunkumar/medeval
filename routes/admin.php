<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function () {
    Route::get('/dashboard', function(){
        echo "HEllo";
    });
   
});
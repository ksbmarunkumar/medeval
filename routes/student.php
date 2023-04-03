<?php

use App\Http\Controllers\TestMailController;
use Illuminate\Support\Facades\Route;

 Route::prefix('/student')->group(function () {
     Route::get('/dashboard', function(){
        return view('front-layout.base-layout');
     });
    
     Route::get('/send-mail', [TestMailController::class, 'send']);
 });
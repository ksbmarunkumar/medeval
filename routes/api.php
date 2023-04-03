<?php

use App\Http\Controllers\Api\Auth\AuthController;

use Illuminate\Support\Facades\Route;



/*  
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::post('login',[AuthController::class,'login']);
// Route::post('profile',[AuthController::class,'get_profile']);
// Route::post('pictureUpdate',[AuthController::class,'profile_picture_update']);
// Route::get('getBanner',[BannerController::class,'get_banner']);
// Route::post('forgotPassword',[AuthController::class,'forgotPassword']);
// Route::post('resetPassword',[AuthController::class,'resetPassword']);
// Route::post('profile-update', [AuthController::class, 'profile_edit']);
// Route::get('getFaq',[FaqController::class,'get_faq']);
// Route::get('get-notification',[NotificationController::class,'get_notify']);
// Route::post('update-notification',[NotificationController::class,'update_notify']);

Route::middleware(['passport.verify'])->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('profile', [AuthController::class, 'getProfile']);
 
});
// 'auth:api' , 

Route::post('login', [AuthController::class, 'login']);

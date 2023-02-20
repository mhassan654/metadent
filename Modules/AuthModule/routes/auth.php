<?php

/**
 **Created by MUWONGE HASSAN on 21/01/2022
 *Github: https://github.com/mhassan654
 *LinkedIn: https://www.linkedin.com/in/hassan-muwonge-4a4592144
 *email: hassansaava@gmail.com
 *phone: +256704348792
 *website: https://muwongehassan.com
 */

use App\Http\Controllers\SmsController;
use Illuminate\Support\Facades\Route;
use Metadent\AuthModule\Http\Controllers\Api\AuthController;



    Route::post("login", [AuthController::class, "two_factor_login"]);

    Route::post("otp/send", [AuthController::class, "send_phone_otp"]);

    // Route::post('2fa', [TwoFAController::class, "store"]);

    Route::post('2fa', [AuthController::class, "verify_2fa_and_login"]);

    // Route::post('verify/{code}', [\App\Http\Controllers\Api\v2\VerificationController::class, "verification_confirmation"]);

    Route::group(['middleware' => ['auth:api', 'XSS']], function () {

        // Check authenticated user route
        Route::get('me', [AuthController::class, 'me']);

        // Refresh authenticated user token route
        Route::post('refresh', [AuthController::class, 'refresh']);

        // Logout user route
        Route::post('logout', [AuthController::class, "destroy"]);
    });
    Route::post('verify-email', [AuthController::class, "verify"]);

    Route::post("test_qr_code_email", [AuthController::class, "test_qr_code"]);


<?php

use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function (){
//    Route::apiResource('/taa', \App\Http\Controllers\Api\V1\TaaController::class);
    Route::get('/taa', [\App\Http\Controllers\Api\V1\TaaController::class,'index']);
    Route::post('/taa', [\App\Http\Controllers\Api\V1\TaaController::class,'store']);
    Route::get('/taa/{id}', [\App\Http\Controllers\Api\V1\TaaController::class,'show']);
    Route::put('/taa/{id}', [\App\Http\Controllers\Api\V1\TaaController::class,'update']);
    Route::delete('/taa/{id}', [\App\Http\Controllers\Api\V1\TaaController::class,'destroy']);
    Route::patch('/taa/{id}', [\App\Http\Controllers\Api\V1\TaaController::class,'complete']);

});
?>

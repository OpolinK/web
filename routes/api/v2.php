<?php

use Illuminate\Support\Facades\Route;

Route::prefix('v2')->middleware('auth:sanctum')->group(function (){
//    Route::apiResource('/taa', \App\Http\Controllers\Api\V2\TaaController::class);
    Route::get('/taa', [\App\Http\Controllers\Api\V2\TaaController::class,'index']);
    Route::post('/taa', [\App\Http\Controllers\Api\V2\TaaController::class,'store']);
    Route::get('/taa/{id}', [\App\Http\Controllers\Api\V2\TaaController::class,'show']);
    Route::put('/taa/{id}', [\App\Http\Controllers\Api\V2\TaaController::class,'update']);
    Route::delete('/taa/{id}', [\App\Http\Controllers\Api\V2\TaaController::class,'destroy']);
    Route::patch('/taa/{id}', [\App\Http\Controllers\Api\V2\TaaController::class,'complete']);

});
?>

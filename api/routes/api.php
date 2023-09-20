<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DigimonController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(DigimonController::class)->group(function (){
    Route::get('/digimons', 'index');
    Route::post('/digimon', 'store');
    Route::get('/digimon/{id}', 'show');
    Route::put('/digimon/{id}', 'update');
    Route::delete('/digimon/{id}', 'destroy');

});
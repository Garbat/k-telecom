<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\EquipmentTypeController;

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

Route::group(['prefix'=>'equipment'], function(){
    Route::get('', [EquipmentController::class, 'index'])->name('equipment.index')->middleware('auth');
    Route::get('/{id}', [EquipmentController::class, 'getById'])->name('equipment.getById')->middleware('auth');
    Route::post('', [EquipmentController::class, 'create'])->name('equipment.create')->middleware('auth');
    Route::put('/{id}', [EquipmentController::class, 'update'])->name('equipment.update')->middleware('auth');
    Route::delete('/{id}', [EquipmentController::class, 'destroy'])->name('equipment.destroy')->middleware('auth');
});

Route::get('equipment-type', [EquipmentTypeController::class, 'getTypes'])->name('equipment.getTypes')->middleware('auth');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OblastController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ControllerSum;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/oblast', [OblastController::class, 'index']);
Route::get('/people', [PersonController::class, 'index']);
Route::get('/add', [PersonController::class, 'create']);
Route::post('/add', [PersonController::class, 'store'])->name('person.store');
Route::get('/api/rayons/{oblast_id}', [RayonController::class, 'byOblast']);


// Route::get('/sum', [ControllerSum::class, 'index']);
// Route::post('/sum', [ControllerSum::class, 'calculate']);

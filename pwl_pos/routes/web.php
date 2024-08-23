<?php

use App\Http\Controllers\LevelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;


Route::get('/level',[LevelController::class,'index']);
Route::get('/kategori',[KategoriController::class,'index']);
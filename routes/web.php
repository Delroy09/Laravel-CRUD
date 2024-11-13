<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/',[StudentController::class,'index']);


Route::get('/delete',[StudentController::class,'index2']);

Route::post('/store',[StudentController::class,'store']);

Route::post('/update/{student}',[StudentController::class,'update']);

Route::post('/delete/{student}',[StudentController::class,'destroy']);

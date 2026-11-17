<?php

use App\Http\Controllers\petugasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


route::get('/login', [petugasController::class, 'login']);
route::post('/login', [petugasController::class, 'prosesLogin']);
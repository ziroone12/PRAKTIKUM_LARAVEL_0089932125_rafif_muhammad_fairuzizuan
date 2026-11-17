<?php

use App\Http\Controllers\petugasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


route::get('/login', [petugasController::class, 'login']);
route::post('/login', [petugasController::class, 'prosesLogin']);
route::get('/logout', [petugasController::class, 'logout']);

route::get('/dashboard', function (){
    return view('dashboard');
});

route::get('register', [petugasController::class, 'register']);
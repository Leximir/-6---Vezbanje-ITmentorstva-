<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $ocjene = \App\Models\Ocjene::all();
    return view('welcome' , compact('ocjene'));
});

Route::view('/dodaj-ocjenu' , 'addGrade');
Route::post('/add-user-grade' , [\App\Http\Controllers\OcjeneController::class , 'addGrade']);

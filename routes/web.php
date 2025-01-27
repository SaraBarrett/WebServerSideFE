<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function(){
    return '<h1>Olá Turma de Front ENd</h1>';
});

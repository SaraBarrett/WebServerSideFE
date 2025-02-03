<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/hello', function(){
    return '<h1>Olá Turma de Front ENd</h1>';
})->name('hello');

Route::get('/home', [HomeController::class, 'returnViewHome'])->name('home');


//rotas de users
Route::get('/users',[UserController::class, 'returnAllUsersView'])->name('users.all');

Route::get('/add-users', [UserController::class, 'returnAddUserView'])->name('users.add');

Route::get('/insert-user-db', [UserController::class, 'insertUserIntoDB']);

Route::get('/update-user-db', [UserController::class, 'updateUserIntoDB']);

Route::get('/delete-user-db', [UserController::class, 'deleteUserFromDB']);


//rotas de tasks
Route::get('/tasks',[TaskController::class, 'returnAllTasksView'])->name('tasks.all');

Route::get('/hello/{name}', function($name){
    return '<h1>Olá '.$name.'</h1>';
});

Route::fallback(function(){
    return "<h1>Não fujas, volta <a href=".route('hello')." >aqui</a></h1>";
});

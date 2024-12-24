<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/register', [UserController::class, 'showRegistrationForm']);
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/login', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login'])->name('login');

// PROJECTS ROUTES
Route::prefix('projects')->group(function (){
    Route::post('insert', [ProjectsController::class, 'insert'])->name('projects.insert');
    Route::post('update/{id}', [ProjectsController::class, 'update'])->name('projects.update');
    Route::get('delete/{id}', [ProjectsController::class, 'delete'])->name('projects.delete');
});

// TASKS ROUTES
Route::prefix('tasks')->group(function (){
    Route::post('insert', [TasksController::class, 'insert'])->name('tasks.insert');
    Route::post('update/{id}', [TasksController::class, 'update'])->name('tasks.update');
    Route::get('delete/{id}', [TasksController::class, 'delete'])->name('tasks.delete');
    Route::post('toggle-completion/{id?}', [TasksController::class, 'toggleCompletion'])->name('tasks.toggleCompletion');
    Route::get('filter', [TasksController::class, 'filter'])->name('tasks.filter');
    Route::post('update-priority', [TasksController::class, 'updatePriority'])->name('tasks.updatePriority');
});

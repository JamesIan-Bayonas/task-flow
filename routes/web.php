<?php

// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskController;

// Member 1 (Bayonas): Basic Logic Route
Route::get('/', DashboardController::class)->name('dashboard');

// Member 2 (Calago): Resourceful CRUD Routes (Generates 7 routes instantly)
Route::resource('tasks', TaskController::class);

// Member 3 (Bernal): API/JSON Route
Route::get('/api/tasks', [TaskController::class, 'apiIndex']);
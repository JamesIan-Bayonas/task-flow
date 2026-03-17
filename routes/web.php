<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\NoteController;

// 1. OVERRIDE: Redirect the default homepage to our new Notes app
Route::get('/', function () {
    return redirect('/hello');
});

// 2. Member 1 (Bayonas): The Hello World Route
Route::get('/hello', [HelloController::class, 'index']);

// 3. Member 3 (Bernal): The Resourceful CRUD Routes
Route::resource('notes', NoteController::class);
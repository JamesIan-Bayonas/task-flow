<?php

// app/Http/Controllers/DashboardController.php
namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Task; // 1. Import the Task model

class DashboardController extends Controller {
    
    public function __invoke(): View {
        // 2. Query the database dynamically
        $stats = [
            'active'    => Task::where('is_done', false)->count(),
            'completed' => Task::where('is_done', true)->count(),
            'total'     => Task::count() // Optional: A nice extra metric!
        ];

        // 3. Pass the dynamic data to the view
        return view('dashboard', compact('stats'));
    }
}
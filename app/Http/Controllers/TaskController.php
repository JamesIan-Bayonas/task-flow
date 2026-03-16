<?php

// app/Http/Controllers/TaskController.php
namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // 1. Read: Fetch real data from the database
    public function index() {
        $tasks = Task::latest()->get(); 
        return view('tasks.index', compact('tasks'));
    }

    // 2. Create: Handle the form submission
    public function store(Request $request) {
        // Validate the incoming data
        $request->validate(['title' => 'required|min:3|max:255']);
        
        // Save to database
        Task::create(['title' => $request->title]);

        // Redirect back to the page
        return back(); 
    }

    // 3. Update: Toggle the 'is_done' status
    public function update(Request $request, Task $task) {
        // We simply flip the current boolean status
        $task->update([
            'is_done' => !$task->is_done 
        ]);

        return back(); // Refresh the page
    }

    // 4. Destroy: Delete the record from the database
    public function destroy(Task $task) {
        $task->delete();

        return back(); // Refresh the page
    }


}
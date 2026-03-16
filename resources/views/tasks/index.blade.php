<x-layout title="Manage Tasks">
    
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-slate-800">Your Task List</h1>
    </div>

    <x-card title="Add a New Task">
        <form action="{{ route('tasks.store') }}" method="POST" class="flex gap-4 items-start">
            @csrf 
            <div class="flex-1">
                <input type="text" name="title" placeholder="What needs to be done today?" 
                       class="w-full border border-slate-300 px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition shadow-sm">
                @error('title')
                    <span class="text-red-500 text-sm mt-1 block font-medium">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="bg-indigo-600 text-white font-medium px-6 py-3 rounded-lg hover:bg-indigo-700 shadow-md transition transform hover:scale-105">
                + Add Task
            </button>
        </form>
    </x-card>

    <div class="space-y-4">
        @forelse($tasks as $task)
            <div class="bg-white shadow-sm border border-slate-200 rounded-xl p-5 flex justify-between items-center hover:shadow-md transition">
                
                <div class="flex items-center gap-4">
                    <div class="w-3 h-3 rounded-full {{ $task['is_done'] ? 'bg-emerald-500' : 'bg-amber-400 animate-pulse' }}"></div>
                    <h3 class="text-lg font-medium {{ $task['is_done'] ? 'text-slate-400 line-through' : 'text-slate-700' }}">
                        {{ $task['title'] }}
                    </h3>
                </div>

                <div class="flex gap-3">
                    <form action="{{ route('tasks.update', $task) }}" method="POST">
                        @csrf @method('PATCH')
                        <button type="submit" class="text-sm font-medium px-4 py-2 rounded-lg transition {{ $task['is_done'] ? 'bg-slate-100 text-slate-600 hover:bg-slate-200' : 'bg-emerald-100 text-emerald-700 hover:bg-emerald-200' }}">
                            {{ $task['is_done'] ? 'Undo' : 'Complete' }}
                        </button>
                    </form>

                    <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-sm font-medium bg-red-50 text-red-600 px-4 py-2 rounded-lg hover:bg-red-100 transition">
                            Delete
                        </button>
                    </form>
                </div>

            </div>
        @empty
            <div class="text-center py-12 bg-white rounded-xl border border-dashed border-slate-300">
                <p class="text-slate-500 text-lg">No tasks found. You're all caught up!</p>
            </div>
        @endforelse
    </div>

</x-layout>
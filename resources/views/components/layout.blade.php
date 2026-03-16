<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'TaskFlow' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style> body { font-family: 'Inter', sans-serif; } </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased min-h-screen">
    
    <nav class="bg-indigo-600 shadow-lg">
        <div class="max-w-5xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-white font-bold text-2xl tracking-tight flex items-center gap-2">
                ✨ TaskFlow
            </div>
            <div class="space-x-2">
                <a href="{{ route('dashboard') }}" class="text-indigo-100 hover:text-white px-3 py-2 rounded-md transition font-medium">Dashboard</a>
                <a href="{{ route('tasks.index') }}" class="bg-indigo-500 hover:bg-indigo-400 text-white px-4 py-2 rounded-lg transition font-medium shadow-sm">Manage Tasks</a>
            </div>
        </div>
    </nav>

    <main class="max-w-5xl mx-auto px-6 py-10">
        {{ $slot }}
    </main>

</body>
</html>
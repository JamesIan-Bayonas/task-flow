<x-layout title="Dashboard Overview">
    
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-slate-900">Welcome back, Team! 👋</h1>
        <p class="text-slate-500 mt-2">Here is an overview of your project's current status.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 flex flex-col justify-center items-center hover:-translate-y-1 transition-transform">
            <span class="text-slate-400 text-sm font-bold uppercase tracking-wider mb-2">Total Tasks</span>
            <span class="text-5xl font-extrabold text-indigo-600">{{ $stats['total'] }}</span>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 flex flex-col justify-center items-center hover:-translate-y-1 transition-transform">
            <span class="text-slate-400 text-sm font-bold uppercase tracking-wider mb-2">Active</span>
            <span class="text-5xl font-extrabold text-amber-500">{{ $stats['active'] }}</span>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 flex flex-col justify-center items-center hover:-translate-y-1 transition-transform">
            <span class="text-slate-400 text-sm font-bold uppercase tracking-wider mb-2">Completed</span>
            <span class="text-5xl font-extrabold text-emerald-500">{{ $stats['completed'] }}</span>
        </div>

    </div>
</x-layout>
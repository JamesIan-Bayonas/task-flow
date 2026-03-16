<div class="bg-white shadow-sm border border-slate-200 rounded-xl p-6 mb-6 hover:shadow-md transition-shadow duration-300">
    @if(isset($title))
        <h2 class="text-lg font-semibold text-slate-700 border-b border-slate-100 pb-3 mb-4">
            {{ $title }}
        </h2>
    @endif
    <div class="text-slate-600">
        {{ $slot }}
    </div>
</div>
<span class="group relative">
    <button class="text-ternary border-b border-dotted border-ternary text-sm">
        {{ $trigger }}
    </button>
    <div class="absolute pt-1 rounded-md rounded-t-lg right-0 transform translate-x-40 mx-auto hidden group-hover:block z-50">
        <div class="border border-ternary rounded-md rounded-t-lg shadow-lg bg-primary w-full max-w-xs w-screen">
            <header class="font-semibold rounded-t-lg bg-secondary px-4 py-2">
                {{ $title }}
            </header>
            <div class="p-4 border-t border-ternary">
                {{ $slot }}
            </div>
        </div>
    </div>
</span>

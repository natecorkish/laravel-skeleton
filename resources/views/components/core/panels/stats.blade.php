<div class="border border-primary rounded-lg overflow-hidden">
    <div class="bg-primary p-4 flex flex-row justify-between items-center">
        <div class="flex flex-col">
            <span class="font-bold text-xl">Welcome, Nathaniel</span>
            <span class="text-sm">Free Account</span>
        </div>
        {{ $link ?? null }}
    </div>
    <div class="bg-ternary text-ternary-opposite p-4 grid grid-cols-3 gap-5">
        {{ $stats }}
    </div>
    <div class="bg-primary">
        {{ $slot }}
    </div>
</div>

<div class="bg-primary">
    <div class="bg-ternary py-6 px-4 sm:p-6 border border-secondary">
        <h3 class="text-lg leading-6 font-medium text-ternary-opposite-primary">
            {{ $title }}
        </h3>
        <p class="mt-1 text-sm text-ternary-opposite-secondary">
            {{ $description }}
        </p>
    </div>

    <div class="py-6 px-4 space-y-6 sm:p-6 border-secondary border-l border-r">
        {{ $slot }}
    </div>

    {{ $footer ?? null }}
</div>

<div class="col-span-6" {{ $attributes }}>
    <label class="block font-medium text-sm text-primary">
        {{ $label }}
    </label>

    <div
        class="relative z-0 mt-1 bg-secondary border-l border-r border-t border-primary rounded-lg cursor-pointer"
        {{--        x-data="{ selected: '{{ old($name) }}' }"--}}
    >
        {{ $slot }}
    </div>

    @if ($errors->has($name))
        <p class="text-sm text-red-600 mt-2">{{ $errors->first($name) }}</p>
    @endif
</div>

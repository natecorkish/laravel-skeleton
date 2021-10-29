<label
    class="w-full border-primary border-b inline-flex items-center relative px-4 py-3 inline-flex rounded-lg focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue rounded-b-none"
    for="{{ $for }}"
    {{ $attributes }}
>
    <div
        class="text-left opacity-50"
        :class="{ 'opacity-50': selected !== '{{ $value }}' }"
    >
        <div class="flex items-center">
            <div class="text-sm text-primary">
                {{ $title }}
            </div>
        </div>
        <div class="mt-2 text-xs text-secondary">
            {{ $description }}
        </div>
    </div>
    <input
        class="hidden"
        id="{{ $for }}"
        type="radio"
        name="{{ $name }}"
        value="{{ $value }}"
        x-on:click="selected = '{{ $value }}'"
        :checked="selected == '{{ $value }}'"
    >

    <!-- Selected icon !-->
    <svg
        x-cloak
        x-show="selected == '{{ $value }}'"
        class="ml-2 h-5 w-5 text-green-400"
        fill="none"
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2"
        stroke="currentColor"
        viewBox="0 0 24 24">
        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
    </svg>
</label>


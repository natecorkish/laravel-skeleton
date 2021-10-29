@props([
    'heading',
    'subheading',
    'width' => 'w-124'
])
<div class="relative" x-data="{ open: false }">
    <div x-show="open" @filter:results.window="open = !open"
        class="shadow fixed flex-1 flex flex-col justify-between top-0 right-0 bottom-0 z-10 {{ $width }} h-full">
        <div class="py-6 px-4 bg-blue-700 sm:px-6">
            <div class="flex items-center justify-between">
                <h2 class="text-lg font-medium text-white">
                    {{ $heading }}
                </h2>
                <div class="ml-3 h-7 flex items-center">
                    <button @click="open = false" class="bg-blue-700 rounded-md text-blue-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="mt-1">
                <p class="text-sm text-blue-300">
                    {{ $subheading }}
                </p>
            </div>
        </div>
        <div class="flex-1 flex flex-row justify-between bg-white">
            {{ $content }}
        </div>
    </div>
</div>

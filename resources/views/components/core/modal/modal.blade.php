<div x-show="open" class="absolute top-0 z-50 inset-0 overflow-y-auto">
    <div class="flex items-start justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div
            x-show="open"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-70"
            x-transition:leave="ease-in duration-300"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 bg-secondary opacity-70 transition-opacity"
            aria-hidden="true"></div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div x-show="open"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            class="inline-block align-bottom bg-primary rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl w-full">

            <!--
             ! ------------------------------------------------------------
             ! Header
             ! ------------------------------------------------------------
             !-->
            @isset($header)
                <div class="bg-ternary px-4 py-6 flex flex-col">
                    <span class="font-bold text-ternary-opposite-primary">
                        {{ $header['title'] }}
                    </span>
                    @isset($header['description'])
                        <span class="mt-px font-bold text-sm text-ternary-opposite-secondary">
                            {{ $header['description'] }}
                        </span>
                    @endisset
                </div>
            @endisset

            <!--
             ! ------------------------------------------------------------
             ! Body
             ! ------------------------------------------------------------
             !-->
            <div class="bg-primary px-6 py-2">
                {{ $slot }}
            </div>

            <!--
             ! ------------------------------------------------------------
             ! Footer
             ! ------------------------------------------------------------
             !-->
            @isset($footer)
                <div class="bg-ternary px-4 py-3 sm:px-6 sm:flex justify-end gap-2">
                    {{ $footer }}
                </div>
            @endisset
        </div>
    </div>
</div>

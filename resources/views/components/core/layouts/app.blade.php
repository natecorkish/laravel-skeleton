<x-core.layouts.core>

    <div class="mb-20 max-w-7xl mx-auto flex flex-col lg:flex-row">

        <!--
         ! ------------------------------------------------------------
         ! Toastr alerts
         ! ------------------------------------------------------------
         !-->
        <x-core.alerts.toastr></x-core.alerts.toastr>

        <div
            x-data="{ open: false }"
            @keydown.window.escape="open = false"
            class="grid grid-cols-10 gap-6"
        >
            <!--
             ! ------------------------------------------------------------
             ! Static sidebar for desktop
             ! ------------------------------------------------------------
             !-->
            <div class="block col-span-10 lg:col-span-2">
                <x-core.layouts.partials.sidebar></x-core.layouts.partials.sidebar>
            </div>

            <!--
             ! ------------------------------------------------------------
             ! Main content
             ! ------------------------------------------------------------
             !-->
            <div class="mt-32 lg:mt-0 col-span-10 lg:col-span-8 lg:pt-8">
                <div class="flex flex-col lg:flex-row gap-8 px-3">
                    <div class="w-full">
                        {{ $slot }}
                    </div>

                    @stack('rightbar')
                </div>
            </div>
        </div>
    </div>

</x-core.layouts.core>

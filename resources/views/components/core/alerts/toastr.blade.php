<div x-data="toastr()"
    @flash:success.window="
        title = event.detail.title;
        body = event.detail.body;
        if(event.detail.button) {
            button = event.detail.button;
        }
        show = true
    "
    x-init="setTimeout(() => show = false, 4000)"
    class="z-50 fixed inset-0 flex px-4 py-6 pointer-events-none p-6 items-start justify-end"
>

    <div x-cloak
        x-show="show"
        x-transition:enter="transform ease-out duration-300 transition"
        x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
        x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="max-w-md w-full bg-secondary shadow-lg rounded-lg pointer-events-auto flex ring-1 ring-black ring-opacity-5 divide-x divide-primary"
    >
        <div class="w-0 flex-1 flex items-center p-4">
            <div class="w-full">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-ternary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-3 w-0 flex-1 pt-0.5">
                        <p class="text-sm font-medium text-primary" x-text="title"></p>
                        <p class="mt-1 text-sm text-secondary" x-text="body"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex">
            <div class="flex flex-col divide-y divide-primary">
                <div class="h-0 flex-1 flex">
                    <button @click="show = false;"
                        class="w-full border-l border-secondary rounded-none rounded-tr-lg px-4 py-3 flex items-center justify-center text-sm font-medium text-primary hover:text-secondary">
                        {{ __('Close') }}
                    </button>
                </div>

                <template x-if="button">
                    <div class="h-0 flex-1 flex">
                        <button
                            x-text="button.text"
                            @click="button_action"
                            class="w-full border-l border-t border-primary rounded-none rounded-br-lg px-4 py-3 flex items-center justify-center text-sm font-medium text-primary hover:text-secondary">
                        </button>
                    </div>
                </template>
            </div>
        </div>
    </div>
</div>

<script>

    function toastr() {
        return {
            show: false,
            title: null,
            body: null,
            restore: false,
            button: [],

            button_action() {
                console.log(this.button.action)
                console.log(this.button.action.event)
                console.log(this.button.action.model)
                Livewire.emit(this.button.action.event, this.button.action,model)
            }
        }
    }

</script>

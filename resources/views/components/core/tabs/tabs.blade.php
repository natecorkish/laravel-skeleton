<div x-data="{
    tabs: {{ json_encode($tabs) }},
    selected: 0
}">
    <div class="sm:block overflow-x-auto no-scrollbar">
        <div class="border-b border-primary">
            <nav class="-mb-px flex" aria-label="Tabs">
                <template x-for="(tab, index) in tabs">
                    <span @click="selected = index" x-text="tab.title"
                        class="cursor-pointer mr-8 text-left  text-secondary hover:text-primary hover:border-ternary whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"
                        :class="{ 'border-ternary': index === selected, 'border-transparent': index !== selected }"
                    >
                    </span>
                </template>
            </nav>
        </div>
    </div>

    <div class="py-6">
        {{ $slot }}
    </div>
</div>

<script>
    function tabs() {
        return {
            tabs: @json($tabs),
            selected: 0
        }
    }
</script>

<div class="mt-1 bg-white rounded-md shadow-sm -space-y-px h-64 overflow-y-scroll">

    @foreach($items as $item)
        <div :class="{ 'border-gray-200': !(active === 0), 'bg-light-blue-50 border-light-blue-200 z-10': active === 0 }"
            class="relative border rounded-tr-md p-4 flex bg-light-blue-50 border-light-blue-200 z-10"
        >
            <div class="flex items-center h-5">
                <input name="{{ $name }}[]" type="radio"
                    @click="select(0)" @keydown.space="select(0)" @keydown.arrow-up="onArrowUp(0)"
                    @keydown.arrow-down="onArrowDown(0)"
                    class="h-4 w-4 text-light-blue-600 cursor-pointer focus:ring-light-blue-500 border-gray-300"
                    checked="">
            </div>
            <label for="settings-option-0" class="ml-3 flex flex-col cursor-pointer">
                <span :class="{ 'text-light-blue-900': active === 0, 'text-gray-900': !(active === 0) }" class="block text-sm font-medium text-light-blue-900">
                    Public access
                </span>
                <span :class="{ 'text-light-blue-700': active === 0, 'text-gray-500': !(active === 0) }" class="block text-sm text-light-blue-700">
                    This project would be available to anyone who has the link
                </span>
            </label>
        </div>
    @endforeach
</div>

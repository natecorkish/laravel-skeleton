<div class="sm:col-span-1" x-data="{ edit: false }" @refresh.window="edit = false">
    <dt class="text-sm font-medium text-secondary">
        {{ $label }}
        @include('core::components.tooltips.editable')
    </dt>
    <dd class="mt-1 text-sm text-primary" x-show="!edit" @click="edit = true">
        {{ $placeholder }}
    </dd>
    <dd class="mt-1 text-sm text-primary" x-show="edit">
        <x-core::forms.input
            wire:model.lazy="{{ $model }}"
            wire:keydown.enter="edit"
            @click.away="edit = false"
        ></x-core::forms.input>
        <x-core::forms.errors name="{{ $model }}"></x-core::forms.errors>
    </dd>
</div>

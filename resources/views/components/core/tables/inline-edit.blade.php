<div x-data="{ edit: false }" @refresh.window="edit = false">
    <div class="space-x-2" @click="edit = true" x-show="!edit">
        <span>{{ $placeholder }}</span>
        @include('core::components.tooltips.editable')
    </div>
    <x-core::forms.input
        x-show="edit"
        wire:model.lazy="{{ $model }}"
        wire:keydown.enter="save"
        @click.away="edit = false"
    ></x-core::forms.input>
</div>

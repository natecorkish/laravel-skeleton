@props(['disabled' => false, 'type' => 'text', 'color' => 'primary'])

<input {!! $attributes->merge([
    'class' => "input {$color}"
]) !!} type="{{ $type }}" {{ $disabled ? 'disabled' : '' }} >

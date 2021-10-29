@props(['disabled' => false, 'color' => 'primary'])

<select {!! $attributes->merge(['class' => "input {$color}"]) !!}
    {{ $disabled ? 'disabled' : '' }}
>
    {{ $options }}
</select>

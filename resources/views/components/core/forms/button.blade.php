@props(['dark' => false, 'color' => 'primary'])

<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => "button disabled:opacity-25 {$color}"
]) }}>
    {{ $slot }}
</button>

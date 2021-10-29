@props(['dark' => false])

<a {{ $attributes->merge(['class' => 'button disabled:opacity-25']) }}>
    {{ $slot }}
</a>

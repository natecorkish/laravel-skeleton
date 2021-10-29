@props(['value'])

<label {{ $attributes->merge(['class' => 'mb-2 block font-medium text-sm text-primary']) }}>
    {{ $value ?? $slot }}
</label>

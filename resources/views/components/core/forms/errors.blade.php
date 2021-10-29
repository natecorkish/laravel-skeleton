@if ($errors->has($name))
    <p class="text-sm text-red-600 mt-2">{{ $errors->first($name) }}</p>
@endif

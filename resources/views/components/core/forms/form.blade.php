<form {{ $attributes }} class="w-full">
    @csrf
    {{ $slot }}
</form>

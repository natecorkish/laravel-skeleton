<textarea
    {{ $attributes->merge(['type' => 'submit', 'class' => 'shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md']) }}
    rows="6"
>{{ $slot }}</textarea>

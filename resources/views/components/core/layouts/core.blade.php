<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="font-sans text-sm antialiased theme-light bg-secondary text-primary no-scrollbar"
    x-data="{ dark: localStorage.getItem('dark') === 'true'}"
    x-init="$watch('dark', val => localStorage.setItem('dark', val))"
    :class="{ 'theme-dark': dark, 'theme-light': dark === false }"
    x-cloak
>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!--
         ! ------------------------------------------------------------
         ! Main stylesheet
         ! ------------------------------------------------------------
         !-->
        <link href="{{ mix('css/app.css') }}?t={{ time() }}" rel="stylesheet" data-turbolinks-track="reload">

        <!--
         ! ------------------------------------------------------------
         ! Livewire styles
         ! ------------------------------------------------------------
         !-->
        @livewireStyles
    </head>
    <body class="antialiased bg-secondary">

        {{ $slot }}

        <!--
         ! ------------------------------------------------------------
         ! Livewire scripts
         ! ------------------------------------------------------------
         !-->
        @livewireScripts

        <!--
         ! ------------------------------------------------------------
         ! Main javascript
         ! ------------------------------------------------------------
         !-->
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>

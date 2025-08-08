<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('components.layouts.app.meta')

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        {{ $slot }}
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title inertia>{{ config('app.name', 'Buelino') }}</title>
        <!-- Scripts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="icon" href="public/images/favicon.png" type="image/x-icon">
        {{-- <link href="https://cdn.jsdelivr.net/npm/tom-select@2.0.0-rc.5/dist/css/tom-select.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/tom-select@2.0.0-rc.5/dist/js/tom-select.complete.min.js"></script> --}}
        @routes
        @vite('resources/js/app.js')
        @inertiaHead
    </head>
    <body>
        <div class="page">
            @inertia
        </div>
    </body>
</html>

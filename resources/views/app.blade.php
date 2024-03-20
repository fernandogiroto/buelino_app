<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google" content="notranslate">
    <title inertia>{{ config('app.name', 'Buelino') }}</title>
    <!-- Scripts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    {{-- Adicione a seção de fallback do service worker --}}
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('/service-worker.js')
                    .then(function(registration) {
                        console.log('ServiceWorker registrado com sucesso:', registration.scope);
                    }, function(err) {
                        console.log('Erro ao registrar o ServiceWorker:', err);
                    });
            });

            // Adicionar o listener para fallback offline
            window.addEventListener('fetch', function(event) {
                event.respondWith(
                    caches.match(event.request)
                        .then(function(response) {
                            return response || fetch(event.request);
                        })
                        .catch(function() {
                            return caches.match('index.html');
                        })
                );
            });
        }
    </script>

    @routes
    @vite('resources/js/app.js')
    @inertiaHead
</head>
<body>
    @inertia
</body>
</html>

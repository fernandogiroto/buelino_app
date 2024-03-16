// Define o nome do cache
var cacheName = 'my-app-cache';

// Lista de arquivos para serem armazenados em cache
var filesToCache = [
    '/',
    '/index.html',
    '/styles/main.css',
    '/scripts/main.js'
    // Adicione mais arquivos que você deseja armazenar em cache
];

// Instalação do service worker
self.addEventListener('install', function (event) {
    event.waitUntil(
        caches.open(cacheName)
            .then(function (cache) {
                return cache.addAll(filesToCache);
            })
    );
});

// Intercepta solicitações e serve os arquivos armazenados em cache
self.addEventListener('fetch', function (event) {
    event.respondWith(
        caches.match(event.request)
            .then(function (response) {
                // Cache hit - return response
                if (response) {
                    return response;
                }
                return fetch(event.request);
            })
    );
});

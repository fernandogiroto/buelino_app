// Instalar o Service Worker
self.addEventListener('install', event => {
    console.log('Service Worker instalado');
});

// Ativar o Service Worker
self.addEventListener('activate', event => {
    console.log('Service Worker ativado');
});

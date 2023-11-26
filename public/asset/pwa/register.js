if ('serviceWorker' in navigator && navigator.onLine) {
        navigator.serviceWorker.register('/public/service-worker.js')
        .then((reg) => {
            console.log('Service worker registered -->', reg);
        }, (err) => {
            console.error('Service worker not registered -->', err);
        });
    }
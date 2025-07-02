<?php

// config/export.php

return [
    /*
     * These paths will be exported to static files.
     */
    'paths' => [
        '/',          // Sesuai dengan Route::get('/', ...) ->name('home')
        '/myskill',   // Sesuai dengan Route::get('/myskill', ...) ->name('myskill')
        '/portofolio', // Sesuai dengan Route::get('/portofolio', ...) ->name('portofolio')
        '/contact',   // Sesuai dengan Route::get('/contact', ...) ->name('contact')
    ],

    /*
     * The filename that will be used for the exported page.
     */
    'filename' => 'index.html',

    /*
     * The path where the static files will be stored.
     */
    'target_path' => public_path('exported'),

    // ... bagian konfigurasi lainnya ...
];
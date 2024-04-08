<?php
/**
 * Created by PhpStorm.
 * User: m.karimi
 * Date: 12/23/2018
 * Time: 10:49 AM
 */
return [
    'format'           => 'A4', // See https://mpdf.github.io/paging/page-size-orientation.html
    'author'           => 'mahdi karimi',
    'subject'          => 'This Document will explain the whole universe.',
    'keywords'         => 'PDF, Laravel, Package, Peace', // Separate values with comma
    'creator'          => 'Laravel Pdf',
//    'display_mode'     => 'fullpage',
    'font_path' => base_path('public/assets/css/fonts/tanha-font-v0.9/Farsi-Digits'),
    'font_data' => [
        'Tanha-FD' => [
            'R'  => 'Tanha-FD.ttf',    // regular font
            'B'  => 'Tanha-FD.ttf',       // optional: bold font
            'I'  => 'Tanha-FD.ttf',     // optional: italic font
            'BI' => 'Tanha-FD.ttf' ,// optional: bold-italic font
            'useOTL' => 0xFF,    // required for complicated langs like Persian, Arabic and Chinese
            'useKashida' => 85,  // required for complicated langs like Persian, Arabic and Chinese
        ]
        // ...add as many as you want.
    ]
    // ...

];
#https://github.com/niklasravnsborg/laravel-pdf
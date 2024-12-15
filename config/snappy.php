<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Snappy PDF / Image Configuration
    |--------------------------------------------------------------------------
    |
    | This configuration contains settings for PDF and image generation.
    | Ensure the binary paths are correctly set in your environment file or 
    | directly in this configuration.
    |
    | Key Settings:
    | - 'enabled': Determines if the feature is active.
    | - 'binary': Path to the wkhtmltopdf or wkhtmltoimage executable. Spaces
    |   in the path are handled by wrapping the value in quotes.
    | - 'timeout': Set false for unlimited execution time.
    | - 'options': Additional command-line options passed to the binaries.
    |
    */

    'pdf' => [
        'enabled' => true,
        'binary'  => '"' . env('WKHTML_PDF_BINARY', 'C:/Program Files/wkhtmltopdf/bin/wkhtmltopdf.exe') . '"',
        'timeout' => false,
        'options' => [
            'enable-local-file-access' => true,
            'print-media-type' => true,
        ],
        'env' => [],
    ],

    'image' => [
        'enabled' => true,
        'binary'  => '"' . env('WKHTML_IMG_BINARY', 'C:/Program Files/wkhtmltopdf/bin/wkhtmltoimage.exe') . '"',
        'timeout' => false,
        'options' => [
            'enable-local-file-access' => true,
        ],
        'env' => [],
    ],

];

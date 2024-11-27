<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Elegant Salon') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        <style>
            :root {
                --gold: #d4af37;
                --black: #121212;
                --gray-dark: #2c2c2c;
                --gold-light: #f2e6c6;
            }
            body {
                background-color: var(--black);
                color: var(--gold-light);
            }
            .bg-gold {
                background-color: var(--gold);
            }
            .text-gold {
                color: var(--gold);
            }
            .bg-black {
                background-color: var(--black);
            }
            .text-gray-dark {
                color: var(--gray-dark);
            }
            a {
                color: var(--gold-light);
                transition: color 0.3s ease;
            }
            a:hover {
                color: var(--gold);
            }
        </style>
    </head>
    <body class="font-sans text-gold antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-black">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gold" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gray-dark shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
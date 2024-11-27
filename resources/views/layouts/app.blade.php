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
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&display=swap" rel="stylesheet">
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        
        <!-- Styles -->
        <style>
            :root {
                --gold: #d4af37;
                --black: #121212;
                --gray-dark: #2c2c2c;
                --gold-light: #f2e6c6;
                --white: #ffffff;
            }
            body {
                background: linear-gradient(to bottom, var(--black), var(--gold)); /* Gradient from black to white */
                color: var(--gold-light);
                font-family: 'Cormorant Garamond', serif;
            }
            .bg-gold {
                background-color: var(--gold);
            }
            .text-gold {
                color: var(--gold);
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
    <body class="font-sans antialiased">
        <div class="min-h-screen">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-gray-dark shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-gold">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="py-8 px-4 sm:px-6 lg:px-8">
                <div class="max-w-7xl mx-auto">
                    {{ $slot }}
                </div>
            </main>
            <x-toast />

            <!-- Footer -->
            <footer class="bg-gray-dark text-center py-4 text-sm text-gold-light">
                <p>&copy; {{ date('Y') }} Elegant Salon. All rights reserved.</p>
            </footer>
        </div>
        @livewireScripts
    </body>
</html>

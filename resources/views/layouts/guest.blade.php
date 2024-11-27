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
                font-family: 'Figtree', sans-serif;
            }

            .bg-gold {
                background-color: var(--gold-light);
            }

            .text-gold {
                color: var(--gold);
            }

            .bg-black {
                background-image: url('{{ asset('images/bg1.jpg') }}'); /* Set your background image */
                background-size: cover;
                background-position: center center;
                background-repeat: repeat;
                color: var(--gold-light);
                font-family: 'Figtree', sans-serif;
            }

            .text-gold{
                color: var(--gold);
            }

            a {
                color: var(--gold-light);
                transition: color 0.3s ease;
            }

            a:hover {
                color: var(--gold);
            }

            /* Centered content */
            .container {
                min-height: 50vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding-top: 4rem; /* Moves content down */
            }

            /* Logo */
            .logo {
                max-height: 100px;
                margin-bottom: 1rem; /* Adds space below the logo */
            }

            /* Form container */
            .form-container {
                width: 100%;
                max-width: 300px;
                background-color: var(--gray-dark);
                padding: 2rem;
                border-radius: 8px;
                box-shadow: none;
                text-align: center;
            }

            /* Button */
            .primary-button {
                background-color: var(--gold);
                color: var(--black);
                width: 100%;
                padding: 12px;
                border-radius: 8px;
                text-transform: uppercase;
                font-weight: bold;
            }

            .primary-button:hover {
                background-color: #b68c29;
                color: var(--gold-light);
            }
        </style>
    </head>
    <body class="font-sans text-gold antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-2 sm:pt-0 bg-black">
            <div>
                <a href="/">
                <img src="{{ asset('images/logo.png') }}" alt="Hair Salon Logo" class="h-100 mx-auto">
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-4 px-4 py-4 bg-gray-dark shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
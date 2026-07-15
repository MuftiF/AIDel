<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Custom Theme Fonts & Tailwind CDN -->
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
        <script src="{{ asset('js/tailwind-config.js') }}"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-surface text-on-surface font-sans antialiased">
        <div class="min-h-screen flex sm:justify-center items-center pt-6 sm:pt-0 relative overflow-hidden">
            <!-- Background Elements -->
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-primary-fixed rounded-full mix-blend-multiply filter blur-3xl opacity-50"></div>
            <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-secondary-fixed rounded-full mix-blend-multiply filter blur-3xl opacity-50"></div>

            <!-- Logo -->
            <div class="absolute top-8 left-8 flex items-center gap-2 z-20">
                <a href="/" class="flex items-center gap-2 hover:scale-105 transition-transform">
                    <span class="material-symbols-outlined text-primary text-3xl" style="font-variation-settings: 'FILL' 1;">landscape</span>
                    <span class="text-headline-md font-headline-md font-bold text-primary">TobaGuide</span>
                </a>
            </div>

            <!-- Auth Container (Wider) -->
            <div class="w-full sm:max-w-xl md:max-w-2xl mt-6 px-8 md:px-12 py-10 clay-card bg-white/80 backdrop-blur-md rounded-[32px] relative z-10 mx-4">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>

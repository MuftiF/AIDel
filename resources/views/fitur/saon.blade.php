    <!DOCTYPE html>
    <html class="light" lang="en">
    <head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>TobaGuide - Saon, Penerjemah AI</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
    <script src="{{ asset('js/tailwind-config.js') }}"></script>
    </head>
    <body class="bg-surface text-on-surface">
    <!-- Top App Bar -->
    <header class="bg-surface docked full-width top-0 z-50 flex justify-between items-center w-full px-container-padding py-sm sticky top-0 border-b border-surface-dim">
    <div class="flex items-center gap-4">
    <span class="material-symbols-outlined text-primary text-3xl" style="font-variation-settings: 'FILL' 1;">landscape</span>
    <span class="text-headline-md font-headline-md font-bold text-primary mr-4">TobaGuide</span>
    <nav class="hidden lg:flex items-center gap-6">
        <a class="flex items-center gap-2 text-on-surface-variant hover:text-primary transition-colors" href="{{ route('dashboard') }}">
            <span class="material-symbols-outlined text-xl">map</span> Map
        </a>
        <a class="flex items-center gap-2 text-on-surface-variant hover:text-primary transition-colors" href="#">
            <span class="material-symbols-outlined text-xl">sunny_snowing</span> Weather
        </a>
        <a class="flex items-center gap-2 text-on-surface-variant hover:text-primary transition-colors" href="#">
            <span class="material-symbols-outlined text-xl">groups</span> Alerts
        </a>
        <div class="relative group">
            <button class="flex items-center gap-2 text-primary font-bold transition-colors focus:outline-none">
                <span class="material-symbols-outlined text-xl">widgets</span> Features
                <span class="material-symbols-outlined text-sm transition-transform duration-200 group-hover:rotate-180">expand_more</span>
            </button>

            <div class="absolute top-full left-0 mt-6 w-48 bg-white border border-surface-dim rounded-xl overflow-hidden opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 translate-y-2 group-hover:translate-y-0">
                <a href="{{ route('fitur.saon') }}" class="block px-4 py-3 text-body-md text-primary bg-primary-container/40 font-semibold transition-colors">Saon</a>
                <a href="{{ route('fitur.togu') }}" class="block px-4 py-3 text-body-md text-on-surface-variant hover:bg-surface-container-low hover:text-primary font-semibold transition-colors border-t border-surface-dim">Togu</a>
                <a href="{{ route('fitur.pardalanan') }}" class="block px-4 py-3 text-body-md text-on-surface-variant hover:bg-surface-container-low hover:text-primary font-semibold transition-colors border-t border-surface-dim">Pardalanan</a>
            </div>
        </div>
    </nav>

    </div>
    <div class="flex items-center gap-base">
    <button class="hidden xl:flex clay-button bg-primary text-on-primary px-4 py-2 rounded-xl font-bold items-center gap-2 mr-2">
        <span class="material-symbols-outlined text-sm">auto_awesome</span> New Trip
    </button>
    <div class="hidden md:flex bg-surface-container-low clay-field rounded-full px-4 py-2 items-center gap-2">
    <span class="material-symbols-outlined text-outline">search</span>
    <input class="bg-transparent border-none focus:ring-0 text-label-md" placeholder="Cari destinasi..." type="text"/>
    </div>
    <button class="material-symbols-rounded text-on-surface-variant hover:scale-105 transition-transform p-2">mail</button>
    <button class="material-symbols-rounded text-on-surface-variant hover:scale-105 transition-transform p-2 text-[26px]" style="font-variation-settings: 'wght' 300;">
    info
    </button>

    <div class="relative group ml-2">
    <button class="w-10 h-10 rounded-full clay-card bg-primary-container p-0.5 overflow-hidden focus:outline-none">
    <img class="w-full h-full object-cover rounded-full" alt="Foto profil {{ Auth::user()->name }}" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDqlI6RzcIjJ5BJJroTOGyiGkEMN6asfYSybybC4g-zd6G8LcEYKE0hV5a_ovI9YlyYHuucmaCvWfijE9cH2r2sXqIb0aMMHMx0fZkLQKtTo5YyoPzj9VoKc00I2vFVXnJuLpkkYsOGIzAMhXciWS5jYQGKvC4R0_cVM4SxmQNXjkyZWATEESWlXOOCopX5JcxJKvzWJCJqcA9fLTEASn3yqRun89GhEEOYx7ozoLeg7fiuRtc2t5Q"/>
    </button>
    <div class="absolute top-full right-0 mt-4 w-56 bg-surface-container-lowest clay-card rounded-xl overflow-hidden opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 translate-y-2 group-hover:translate-y-0">
        <div class="px-4 py-3 border-b border-surface-dim">
            <p class="text-label-md font-bold text-on-surface truncate">{{ Auth::user()->name }}</p>
            <p class="text-label-md text-on-surface-variant truncate">{{ Auth::user()->email }}</p>
        </div>
        <a href="{{ route('profile.edit') }}" class="block px-4 py-3 text-body-md text-on-surface-variant hover:bg-primary-fixed hover:text-primary font-semibold transition-colors">
            Edit Profil
        </a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full text-left px-4 py-3 text-body-md text-error hover:bg-red-50 font-semibold transition-colors">
                Keluar
            </button>
        </form>
    </div>
    </div>
    </div>
    </header>

    <main class="pb-24 md:pb-16 p-md md:p-xl space-y-lg">

  
    <!-- Feature: Saon -->
    <section class="max-w-8xl mx-auto">
    <div class=" p-md md:p-xl grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
    <div class="space-y-4 order-2 lg:order-1">
    <div class="flex items-center gap-3">
    <div class="w-12 h-12 rounded-2xl bg-primary-container flex items-center justify-center">
    <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">translate</span>
    </div>
    <span class="text-label-md font-bold text-primary uppercase tracking-wide">Fitur 01</span>
    </div>
    <h1 class="text-headline-lg font-headline-lg text-on-surface">Saon</h1>
    <p class="text-body-md text-on-surface-variant">
    Diambil dari kata <span class="font-bold">Sada</span>, yang berarti "satu" dalam bahasa Batak — melambangkan proses menyatukan pemahaman lewat bahasa.
    </p>
    <p class="text-body-lg text-on-surface">
    Penerjemah otomatis berbasis AI yang menjawab dan menerjemahkan percakapan secara real-time. Cukup bicara atau ketik, Saon akan langsung menerjemahkan ke bahasa lokal maupun bahasa turis, lengkap dengan konteks budaya Batak agar komunikasi terasa lebih akrab.
    </p>
    <ul class="space-y-2 pt-2">
    <li class="flex items-center gap-2 text-body-md text-on-surface-variant">
    <span class="material-symbols-outlined text-primary text-lg">check_circle</span> Terjemahan otomatis dua arah, real-time
    </li>
    <li class="flex items-center gap-2 text-body-md text-on-surface-variant">
    <span class="material-symbols-outlined text-primary text-lg">check_circle</span> Mendukung Bahasa Indonesia, Batak, dan Inggris
    </li>
    <li class="flex items-center gap-2 text-body-md text-on-surface-variant">
    <span class="material-symbols-outlined text-primary text-lg">check_circle</span> Menjawab pertanyaan seputar istilah lokal
    </li>
    </ul>
    <button class="clay-button bg-primary text-on-primary px-6 py-3 rounded-full text-label-md font-bold flex items-center gap-2 mt-2">
    <span class="material-symbols-outlined text-sm">mic</span> Coba Saon
    </button>
    </div>
    <div class="order-1 lg:order-2 clay-card bg-primary-fixed rounded-3xl p-6 space-y-4">
    <div class="bg-white rounded-2xl p-4 space-y-3">
    <div class="flex items-start gap-2">
    <div class="w-8 h-8 rounded-full bg-surface-container-low flex items-center justify-center shrink-0">
    <span class="material-symbols-outlined text-sm text-on-surface-variant">person</span>
    </div>
    <div class="bg-surface-container-low rounded-2xl rounded-tl-sm px-4 py-2 text-body-md text-on-surface">
    Horas! Dimana saya bisa naik feri ke Samosir?
    </div>
    </div>
    <div class="flex items-start gap-2 flex-row-reverse">
    <div class="w-8 h-8 rounded-full bg-primary-container flex items-center justify-center shrink-0">
    <span class="material-symbols-outlined text-sm text-primary">translate</span>
    </div>
    <div class="bg-primary-container rounded-2xl rounded-tr-sm px-4 py-2 text-body-md text-on-primary-container">
    Hello! You can catch the ferry at Ajibata Terminal, about 10 minutes from here.
    </div>
    </div>
    </div>
    <div class="flex items-center gap-2 bg-white/60 rounded-full px-4 py-2">
    <span class="material-symbols-outlined text-on-primary-fixed-variant text-sm">graphic_eq</span>
    <span class="text-label-md text-on-primary-fixed-variant flex-1">Mendengarkan...</span>
    <span class="w-2 h-2 rounded-full bg-error"></span>
    </div>
    </div>
    </div>
    </section>

    </main>

    <!-- Bottom Navigation Bar (Mobile) -->
    <nav class="md:hidden fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 pb-4 pt-2 bg-surface-container-low rounded-t-xl border-t border-surface-dim">
    <button class="flex flex-col items-center justify-center text-on-surface-variant px-4 py-2 hover:bg-surface-variant/50 rounded-full">
    <span class="material-symbols-outlined">explore</span>
    <span class="text-label-md font-label-md">Explore</span>
    </button>
    <button class="flex flex-col items-center justify-center bg-primary-container text-on-primary-container rounded-full px-6 py-2 active:scale-90 transition-all">
    <span class="material-symbols-outlined">event_note</span>
    <span class="text-label-md font-label-md">Itinerary</span>
    </button>
    <button class="flex flex-col items-center justify-center text-on-surface-variant px-4 py-2 hover:bg-surface-variant/50 rounded-full">
    <span class="material-symbols-outlined">favorite</span>
    <span class="text-label-md font-label-md">Saved</span>
    </button>
    <a href="{{ route('profile.edit') }}" class="flex flex-col items-center justify-center text-on-surface-variant px-4 py-2 hover:bg-surface-variant/50 rounded-full">
    <span class="material-symbols-outlined">person</span>
    <span class="text-label-md font-label-md">Profile</span>
    </a>
    </nav>

    <script>
            document.querySelectorAll('.clay-card, .clay-button').forEach(card => {
                card.addEventListener('mousedown', () => {
                    card.style.transform = 'scale(0.98)';
                });
                card.addEventListener('mouseup', () => {
                    card.style.transform = 'scale(1)';
                });
            });

            window.addEventListener('scroll', () => {
                const header = document.querySelector('header');
                if (window.scrollY > 20) {
                    header.classList.add('bg-white/90', 'backdrop-blur-md');
                } else {
                    header.classList.remove('bg-white/90', 'backdrop-blur-md');
                }
            });
    </script>
    </body>
    </html>
<!DOCTYPE html>
<html class="light" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>TobaGuide - Dashboard Rencana Perjalanan</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
<script src="{{ asset('js/tailwind-config.js') }}"></script>
</head>
<body class="bg-surface text-on-surface">
<!-- Top App Bar -->
<header class="bg-surface docked full-width top-0 z-50 shadow-[20px_20px_40px_rgba(0,0,0,0.12)] flex justify-between items-center w-full px-container-padding py-sm sticky top-0">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-primary text-3xl" style="font-variation-settings: 'FILL' 1;">landscape</span>
<span class="text-headline-md font-headline-md font-bold text-primary mr-4">TobaGuide</span>
<nav class="hidden lg:flex items-center gap-6">
    <a class="flex items-center gap-2 text-primary font-bold transition-colors hover:text-primary-container" href="{{ route('dashboard') }}">
        <span class="material-symbols-outlined text-xl">map</span> Map
    </a>
    <a class="flex items-center gap-2 text-on-surface-variant hover:text-primary transition-colors" href="#">
        <span class="material-symbols-outlined text-xl">sunny_snowing</span> Weather
    </a>
    <a class="flex items-center gap-2 text-on-surface-variant hover:text-primary transition-colors" href="#">
        <span class="material-symbols-outlined text-xl">groups</span> Alerts
    </a>
    <!-- Dropdown Fitur -->
    <div class="relative group">
        <button class="flex items-center gap-2 text-on-surface-variant hover:text-primary transition-colors focus:outline-none">
            <span class="material-symbols-outlined text-xl">widgets</span> Features
            <span class="material-symbols-outlined text-sm transition-transform duration-200 group-hover:rotate-180">expand_more</span>
        </button>
        <div class="absolute top-full left-0 mt-4 w-48 bg-surface-container-lowest clay-card rounded-xl overflow-hidden opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 translate-y-2 group-hover:translate-y-0">
            <a href="#" class="block px-4 py-3 text-body-md text-on-surface-variant hover:bg-primary-fixed hover:text-primary font-semibold transition-colors">Tour Guide</a>
            <a href="#" class="block px-4 py-3 text-body-md text-on-surface-variant hover:bg-primary-fixed hover:text-primary font-semibold transition-colors">Sewa Kendaraan</a>
            <a href="#" class="block px-4 py-3 text-body-md text-on-surface-variant hover:bg-primary-fixed hover:text-primary font-semibold transition-colors">Event Lokal</a>
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

<!-- Avatar + Dropdown Logout -->
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
<div class="flex min-h-screen">
<!-- Main Canvas -->
<main class="flex-1 w-full pb-24 md:pb-8 p-md md:p-xl space-y-lg">
<!-- Welcome Header -->
<section class="max-w-6xl mx-auto">
<h1 class="text-display-lg font-display-lg text-primary mb-2">Halo, {{ explode(' ', Auth::user()->name)[0] }}!</h1>
<p class="text-body-lg text-on-surface-variant">Ini rencana perjalanan personalmu untuk hari ini di Danau Toba.</p>
</section>
<!-- Bento Grid - Widgets -->
<section class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-md">
<!-- Weather & Crowd Alert Widget -->
<div class="md:col-span-2 clay-card bg-secondary-container/20 rounded-3xl p-md flex flex-col md:flex-row gap-6 items-center">
<div class="flex-1 space-y-4">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-error" style="font-variation-settings: 'FILL' 1;">warning</span>
<h3 class="text-headline-md font-bold text-on-secondary-container">Crowd Alert</h3>
</div>
<p class="text-body-lg text-on-secondary-fixed-variant">
<span class="font-bold">Bukit Holbung is crowded</span> right now. We suggest rerouting to <span class="underline cursor-pointer font-bold">Bukit Gajah Bobok</span> for a similar view with fewer people.
</p>
<button class="clay-button bg-primary-container text-on-primary-container px-6 py-2 rounded-full text-label-md flex items-center gap-2">
<span class="material-symbols-outlined text-sm">shuffle</span> Reroute Now
</button>
</div>
<div class="w-full md:w-48 clay-card bg-white/40 rounded-2xl p-4 flex flex-col items-center justify-center text-center">
<span class="material-symbols-outlined text-5xl text-primary mb-2">partly_cloudy_day</span>
<div class="text-headline-md font-bold text-primary">24°C</div>
<div class="text-label-md text-on-surface-variant">Cloudy in Samosir</div>
</div>
</div>
<!-- Simple Stats Widget -->
<div class="clay-card bg-tertiary-fixed rounded-3xl p-md flex flex-col justify-between">
<h3 class="text-headline-md font-bold text-on-tertiary-fixed-variant">Today's Journey</h3>
<div class="flex items-end justify-between">
<div>
<div class="text-display-lg text-tertiary">4</div>
<div class="text-label-md">Destinations</div>
</div>
<div class="text-right">
<div class="text-headline-md text-tertiary">12km</div>
<div class="text-label-md">Traveling Dist.</div>
</div>
</div>
<div class="w-full h-2 bg-surface-dim rounded-full mt-4 overflow-hidden">
<div class="h-full bg-tertiary w-3/4 rounded-full"></div>
</div>
</div>
</section>
<!-- Horizontal Daily View -->
<section class="max-w-6xl mx-auto space-y-md">
<div class="flex justify-between items-center px-2">
<h2 class="text-headline-lg font-headline-lg text-on-surface">Timeline Aktivitas</h2>
<div class="flex gap-2">
<button class="clay-button bg-white rounded-full p-2 material-symbols-outlined">chevron_left</button>
<button class="clay-button bg-white rounded-full p-2 material-symbols-outlined">chevron_right</button>
</div>
</div>
<div class="flex gap-6 overflow-x-auto pb-8 px-2 custom-scrollbar">
<!-- Activity Card 1 -->
<div class="min-w-[320px] clay-card bg-white rounded-[32px] p-6 space-y-4">
<div class="h-40 rounded-2xl overflow-hidden relative">
<img class="w-full h-full object-cover" alt="Sarapan tradisional Batak di Tomok" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDge3xp2LGJzLvOUesMAIZTqr2zh71rqZA5KczOWIUb2z_jOYO6oE0E_VOEi7iKeT7xCG9FymxLr9-RMYo6fxXOCDlEIvFeA-GgwkYF8IYpXZtiCtJ8L8geoGDWnoJ9w9yAzeBxJ9CDEDa7CFBJbOmqWCZIscVs8eOdOEdR_AbWhpeqgCpv_zZIiKhlOF2RcQfAhGgrH53eNoIav09BqvnZ3Xpp4I6lXuUlZFsCVey4AH2_Tflucgo"/>
<div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-label-md font-bold text-primary shadow-sm">
                                08:00 AM
                            </div>
</div>
<div>
<h3 class="text-headline-md text-primary">Sarapan di Tomok</h3>
<p class="text-body-md text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-sm">location_on</span> Tomok Village
                            </p>
</div>
<div class="flex justify-between items-center">
<span class="text-label-md text-on-surface-variant">45 mins duration</span>
<button class="w-10 h-10 rounded-full clay-button bg-primary text-on-primary flex items-center justify-center">
<span class="material-symbols-outlined">check</span>
</button>
</div>
</div>
<!-- Activity Card 2 -->
<div class="min-w-[320px] clay-card bg-primary-fixed rounded-[32px] p-6 space-y-4">
<div class="h-40 rounded-2xl overflow-hidden relative">
<img class="w-full h-full object-cover" alt="Ferry menuju Pulau Samosir" src="https://lh3.googleusercontent.com/aida-public/AB6AXuChgqBXt3s24KW6gu4DXW7hZuxuiYAUU0Z0_QP14_ryymriZgPFGykrG71vvgHTpoOiyW2SksruHHX227-SO3xvELTHoo2Iybj8gtRlZ8FHPBK66zPDsBlbaCP6op6cZ7Bp5z5kkQmKONU1DY8ieGx3arjjZPExC7QuREG4yDpycjnBlREQ9YJ5TvzHyXJ8x3S7M3xmxh6ffE6bmEE69z7FiIc_zhEZ3fe7BVahj_34cJvML4ly_MI"/>
<div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-label-md font-bold text-primary shadow-sm">
                                10:00 AM
                            </div>
</div>
<div>
<h3 class="text-headline-md text-on-primary-fixed-variant">Ferry ke Samosir</h3>
<p class="text-body-md text-on-primary-fixed-variant flex items-center gap-1">
<span class="material-symbols-outlined text-sm">directions_boat</span> Ajibata Terminal
                            </p>
</div>
<div class="flex justify-between items-center">
<span class="text-label-md text-on-primary-fixed-variant">Departure in 15m</span>
<button class="clay-button bg-white text-primary px-4 py-2 rounded-full text-label-md font-bold">
                                View Ticket
                            </button>
</div>
</div>
<!-- Activity Card 3 -->
<div class="min-w-[320px] clay-card bg-white rounded-[32px] p-6 space-y-4 opacity-75">
<div class="h-40 rounded-2xl overflow-hidden relative grayscale">
<img class="w-full h-full object-cover" alt="Rumah adat Batak di Simanindo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC3R8OsbMalgjE9U_Oh7Hk5_hi4QIb_L1Yao8T7482jyN-nobwnXVUaNxOoW33YNMiUOTjTEo20LqVXSUSMc-3VI_L-fputzCThzvQcF5n6xW02l9wWQJldeXtLb5octuFzOb2bBTqcXo7AwCG3IV5AbMUtqcL1cP_0Qh-rkh6hVGf5HArLBZS_sPWDSIK1_DcytU3yI1aZBT2iKoAasQWA2VgyVveegz0SNYSf5vehVTW7BJWQV6k"/>
<div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-label-md font-bold text-primary shadow-sm">
                                12:30 PM
                            </div>
</div>
<div>
<h3 class="text-headline-md text-on-surface">Makan Siang Simanindo</h3>
<p class="text-body-md text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-sm">restaurant</span> Local Eatery
                            </p>
</div>
<div class="flex justify-between items-center">
<span class="text-label-md text-on-surface-variant">Recommended: Mie Gomak</span>
<button class="w-10 h-10 rounded-full clay-button bg-surface-variant text-on-surface-variant flex items-center justify-center">
<span class="material-symbols-outlined">schedule</span>
</button>
</div>
</div>
</div>
</section>
<!-- Map Mini Widget -->
<section class="max-w-6xl mx-auto">
<div class="clay-card bg-surface-container-highest rounded-[32px] p-md h-64 relative overflow-hidden group">
<div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC28zQy7hZiXUSjXeGf4zjAmvPIF-cbRkYCDFLx1tMWflmKC0DPOL9AU7Npo44re2NbPxFosJ52Ccn79PUyn9bCW_23IYubvFkvfJVKYKXvPe3nAmfr1usGM_762zNf6lWDh2jH-13BSWW8Ygb1zpQEdCpb55WaiDCFr8rvlH52u2yD-x5Yg0Gy2E1mqE8J4lA4NASf5ayC_9cPg0hJCi2ar7UrgBCbVDZScXs_JhSP7ikxd388Zwo')"></div>
<div class="relative z-10 flex flex-col h-full justify-between pointer-events-none">
<div class="pointer-events-auto">
<button class="clay-button bg-white/80 backdrop-blur-sm px-4 py-2 rounded-full flex items-center gap-2 text-primary font-bold">
<span class="material-symbols-outlined">fullscreen</span> Expand Map
                            </button>
</div>
<div class="bg-white/90 backdrop-blur-md p-4 rounded-2xl w-64 clay-card pointer-events-auto self-end">
<p class="text-label-md font-bold text-primary mb-1">Current Path</p>
<p class="text-body-md text-on-surface">Tomok → Ambarita → Simanindo</p>
</div>
</div>
</div>
</section>
</main>
</div>
<!-- Bottom Navigation Bar (Mobile) -->
<nav class="md:hidden fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 pb-4 pt-2 bg-surface-container-low rounded-t-xl shadow-[0px_-10px_30px_rgba(0,0,0,0.08)]">
<button class="flex flex-col items-center justify-center text-on-surface-variant px-4 py-2 hover:bg-surface-variant/50 rounded-full">
<span class="material-symbols-outlined">explore</span>
<span class="text-label-md font-label-md">Explore</span>
</button>
<button class="flex flex-col items-center justify-center bg-primary-container text-on-primary-container rounded-full px-6 py-2 shadow-[inset_4px_4px_8px_rgba(255,255,255,0.4),inset_-4px_-4px_8px_rgba(0,0,0,0.1)] active:scale-90 transition-all">
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
<!-- Micro-interaction Script -->
<script>
        document.querySelectorAll('.clay-card').forEach(card => {
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
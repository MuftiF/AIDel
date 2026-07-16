<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>TobaGuide - Explore Lake Toba</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&amp;family=Nunito+Sans:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
    <script src="{{ asset('js/tailwind-config.js') }}"></script>
</head>
<body class="bg-surface text-on-surface">
    <!-- Navbar -->
    <header class="bg-surface/80 backdrop-blur-md fixed w-full top-0 z-50 flex justify-between items-center px-container-padding py-4 shadow-sm">
        <div class="flex items-center gap-2">
            <span class="material-symbols-outlined text-primary text-3xl" style="font-variation-settings: 'FILL' 1;">landscape</span>
            <span class="text-headline-md font-headline-md font-bold text-primary">TobaGuide</span>
        </div>
        <div class="flex items-center gap-4">
            <a href="/login" class="text-primary font-bold hover:text-primary-container transition-colors">Masuk</a>
            <a href="/register" class="clay-button bg-primary text-on-primary px-6 py-2 rounded-full font-bold">Daftar</a>
        </div>
    </header>

    <!-- Hero Section -->
    <main class="min-h-screen flex flex-col items-center justify-center text-center px-4 relative overflow-hidden pt-24">
        <!-- Background Elements -->
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-primary-fixed rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob"></div>
        <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-secondary-fixed rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-2000"></div>

        <div class="relative z-10 max-w-4xl mx-auto space-y-8 mt-12">
            <h1 class="text-display-lg md:text-[72px] font-display-lg text-primary leading-tight font-bold">
                Jelajahi Pesona <br/><span class="text-secondary">Danau Toba</span>
            </h1>
            <p class="text-body-lg text-on-surface-variant max-w-2xl mx-auto text-xl">
                Temukan surga tersembunyi, rencanakan perjalanan impian Anda, dan rasakan pengalaman tak terlupakan bersama pemandu lokal terbaik.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-12">
                <a href="/register" class="clay-button bg-primary text-on-primary px-8 py-4 rounded-full text-lg font-bold flex items-center justify-center gap-2 hover:scale-105 transition-transform">
                    Mulai Petualangan <span class="material-symbols-outlined">arrow_forward</span>
                </a>
                <a href="#explore" class="clay-button bg-surface-container-highest text-on-surface px-8 py-4 rounded-full text-lg font-bold flex items-center justify-center gap-2 hover:scale-105 transition-transform">
                    Lihat Destinasi
                </a>
            </div>
        </div>

        <!-- Image Grid Showcase -->
        <div class="mt-24 grid grid-cols-2 md:grid-cols-4 gap-4 max-w-6xl mx-auto relative z-10 px-4 pb-20">
            <div class="clay-card rounded-3xl overflow-hidden h-64 mt-8">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDge3xp2LGJzLvOUesMAIZTqr2zh71rqZA5KczOWIUb2z_jOYO6oE0E_VOEi7iKeT7xCG9FymxLr9-RMYo6fxXOCDlEIvFeA-GgwkYF8IYpXZtiCtJ8L8geoGDWnoJ9w9yAzeBxJ9CDEDa7CFBJbOmqWCZIscVs8eOdOEdR_AbWhpeqgCpv_zZIiKhlOF2RcQfAhGgrH53eNoIav09BqvnZ3Xpp4I6lXuUlZFsCVey4AH2_Tflucgo" alt="Budaya" class="w-full h-full object-cover"/>
            </div>
            <div class="clay-card rounded-3xl overflow-hidden h-80">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuChgqBXt3s24KW6gu4DXW7hZuxuiYAUU0Z0_QP14_ryymriZgPFGykrG71vvgHTpoOiyW2SksruHHX227-SO3xvELTHoo2Iybj8gtRlZ8FHPBK66zPDsBlbaCP6op6cZ7Bp5z5kkQmKONU1DY8ieGx3arjjZPExC7QuREG4yDpycjnBlREQ9YJ5TvzHyXJ8x3S7M3xmxh6ffE6bmEE69z7FiIc_zhEZ3fe7BVahj_34cJvML4ly_MI" alt="Danau" class="w-full h-full object-cover"/>
            </div>
            <div class="clay-card rounded-3xl overflow-hidden h-80 mt-12">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC3R8OsbMalgjE9U_Oh7Hk5_hi4QIb_L1Yao8T7482jyN-nobwnXVUaNxOoW33YNMiUOTjTEo20LqVXSUSMc-3VI_L-fputzCThzvQcF5n6xW02l9wWQJldeXtLb5octuFzOb2bBTqcXo7AwCG3IV5AbMUtqcL1cP_0Qh-rkh6hVGf5HArLBZS_sPWDSIK1_DcytU3yI1aZBT2iKoAasQWA2VgyVveegz0SNYSf5vehVTW7BJWQV6k" alt="Rumah Adat" class="w-full h-full object-cover"/>
            </div>
            <div class="clay-card rounded-3xl overflow-hidden h-64 mt-4">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC28zQy7hZiXUSjXeGf4zjAmvPIF-cbRkYCDFLx1tMWflmKC0DPOL9AU7Npo44re2NbPxFosJ52Ccn79PUyn9bCW_23IYubvFkvfJVKYKXvPe3nAmfr1usGM_762zNf6lWDh2jH-13BSWW8Ygb1zpQEdCpb55WaiDCFr8rvlH52u2yD-x5Yg0Gy2E1mqE8J4lA4NASf5ayC_9cPg0hJCi2ar7UrgBCbVDZScXs_JhSP7ikxd388Zwo" alt="Peta" class="w-full h-full object-cover"/>
            </div>
        </div>
    </main>

    <style>
        .animate-blob {
            animation: blob 7s infinite;
        }
        .animation-delay-2000 {
            animation-delay: 2s;
        }
        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
    </style>
</body>
</html>

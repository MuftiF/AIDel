<x-guest-layout>
    <div class="min-h-screen bg-surface flex items-center justify-center px-4 py-12 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-primary-fixed rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-secondary-fixed rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-2000"></div>
        
        <div class="relative z-10 w-full max-w-md">
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="flex items-center justify-center gap-2 mb-2">
                    <span class="material-symbols-outlined text-primary text-4xl" style="font-variation-settings: 'FILL' 1;">landscape</span>
                    <span class="text-3xl font-bold text-primary font-display-lg">TobaGuide</span>
                </div>
                <h2 class="text-2xl font-bold text-on-surface mt-4">Selamat Datang Kembali</h2>
                <p class="text-on-surface-variant mt-1">Masuk untuk melanjutkan petualanganmu</p>
            </div>

            <!-- Session Status -->
            @if (session('status'))
                <div class="mb-4 p-4 rounded-xl bg-success-container text-on-success-container border border-success/20 flex items-center gap-3">
                    <span class="material-symbols-outlined">check_circle</span>
                    <span>{{ session('status') }}</span>
                </div>
            @endif

            <!-- Form -->
            <div class="clay-card bg-surface-container-highest rounded-3xl p-8 shadow-xl">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="space-y-1">
                        <x-input-label for="email" :value="__('Alamat Email')" class="text-on-surface font-bold text-sm" />
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-xl">email</span>
                            <x-text-input id="email" 
                                class="block w-full pl-10 pr-4 py-3 rounded-xl border-2 border-outline-variant bg-surface/50 text-on-surface placeholder:text-on-surface-variant/60 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" 
                                type="email" 
                                name="email" 
                                :value="old('email')" 
                                required 
                                autofocus 
                                autocomplete="username"
                                placeholder="email@example.com" />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-1 text-sm text-error" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4 space-y-1">
                        <div class="flex items-center justify-between">
                            <x-input-label for="password" :value="__('Kata Sandi')" class="text-on-surface font-bold text-sm" />
                            @if (Route::has('password.request'))
                                <a class="text-sm text-primary hover:text-primary-container transition-colors font-semibold" href="{{ route('password.request') }}">
                                    Lupa Password?
                                </a>
                            @endif
                        </div>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-xl">lock</span>
                            <x-text-input id="password" 
                                class="block w-full pl-10 pr-12 py-3 rounded-xl border-2 border-outline-variant bg-surface/50 text-on-surface placeholder:text-on-surface-variant/60 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" 
                                type="password"
                                name="password"
                                required 
                                autocomplete="current-password"
                                placeholder="Masukkan kata sandi" />
                            <button type="button" onclick="togglePassword('password')" class="absolute right-3 top-1/2 -translate-y-1/2 text-on-surface-variant hover:text-on-surface transition-colors">
                                <span class="material-symbols-outlined text-xl" id="password-eye">visibility</span>
                            </button>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-1 text-sm text-error" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center gap-2 cursor-pointer group">
                            <div class="relative">
                                <input id="remember_me" 
                                    type="checkbox" 
                                    name="remember"
                                    class="peer appearance-none w-5 h-5 rounded-md border-2 border-outline-variant bg-surface/50 checked:bg-primary checked:border-primary focus:ring-2 focus:ring-primary/20 focus:ring-offset-0 transition-all cursor-pointer" />
                                <span class="material-symbols-outlined absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 text-on-primary text-sm opacity-0 peer-checked:opacity-100 transition-opacity pointer-events-none" style="font-variation-settings: 'FILL' 1;">check</span>
                            </div>
                            <span class="text-sm text-on-surface-variant group-hover:text-on-surface transition-colors select-none">
                                {{ __('Ingat saya') }}
                            </span>
                        </label>
                    </div>

                    <!-- Submit -->
                    <div class="mt-6 space-y-4">
                        <button type="submit" class="clay-button w-full bg-primary text-on-primary px-6 py-4 rounded-xl font-bold text-lg hover:scale-[1.02] transition-all flex items-center justify-center gap-2">
                            Masuk
                            <span class="material-symbols-outlined">login</span>
                        </button>
                        
                        <div class="text-center">
                            <p class="text-on-surface-variant text-sm">
                                Belum punya akun? 
                                <a href="{{ route('register') }}" class="text-primary font-bold hover:text-primary-container transition-colors underline decoration-2 decoration-primary/30 hover:decoration-primary/70 underline-offset-2">
                                    Daftar Sekarang
                                </a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Footer -->
            <p class="text-center text-xs text-on-surface-variant/60 mt-6">
                Dengan masuk, Anda menyetujui 
                <a href="#" class="text-primary hover:underline">Syarat & Ketentuan</a> 
                dan 
                <a href="#" class="text-primary hover:underline">Kebijakan Privasi</a>
            </p>
        </div>
    </div>

    <style>
        /* CSS dari landing page */
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
        
        /* Clay Card Effect */
        .clay-card {
            background: var(--surface-container-highest, #f5f3f0);
            box-shadow: 
                8px 8px 16px rgba(0, 0, 0, 0.08),
                -8px -8px 16px rgba(255, 255, 255, 0.8);
        }
        
        /* Clay Button Effect */
        .clay-button {
            box-shadow: 
                4px 4px 8px rgba(0, 0, 0, 0.08),
                -4px -4px 8px rgba(255, 255, 255, 0.8);
            transition: all 0.2s ease;
        }
        
        .clay-button:hover {
            box-shadow: 
                2px 2px 4px rgba(0, 0, 0, 0.08),
                -2px -2px 4px rgba(255, 255, 255, 0.8);
            transform: translateY(-2px);
        }
        
        .clay-button:active {
            box-shadow: 
                inset 4px 4px 8px rgba(0, 0, 0, 0.08),
                inset -4px -4px 8px rgba(255, 255, 255, 0.8);
            transform: translateY(0px);
        }

        /* Custom Checkbox */
        .peer:checked ~ .peer-checked\:opacity-100 {
            opacity: 1;
        }
    </style>

    <script>
        function togglePassword(fieldId) {
            const field = document.getElementById(fieldId);
            const eyeIcon = document.getElementById(fieldId + '-eye');
            
            if (field.type === 'password') {
                field.type = 'text';
                eyeIcon.textContent = 'visibility_off';
            } else {
                field.type = 'password';
                eyeIcon.textContent = 'visibility';
            }
        }
    </script>

    <!-- Material Symbols & Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
</x-guest-layout>
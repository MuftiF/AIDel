<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>TobaGuide - Daftar Akun Baru</title>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700&display=swap">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            toba: {
              primary: '#5e8c89',
              surface: '#f7faf9',
              dim: '#d7dbda',
              bright: '#f7faf9',
              lowest: '#ffffff',
              low: '#f1f4f3',
              dark: '#3d5c5a'
            }
          },
          fontFamily: { quicksand: ['Quicksand', 'sans-serif'] },
          borderRadius: { clay: '2rem' },
          boxShadow: {
            'clay-outer': '20px 20px 60px #d2d5d4, -20px -20px 60px #ffffff',
            'clay-inner': 'inset 6px 6px 12px #d2d5d4, inset -6px -6px 12px #ffffff',
            'clay-card': '8px 8px 16px rgba(0,0,0,0.05), -8px -8px 16px rgba(255,255,255,0.8)'
          }
        }
      }
    }
</script>
<style data-purpose="custom-claymorphism">
    body { font-family: 'Quicksand', sans-serif; background: radial-gradient(circle at top left, #f7faf9 0%, #e8efee 100%); }
    .clay-card { background:#f7faf9; border-radius:2rem; box-shadow:15px 15px 30px #d9dfde, -15px -15px 30px #ffffff; border:1px solid rgba(255,255,255,0.4); }
    .clay-input { background:#f1f4f3; border:none; box-shadow:inset 4px 4px 8px #d1d6d5, inset -4px -4px 8px #ffffff; transition:all .3s; }
    .clay-input:focus { box-shadow:inset 2px 2px 4px #d1d6d5, inset -2px -2px 4px #ffffff, 0 0 0 2px #5e8c89; outline:none; }
    .clay-button { background:#5e8c89; box-shadow:6px 6px 12px #ced4d3, -6px -6px 12px #ffffff; transition:transform .2s, box-shadow .2s; }
    .clay-button:hover { transform:translateY(-2px); box-shadow:8px 8px 16px #ced4d3, -8px -8px 16px #ffffff; }
    .clay-button:active { transform:translateY(1px); box-shadow:inset 4px 4px 8px #3d5c5a, 4px 4px 12px #ffffff; }
    .clay-checkbox { background:#f1f4f3; box-shadow:inset 3px 3px 6px #d1d6d5, inset -3px -3px 6px #ffffff; }
    .clay-checkbox:checked { background-color:#5e8c89; box-shadow:none; }
    .strength-bar { height:6px; border-radius:999px; background:#e3e8e7; overflow:hidden; }
    .strength-fill { height:100%; width:0%; border-radius:999px; transition:width .3s ease, background-color .3s ease; }
</style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 md:p-8">
<main class="w-full max-w-6xl flex flex-col md:flex-row items-stretch min-h-[760px] relative" data-purpose="register-layout-container">

  <section class="hidden md:flex flex-1 flex-col justify-center p-12 clay-card rounded-r-none" data-purpose="branding-visual">
    <div class="space-y-6">
      <div class="flex items-center gap-2 mb-8">
        <span class="material-symbols-outlined text-toba-primary text-4xl font-normal" style="font-variation-settings: 'FILL' 1;">landscape</span>
        <span class="text-3xl font-bold text-toba-primary tracking-tight">TobaGuide</span>
      </div>
      <h1 class="text-5xl font-bold text-toba-dark leading-tight">Mulai Petualangan Anda</h1>
      <p class="text-lg text-gray-600 max-w-md">Buat akun untuk mulai menjelajahi keindahan Danau Toba bersama kami.</p>
    </div>
  </section>

  <section class="flex-1 clay-card p-8 md:p-12 flex flex-col justify-center rounded-l-none" data-purpose="register-form-container">
    <div class="mb-8 text-center md:text-left">
      <h2 class="text-3xl font-bold text-toba-dark">Daftar Akun</h2>
      <p class="text-gray-500 mt-2">Lengkapi data diri Anda untuk membuat akun baru</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-5" data-purpose="register-form">
      @csrf

      <div class="space-y-2">
        <label class="block text-sm font-semibold text-toba-dark ml-2" for="name">Nama Lengkap</label>
        <div class="relative">
          <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
          </span>
          <input class="clay-input w-full pl-12 pr-4 py-4 rounded-2xl text-gray-700 placeholder-gray-400 focus:ring-0"
                 id="name" name="name" placeholder="Nama sesuai identitas" type="text"
                 value="{{ old('name') }}" required autofocus autocomplete="name"/>
        </div>
        @error('name')
          <p class="text-xs text-red-400 ml-2">{{ $message }}</p>
        @enderror
      </div>

      <div class="space-y-2">
        <label class="block text-sm font-semibold text-toba-dark ml-2" for="email">Alamat Email</label>
        <div class="relative">
          <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
          </span>
          <input class="clay-input w-full pl-12 pr-4 py-4 rounded-2xl text-gray-700 placeholder-gray-400 focus:ring-0"
                 id="email" name="email" placeholder="email@example.com" type="email"
                 value="{{ old('email') }}" required autocomplete="username"/>
        </div>
        @error('email')
          <p class="text-xs text-red-400 ml-2">{{ $message }}</p>
        @enderror
      </div>

      <div class="space-y-2">
        <label class="block text-sm font-semibold text-toba-dark ml-2" for="password">Kata Sandi</label>
        <div class="relative">
          <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
          </span>
          <input class="clay-input w-full pl-12 pr-12 py-4 rounded-2xl text-gray-700 placeholder-gray-400 focus:ring-0"
                 id="password" name="password" placeholder="Minimal 8 karakter" type="password"
                 required autocomplete="new-password"/>
          <button class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-toba-primary" data-purpose="toggle-password" type="button">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
          </button>
        </div>
        <div class="flex items-center gap-2 px-2 pt-1" data-purpose="password-strength">
          <div class="strength-bar flex-1"><div class="strength-fill" data-purpose="strength-fill"></div></div>
          <span class="text-xs text-gray-400 w-16 text-right" data-purpose="strength-label">Lemah</span>
        </div>
        @error('password')
          <p class="text-xs text-red-400 ml-2">{{ $message }}</p>
        @enderror
      </div>

      <div class="space-y-2">
        <label class="block text-sm font-semibold text-toba-dark ml-2" for="password_confirmation">Konfirmasi Kata Sandi</label>
        <div class="relative">
          <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
          </span>
          <input class="clay-input w-full pl-12 pr-12 py-4 rounded-2xl text-gray-700 placeholder-gray-400 focus:ring-0"
                 id="password_confirmation" name="password_confirmation" placeholder="Ulangi kata sandi" type="password"
                 required autocomplete="new-password"/>
          <button class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-toba-primary" data-purpose="toggle-confirm-password" type="button">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
          </button>
        </div>
        <p class="text-xs text-red-400 ml-2 hidden" data-purpose="password-mismatch">Kata sandi tidak cocok</p>
        @error('password_confirmation')
          <p class="text-xs text-red-400 ml-2">{{ $message }}</p>
        @enderror
      </div>

      <div class="flex items-start gap-3 pt-1 px-2">
        <input class="clay-checkbox w-5 h-5 rounded-md mt-0.5 cursor-pointer appearance-none" id="terms" name="terms" type="checkbox"/>
        <label class="text-sm text-gray-500 leading-snug cursor-pointer" for="terms">
          Saya menyetujui <a class="text-toba-primary font-semibold hover:underline underline-offset-2" href="#">Syarat &amp; Ketentuan</a>
          dan <a class="text-toba-primary font-semibold hover:underline underline-offset-2" href="#">Kebijakan Privasi</a> TobaGuide.
        </label>
      </div>

      <div class="pt-4">
        <button class="clay-button w-full py-5 rounded-2xl text-white font-bold text-lg flex items-center justify-center gap-2 group" type="submit">
          <span>Daftar Sekarang</span>
          <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
        </button>
      </div>

      <p class="text-center text-gray-500 mt-6">Sudah punya akun?
        <a class="text-toba-primary font-bold hover:underline underline-offset-4" href="{{ route('login') }}">Masuk di sini</a>
      </p>
    </form>
  </section>
</main>

<script data-purpose="form-interactions">
    document.querySelectorAll('[data-purpose="toggle-password"], [data-purpose="toggle-confirm-password"]').forEach(button => {
      button.addEventListener('click', function() {
        const input = this.parentElement.querySelector('input');
        input.type = input.type === 'password' ? 'text' : 'password';
      });
    });

    const passwordInput = document.getElementById('password');
    const strengthFill = document.querySelector('[data-purpose="strength-fill"]');
    const strengthLabel = document.querySelector('[data-purpose="strength-label"]');
    const strengthColors = ['#d97757', '#e0a45e', '#a3b86c', '#5e8c89'];
    const strengthLabels = ['Lemah', 'Cukup', 'Baik', 'Kuat'];

    passwordInput.addEventListener('input', function() {
      const val = this.value;
      let score = 0;
      if (val.length >= 8) score++;
      if (/[A-Z]/.test(val) && /[a-z]/.test(val)) score++;
      if (/\d/.test(val)) score++;
      if (/[^A-Za-z0-9]/.test(val)) score++;
      const level = val.length === 0 ? 0 : Math.max(1, score);
      const pct = val.length === 0 ? 0 : (level / 4) * 100;
      strengthFill.style.width = pct + '%';
      strengthFill.style.backgroundColor = strengthColors[Math.min(level, 4) - 1] || strengthColors[0];
      strengthLabel.textContent = val.length === 0 ? 'Lemah' : strengthLabels[Math.min(level, 4) - 1];
    });

    const confirmInput = document.getElementById('password_confirmation');
    const mismatchWarning = document.querySelector('[data-purpose="password-mismatch"]');
    function checkMatch() {
      if (confirmInput.value.length > 0 && confirmInput.value !== passwordInput.value) {
        mismatchWarning.classList.remove('hidden');
      } else {
        mismatchWarning.classList.add('hidden');
      }
    }
    confirmInput.addEventListener('input', checkMatch);
    passwordInput.addEventListener('input', checkMatch);
</script>
</body>
</html>
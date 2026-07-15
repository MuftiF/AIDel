<button {{ $attributes->merge(['type' => 'submit', 'class' => 'clay-button bg-primary text-on-primary px-8 py-3 rounded-full text-lg font-bold w-full justify-center hover:scale-105 transition-transform flex items-center gap-2']) }}>
    {{ $slot }}
</button>

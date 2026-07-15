@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'bg-surface-container-low clay-field rounded-full px-6 py-3 border-none focus:ring-2 focus:ring-primary focus:outline-none text-body-md w-full']) }}>

@props(['type' => 'primary', 'href' => '#'])

@php
    $baseClasses = 'inline-block px-6 py-3 rounded-lg font-semibold transition-colors duration-300 shadow-md text-center';
    
    $typeClasses = match($type) {
        'primary' => 'bg-mango-500 text-white hover:bg-mango-600',
        'secondary' => 'bg-white text-mango-600 border-2 border-mango-500 hover:bg-yellow-50',
        'outline' => 'bg-transparent text-gray-700 border border-gray-300 hover:bg-gray-100',
        default => 'bg-gray-800 text-white hover:bg-gray-900',
    };
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $baseClasses . ' ' . $typeClasses]) }}>
    {{ $slot }}
</a>
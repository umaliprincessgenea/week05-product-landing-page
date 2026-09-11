@props(['type' => 'primary', 'href' => '#'])

@php
    $baseClasses = 'inline-block px-8 py-3 rounded-full font-bold transition-colors duration-300 text-center';
    
    $typeClasses = match($type) {
        'primary' => 'bg-royalyellow-500 text-white hover:bg-royalyellow-600 shadow-md',
        'secondary' => 'bg-white text-royalred-500 border-2 border-royalred-500 hover:bg-red-50',
        'outline' => 'bg-transparent text-gray-700 border border-gray-300 hover:bg-gray-100',
        default => 'bg-gray-800 text-white hover:bg-gray-900',
    };
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $baseClasses . ' ' . $typeClasses]) }}>
    {{ $slot }}
</a>
@props(['type' => 'primary', 'href' => '#'])

@php
    $baseClasses = 'inline-block px-6 py-2 sm:px-8 sm:py-3 w-full sm:w-auto rounded-full font-bold transition-colors duration-300 text-center text-sm sm:text-base';
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
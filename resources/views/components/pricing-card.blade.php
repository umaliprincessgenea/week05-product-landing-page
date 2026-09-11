@props(['plan', 'price', 'features', 'isPopular' => false])

<div class="relative bg-white rounded-2xl shadow-lg border {{ $isPopular ? 'border-mango-500 md:scale-105 z-10' : 'border-gray-200' }} p-6 sm:p-8 flex flex-col h-full">
    @if($isPopular)
        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-mango-500 text-white px-3 sm:px-4 py-1 rounded-full text-xs sm:text-sm font-bold uppercase tracking-wide whitespace-nowrap">
            Most Popular
        </div>
    @endif

    <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-2">{{ $plan }}</h3>
    <div class="flex items-baseline mb-4 sm:mb-6">
        <span class="text-3xl sm:text-4xl font-extrabold text-gray-900">₱{{ $price }}</span>
        <span class="text-gray-500 ml-2 text-sm sm:text-base">/mo</span>
    </div>

    <ul class="space-y-3 sm:space-y-4 mb-6 sm:mb-8 flex-1">
        @foreach($features as $feature)
            <li class="flex items-start">
                <svg class="h-5 w-5 sm:h-6 sm:w-6 text-leaf-500 mr-2 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                <span class="text-sm sm:text-base text-gray-600">{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <div class="mt-auto">
        <x-button type="{{ $isPopular ? 'primary' : 'outline' }}" class="w-full">
            Subscribe to {{ $plan }}
        </x-button>
    </div>
</div>
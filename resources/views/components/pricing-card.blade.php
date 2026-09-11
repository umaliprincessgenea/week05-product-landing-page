@props(['plan', 'price', 'features', 'isPopular' => false])

<div class="relative bg-white rounded-2xl shadow-lg border {{ $isPopular ? 'border-mango-500 scale-105 z-10' : 'border-gray-200' }} p-8 flex flex-col">
    @if($isPopular)
        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-mango-500 text-white px-4 py-1 rounded-full text-sm font-bold uppercase tracking-wide">
            Most Popular
        </div>
    @endif

    <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $plan }}</h3>
    <div class="flex items-baseline mb-6">
        <span class="text-4xl font-extrabold text-gray-900">₱{{ $price }}</span>
        <span class="text-gray-500 ml-2">/mo</span>
    </div>

    <ul class="space-y-4 mb-8 flex-1">
        @foreach($features as $feature)
            <li class="flex items-start">
                <svg class="h-6 w-6 text-leaf-500 mr-2 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                <span class="text-gray-600">{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <x-button type="{{ $isPopular ? 'primary' : 'outline' }}" class="w-full">
        Subscribe to {{ $plan }}
    </x-button>
</div>
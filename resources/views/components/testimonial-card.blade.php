@props(['image', 'name', 'position', 'review'])

<div class="bg-white p-8 rounded-2xl shadow-md hover:-translate-y-1 transition-transform duration-300">
    <div class="flex text-mango-500 mb-4">
        ★★★★★
    </div>
    <p class="text-gray-600 italic mb-6">"{{ $review }}"</p>
    <div class="flex items-center">
        <img src="{{ $image }}" alt="{{ $name }}" class="w-12 h-12 rounded-full object-cover mr-4">
        <div>
            <h4 class="font-bold text-gray-900">{{ $name }}</h4>
            <p class="text-sm text-gray-500">{{ $position }}</p>
        </div>
    </div>
</div>
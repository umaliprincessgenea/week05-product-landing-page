@props(['icon', 'title', 'description'])

<div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300 border border-gray-100 flex flex-col items-center text-center">
    <div class="w-14 h-14 bg-yellow-100 text-mango-600 rounded-full flex items-center justify-center text-2xl mb-4">
        {{ $icon }}
    </div>
    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $title }}</h3>
    <p class="text-gray-600">{{ $description }}</p>
</div>
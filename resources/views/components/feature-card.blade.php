@props(['icon', 'title', 'description'])

<div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300 border border-gray-100 flex flex-col items-center text-center">
    <div class="w-16 h-16 bg-red-50 text-royalred-500 rounded-full flex items-center justify-center text-3xl mb-4 border border-red-100">
        {{ $icon }}
    </div>
    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $title }}</h3>
    <p class="text-gray-600">{{ $description }}</p>
</div>
@props(['image', 'name', 'position', 'review'])

<div class="relative bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:-translate-y-2 hover:shadow-xl transition-all duration-300">
    <!-- Decorative Quote Icon -->
    <div class="absolute top-6 right-8 text-royalyellow-500/20">
        <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
        </svg>
    </div>

    <!-- Rating Stars -->
    <div class="flex text-royalyellow-500 mb-5 text-xl tracking-widest relative z-10">
        ★★★★★
    </div>
    
    <!-- Review Text -->
    <p class="text-gray-600 italic mb-8 relative z-10 leading-relaxed min-h-[80px]">
        "{{ $review }}"
    </p>
    
    <!-- Reviewer Info -->
    <div class="flex items-center pt-4 border-t border-gray-100">
        <div class="relative">
            <img src="{{ $image }}" alt="{{ $name }}" class="w-14 h-14 rounded-full object-cover mr-4 ring-2 ring-royalyellow-500/50">
        </div>
        <div>
            <h4 class="font-bold text-gray-900 text-lg">{{ $name }}</h4>
            <p class="text-sm font-medium text-royalyellow-600">{{ $position }}</p>
        </div>
    </div>
</div>
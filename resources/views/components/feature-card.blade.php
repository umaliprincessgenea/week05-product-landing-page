@props(['title', 'description'])

<div class="group bg-white p-8 rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-300 border border-gray-100 flex flex-col items-center text-center hover:-translate-y-2 relative overflow-hidden">
    <!-- Decorative hover background -->
    <div class="absolute inset-0 bg-gradient-to-br from-yellow-50/50 to-red-50/50 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-0 pointer-events-none"></div>
    
    <!-- Icon Container with Gradient -->
    <div class="relative z-10 w-20 h-20 bg-gradient-to-br from-red-600 to-red-800 text-white rounded-2xl shadow-lg shadow-red-200 flex items-center justify-center mb-6 -rotate-3 group-hover:rotate-0 group-hover:scale-110 transition-all duration-300">
        {{ $icon }}
    </div>
    
    <!-- Text Content -->
    <h3 class="relative z-10 text-xl font-bold text-gray-900 mb-3 tracking-wide">{{ $title }}</h3>
    <p class="relative z-10 text-gray-600 leading-relaxed font-medium">{{ $description }}</p>
</div>
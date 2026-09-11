<nav class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="text-2xl font-bold text-mango-600 flex items-center gap-2">
                    <span class="text-3xl">🥭</span> MangoRoyal.ph
                </a>
            </div>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8 items-center">
                <a href="#home" class="text-gray-600 hover:text-mango-500 font-medium">Home</a>
                <a href="#features" class="text-gray-600 hover:text-mango-500 font-medium">Features</a>
                <a href="#pricing" class="text-gray-600 hover:text-mango-500 font-medium">Pricing</a>
                <a href="#testimonials" class="text-gray-600 hover:text-mango-500 font-medium">Testimonials</a>
                <a href="#contact" class="text-gray-600 hover:text-mango-500 font-medium">Contact</a>
            </div>

            <!-- Auth Buttons -->
            <div class="hidden md:flex space-x-4 items-center">
                <a href="#" class="text-gray-600 hover:text-mango-600 font-medium">Sign In</a>
                <x-button type="primary" href="#get-started">Get Started</x-button>
            </div>
            
            <!-- Mobile menu button (Functionality requires JS) -->
            <div class="md:hidden flex items-center">
                <button class="text-gray-600 hover:text-gray-900 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
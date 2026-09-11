<nav class="bg-royalred-500/95 backdrop-blur-md shadow-lg sticky top-0 z-50 border-b border-royalred-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20 md:h-24">
            
            <!-- Logo (Responsive Image) -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="flex items-center transform transition hover:scale-105 duration-200">
                    <img src="{{ asset('assets/mangoroyal-logo.png') }}" 
                         alt="Mango Royal Logo" 
                         class="h-12 sm:h-14 md:h-16 w-auto object-contain drop-shadow-md">
                </a>
            </div>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8 items-center">
                <a href="#home" class="nav-link-desktop text-royalyellow-500 font-bold tracking-wide transition-colors duration-200">Home</a>
                <a href="#features" class="nav-link-desktop text-white hover:text-royalyellow-500 font-bold tracking-wide transition-colors duration-200">About</a>
                <a href="#pricing" class="nav-link-desktop text-white hover:text-royalyellow-500 font-bold tracking-wide transition-colors duration-200">Franchise</a>
                <a href="#testimonials" class="nav-link-desktop text-white hover:text-royalyellow-500 font-bold tracking-wide transition-colors duration-200">Branches</a>
                <a href="#contact" class="nav-link-desktop text-white hover:text-royalyellow-500 font-bold tracking-wide transition-colors duration-200">Contact</a>
            </div>

            <!-- Auth Buttons (Desktop) -->
            <div class="hidden md:flex space-x-6 items-center">
                <a href="#" class="text-white hover:text-royalyellow-500 font-medium transition-colors duration-200">Sign In</a>
                <x-button type="primary" href="#get-started" class="shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5">Get Started</x-button>
            </div>
            
            <!-- Mobile menu hamburger button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-btn" class="text-white hover:text-royalyellow-500 focus:outline-none focus:ring-2 focus:ring-royalyellow-500 rounded-lg p-2 transition-colors">
                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div id="mobile-menu" class="hidden md:hidden bg-royalred-600/95 backdrop-blur-md border-t border-royalred-700 shadow-inner absolute w-full left-0">
        <div class="px-4 pt-4 pb-6 space-y-2 sm:px-6">
            <a href="#home" class="nav-link-mobile block px-4 py-3 text-royalyellow-500 font-bold rounded-lg hover:bg-royalred-700 transition-colors">Home</a>
            <a href="#features" class="nav-link-mobile block px-4 py-3 text-white hover:text-royalyellow-500 font-bold rounded-lg hover:bg-royalred-700 transition-colors">About</a>
            <a href="#pricing" class="nav-link-mobile block px-4 py-3 text-white hover:text-royalyellow-500 font-bold rounded-lg hover:bg-royalred-700 transition-colors">Franchise</a>
            <a href="#testimonials" class="nav-link-mobile block px-4 py-3 text-white hover:text-royalyellow-500 font-bold rounded-lg hover:bg-royalred-700 transition-colors">Branches</a>
            <a href="#contact" class="nav-link-mobile block px-4 py-3 text-white hover:text-royalyellow-500 font-bold rounded-lg hover:bg-royalred-700 transition-colors">Contact</a>
            
            <div class="border-t border-royalred-500/50 mt-4 pt-6 flex flex-col gap-4">
                <a href="#" class="block px-4 py-3 text-white font-medium hover:text-royalyellow-500 text-center border border-white/20 rounded-lg hover:bg-white/10 transition-colors">Sign In</a>
                <x-button type="primary" href="#get-started" class="w-full text-center py-3 shadow-md">Get Started</x-button>
            </div>
        </div>
    </div>
</nav>

<!-- JavaScript for Mobile Menu & Active State Scroll Spy -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Toggle Mobile Menu
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        // Scroll Spy (Updates active link indicator based on scroll position)
        const sections = document.querySelectorAll('section');
        const navLinksDesktop = document.querySelectorAll('.nav-link-desktop');
        const navLinksMobile = document.querySelectorAll('.nav-link-mobile');

        window.addEventListener('scroll', () => {
            let current = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                // Offset triggers the active state slightly before reaching the exact pixel
                if (pageYOffset >= (sectionTop - 150)) {
                    current = section.getAttribute('id');
                }
            });

            const updateLinks = (links) => {
                links.forEach(link => {
                    // Reset all to white
                    link.classList.remove('text-royalyellow-500');
                    link.classList.add('text-white');
                    
                    // Highlight the active section
                    if (link.getAttribute('href') === `#${current}` && current !== '') {
                        link.classList.remove('text-white');
                        link.classList.add('text-royalyellow-500');
                    }
                });
            };

            updateLinks(navLinksDesktop);
            updateLinks(navLinksMobile);
        });
    });
</script>
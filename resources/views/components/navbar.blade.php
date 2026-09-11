<nav class="bg-royalred-500 shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20 md:h-24">
            
            <!-- Logo (Responsive Image) -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('assets/mangoroyal-logo.png') }}" 
                         alt="Mango Royal Logo" 
                         class="h-12 sm:h-14 md:h-16 w-auto object-contain">
                </a>
            </div>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8 items-center">
                <a href="#home" class="nav-link-desktop text-royalyellow-500 font-bold transition-colors">Home</a>
                <a href="#features" class="nav-link-desktop text-white hover:text-royalyellow-500 font-bold transition-colors">About</a>
                <a href="#pricing" class="nav-link-desktop text-white hover:text-royalyellow-500 font-bold transition-colors">Franchise</a>
                <a href="#testimonials" class="nav-link-desktop text-white hover:text-royalyellow-500 font-bold transition-colors">Branches</a>
                <a href="#contact" class="nav-link-desktop text-white hover:text-royalyellow-500 font-bold transition-colors">Contact</a>
            </div>

            <!-- Auth Buttons (Desktop) -->
            <div class="hidden md:flex space-x-4 items-center">
                <a href="#" class="text-white hover:text-royalyellow-500 font-medium">Sign In</a>
                <x-button type="primary" href="#get-started">Get Started</x-button>
            </div>
            
            <!-- Mobile menu hamburger button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-btn" class="text-white hover:text-royalyellow-500 focus:outline-none">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div id="mobile-menu" class="hidden md:hidden bg-royalred-600 border-t border-royalred-700 shadow-inner">
        <div class="px-4 pt-2 pb-4 space-y-1 sm:px-3">
            <a href="#home" class="nav-link-mobile block px-3 py-2 text-royalyellow-500 font-bold rounded-md hover:bg-royalred-700">Home</a>
            <a href="#features" class="nav-link-mobile block px-3 py-2 text-white hover:text-royalyellow-500 font-bold rounded-md hover:bg-royalred-700">About</a>
            <a href="#pricing" class="nav-link-mobile block px-3 py-2 text-white hover:text-royalyellow-500 font-bold rounded-md hover:bg-royalred-700">Franchise</a>
            <a href="#testimonials" class="nav-link-mobile block px-3 py-2 text-white hover:text-royalyellow-500 font-bold rounded-md hover:bg-royalred-700">Branches</a>
            <a href="#contact" class="nav-link-mobile block px-3 py-2 text-white hover:text-royalyellow-500 font-bold rounded-md hover:bg-royalred-700">Contact</a>
            
            <div class="border-t border-royalred-500 mt-4 pt-4 flex flex-col gap-3">
                <a href="#" class="block px-3 py-2 text-white font-medium hover:text-royalyellow-500 rounded-md hover:bg-royalred-700">Sign In</a>
                <x-button type="primary" href="#get-started" class="w-full text-center">Get Started</x-button>
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
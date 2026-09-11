@extends('layouts.app')

@section('content')

    <!-- 2. Hero Section (Wide Banner & Carousel) -->
    <section id="home" class="relative bg-[#fcf9f4] py-8 sm:py-12 lg:py-16 overflow-hidden text-center flex flex-col justify-center min-h-[70vh] sm:min-h-[80vh]">
        
        <!-- Repeating Mango Pattern Background -->
        <div class="absolute inset-0 z-0 opacity-20 pointer-events-none" 
             style="background-image: url('data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'120\' height=\'120\' viewBox=\'0 0 64 64\'><path d=\'M42 12C28 12 16 24 16 40c0 10 6 18 14 22 8 4 20 2 26-6 6-8 4-22-2-30-4-6-10-14-12-14z\' fill=\'none\' stroke=\'%239ca3af\' stroke-width=\'2\'/><path d=\'M42 12C38 8 38 4 38 4s-6 4-6 10c0 4 4 6 4 6s2-6 6-8z\' fill=\'none\' stroke=\'%239ca3af\' stroke-width=\'2\'/></svg>'); background-size: 120px 120px;">
        </div>

        <div class="relative z-10 w-full max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Large Top Banner Carousel (Box/Shadows Removed, Height Auto) -->
            <div id="mango-carousel" class="relative w-full mb-8 sm:mb-12 overflow-hidden group">
                
                <!-- Carousel Track -->
                <div id="carousel-track" class="flex w-full items-center transition-transform duration-700 ease-in-out bg-transparent">
                    <div class="w-full flex-shrink-0">
                        <img src="{{ asset('assets/banner-1.png') }}" alt="Mango Royal Banner 1" class="w-full h-auto block">
                    </div>
                    <div class="w-full flex-shrink-0">
                        <img src="{{ asset('assets/banner-2.png') }}" alt="Mango Royal Banner 2" class="w-full h-auto block">
                    </div>
                    <div class="w-full flex-shrink-0">
                        <img src="{{ asset('assets/banner-3.png') }}" alt="Mango Royal Banner 3" class="w-full h-auto block">
                    </div>
                    <div class="w-full flex-shrink-0">
                        <img src="{{ asset('assets/banner-4.png') }}" alt="Mango Royal Banner 4" class="w-full h-auto block">
                    </div>
                    <div class="w-full flex-shrink-0">
                        <img src="{{ asset('assets/banner-5.png') }}" alt="Mango Royal Banner 5" class="w-full h-auto block">
                    </div>
                    <div class="w-full flex-shrink-0">
                        <img src="{{ asset('assets/banner-6.png') }}" alt="Mango Royal Banner 6" class="w-full h-auto block">
                    </div>
                    <div class="w-full flex-shrink-0">
                        <img src="{{ asset('assets/banner-7.png') }}" alt="Mango Royal Banner 7" class="w-full h-auto block">
                    </div>
                    <div class="w-full flex-shrink-0">
                        <img src="{{ asset('assets/banner-8.png') }}" alt="Mango Royal Banner 8" class="w-full h-auto block">
                    </div>
                </div>
                
                <!-- Navigation Controls -->
                <button id="prevBtn" class="absolute left-2 sm:left-6 top-1/2 -translate-y-1/2 bg-white/90 rounded-full p-2 sm:p-3 shadow-lg hover:bg-yellow-400 hover:text-white transition z-20 text-red-600 focus:outline-none">
                    <svg class="w-5 h-5 sm:w-8 sm:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button id="nextBtn" class="absolute right-2 sm:right-6 top-1/2 -translate-y-1/2 bg-white/90 rounded-full p-2 sm:p-3 shadow-lg hover:bg-yellow-400 hover:text-white transition z-20 text-red-600 focus:outline-none">
                    <svg class="w-5 h-5 sm:w-8 sm:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"></path></svg>
                </button>

                <!-- Indicators -->
                <div class="absolute bottom-3 sm:bottom-6 left-1/2 -translate-x-1/2 flex space-x-1.5 sm:space-x-3 z-20 bg-black/40 px-3 sm:px-4 py-1.5 sm:py-2 rounded-full backdrop-blur-sm">
                    <button class="indicator w-2 h-2 sm:w-3 sm:h-3 rounded-full bg-white transition-colors" data-index="0"></button>
                    <button class="indicator w-2 h-2 sm:w-3 sm:h-3 rounded-full bg-white/40 transition-colors" data-index="1"></button>
                    <button class="indicator w-2 h-2 sm:w-3 sm:h-3 rounded-full bg-white/40 transition-colors" data-index="2"></button>
                    <button class="indicator w-2 h-2 sm:w-3 sm:h-3 rounded-full bg-white/40 transition-colors" data-index="3"></button>
                    <button class="indicator w-2 h-2 sm:w-3 sm:h-3 rounded-full bg-white/40 transition-colors" data-index="4"></button>
                    <button class="indicator w-2 h-2 sm:w-3 sm:h-3 rounded-full bg-white/40 transition-colors" data-index="5"></button>
                    <button class="indicator w-2 h-2 sm:w-3 sm:h-3 rounded-full bg-white/40 transition-colors" data-index="6"></button>
                    <button class="indicator w-2 h-2 sm:w-3 sm:h-3 rounded-full bg-white/40 transition-colors" data-index="7"></button>
                </div>
            </div>

            <!-- Centered Text Content -->
            <div class="space-y-3 sm:space-y-4 max-w-4xl mx-auto px-2 sm:px-4">
                <span class="text-yellow-600 font-extrabold uppercase tracking-widest text-xs sm:text-sm drop-shadow-sm">Premium Philippine Mangoes!</span>
                <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-gray-900 leading-tight">
                    Taste the <span class="text-red-600">Royalty</span> of <br class="hidden sm:inline"> Sweet Mangoes.
                </h1>
                <p class="text-base sm:text-lg text-gray-800 pt-1 sm:pt-2 pb-4 sm:pb-6 max-w-2xl mx-auto font-medium leading-relaxed">
                    MangoRoyal.ph delivers the freshest, sweetest mango purees, desserts, and fresh produce directly from Guimaras and Zambales farms straight to your door or business.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-3 sm:gap-4 max-w-md sm:max-w-none mx-auto">
                    <a href="#order" class="w-full sm:w-auto bg-yellow-500 text-white px-8 py-3.5 rounded-full font-bold text-base sm:text-lg hover:bg-yellow-600 transition shadow-md border-2 border-yellow-600 text-center">Order Now</a>
                    <a href="#menu" class="w-full sm:w-auto bg-red-600 text-white px-8 py-3.5 rounded-full font-bold text-base sm:text-lg hover:bg-red-700 transition shadow-md border-2 border-red-700 text-center">View Full Menu</a>
                </div>
            </div>

        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const track = document.getElementById('carousel-track');
                const slides = track.children;
                const prevBtn = document.getElementById('prevBtn');
                const nextBtn = document.getElementById('nextBtn');
                const indicators = document.querySelectorAll('.indicator');
                const totalSlides = slides.length;
                let currentIndex = 0;
                let autoSlideInterval;

                function updateCarousel() {
                    track.style.transform = `translateX(-${currentIndex * 100}%)`;
                    indicators.forEach((ind, i) => {
                        if (i === currentIndex) {
                            ind.classList.remove('bg-white/40');
                            ind.classList.add('bg-white');
                        } else {
                            ind.classList.add('bg-white/40');
                            ind.classList.remove('bg-white');
                        }
                    });
                }

                function nextSlide() {
                    currentIndex = (currentIndex + 1) % totalSlides;
                    updateCarousel();
                }

                function prevSlide() {
                    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                    updateCarousel();
                }

                function startAutoSlide() {
                    autoSlideInterval = setInterval(nextSlide, 4500);
                }

                function resetAutoSlide() {
                    clearInterval(autoSlideInterval);
                    startAutoSlide();
                }

                nextBtn.addEventListener('click', () => { nextSlide(); resetAutoSlide(); });
                prevBtn.addEventListener('click', () => { prevSlide(); resetAutoSlide(); });
                
                indicators.forEach((ind, i) => {
                    ind.addEventListener('click', () => {
                        currentIndex = i;
                        updateCarousel();
                        resetAutoSlide();
                    });
                });

                startAutoSlide();
            });
        </script>
    </section>

    <!-- 3. About / Features Section -->
    <section id="features" class="py-16 sm:py-20 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 sm:mb-16 lg:mb-20">
                <span class="text-yellow-600 font-bold uppercase tracking-widest text-xs sm:text-sm mb-2 sm:mb-3 block">Our Royal Standard</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-red-700 to-yellow-500 mb-4 sm:mb-6 pb-1">Why Choose Mango Royal?</h2>
                <p class="text-base sm:text-lg text-gray-600 max-w-2xl mx-auto font-medium">We take pride in delivering the highest quality mango products, combining traditional farming with world-class standards so every bite feels like royalty.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 lg:gap-10">
                <x-feature-card title="Farm to Table" description="Sourced directly from the best, carefully curated mango farms in the Philippines.">
                    <x-slot name="icon">
                        <svg class="w-8 h-8 sm:w-10 sm:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </x-slot>
                </x-feature-card>

                <x-feature-card title="100% Pure" description="No artificial sweeteners or preservatives. Just the pure, natural taste of ripe mangoes.">
                    <x-slot name="icon">
                        <svg class="w-8 h-8 sm:w-10 sm:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </x-slot>
                </x-feature-card>

                <x-feature-card title="Export Quality" description="Carefully sorted, tested, and packaged to consistently meet demanding global quality standards.">
                    <x-slot name="icon">
                        <svg class="w-8 h-8 sm:w-10 sm:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                    </x-slot>
                </x-feature-card>

                <x-feature-card title="Eco-Friendly" description="Our business embraces sustainability. All our packaging is 100% biodegradable and earth-conscious.">
                    <x-slot name="icon">
                        <svg class="w-8 h-8 sm:w-10 sm:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                    </x-slot>
                </x-feature-card>

                <x-feature-card title="Fast Delivery" description="Reliable and secure next-day delivery available for all our Metro Manila orders.">
                    <x-slot name="icon">
                        <svg class="w-8 h-8 sm:w-10 sm:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 14H5V5h10v9h-3m-4 0a2 2 0 104 0 2 2 0 00-4 0zm8-4h-2M15 7h4l3 3v4h-3m-4 0a2 2 0 104 0 2 2 0 00-4 0z"></path></svg>
                    </x-slot>
                </x-feature-card>

                <x-feature-card title="Rich in Vitamins" description="Packed with essential Vitamin C and immunity-boosting nutrients for a healthier you.">
                    <x-slot name="icon">
                        <svg class="w-8 h-8 sm:w-10 sm:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </x-slot>
                </x-feature-card>
            </div>
        </div>
    </section>

    <!-- 4. Interactive Playing Cards Product Showcase Section -->
    <section id="showcase" class="py-16 sm:py-20 lg:py-24 bg-gradient-to-b from-gray-900 via-amber-950 to-gray-900 text-white overflow-hidden relative">
        <div class="absolute inset-0 pointer-events-none opacity-30">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[320px] sm:w-[600px] h-[320px] sm:h-[600px] bg-gradient-to-r from-red-600 to-yellow-500 rounded-full blur-[100px] sm:blur-[140px]"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="text-yellow-400 font-bold uppercase tracking-widest text-xs sm:text-sm mb-2 block">Interactive Collection</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 via-amber-200 to-red-400 mb-3 sm:mb-4">
                Pick Your Royal Flavor
            </h2>
            <p class="text-gray-300 max-w-xl mx-auto mb-10 sm:mb-16 text-sm sm:text-base font-medium px-2">
                Tap any card or use controls to bring it to the front deck. Discover our premium line of fresh handcrafted mango creations.
            </p>

            <!-- Card Stack Container -->
            <div id="playing-cards-container" class="relative w-full h-[470px] sm:h-[520px] md:h-[560px] flex justify-center items-center select-none perspective-1000">
                
                <!-- Product Card 1: Mango Royal -->
                <div class="product-card absolute w-[250px] sm:w-[290px] md:w-[310px] h-[430px] sm:h-[460px] md:h-[480px] rounded-3xl p-4 sm:p-5 border-2 border-yellow-400/80 bg-gradient-to-b from-amber-900/90 via-gray-900/95 to-black shadow-2xl backdrop-blur-md cursor-pointer transition-all duration-500 ease-out flex flex-col justify-between group overflow-hidden" data-index="0">
                    <div class="flex justify-between items-center text-xs font-bold text-yellow-400 tracking-wider uppercase relative z-10">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M5 16L3 5l5.5 5L12 4l3.5 6L21 5l-2 11H5zm14 3c0 .6-.4 1-1 1H6c-.6 0-1-.4-1-1v-1h14v1z"/></svg>
                            Signature
                        </span>
                        <span>01 / 10</span>
                    </div>
                    <div class="w-full h-44 sm:h-52 md:h-56 rounded-2xl overflow-hidden border border-yellow-500/30 shadow-md my-2 sm:my-3 relative z-10">
                        <img src="{{ asset('assets/mango-royal.jpg') }}" alt="Mango Royal" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="text-left relative z-10">
                        <h3 class="text-lg sm:text-xl font-black text-white tracking-wide">Mango Royal</h3>
                        <p class="text-xs text-gray-300 mt-1 line-clamp-2">Our flagship blend featuring 100% pure Guimaras mangoes and rich whipped cream.</p>
                    </div>
                    <button class="w-full py-2.5 bg-gradient-to-r from-yellow-500 to-amber-600 text-gray-950 font-extrabold rounded-xl shadow-lg transition-all relative z-10 border border-yellow-300/40 text-xs sm:text-sm">Place Order • ₱180</button>
                </div>

                <!-- Product Card 2: Mango Strawberry -->
                <div class="product-card absolute w-[250px] sm:w-[290px] md:w-[310px] h-[430px] sm:h-[460px] md:h-[480px] rounded-3xl p-4 sm:p-5 border-2 border-red-500/60 bg-gradient-to-b from-red-950/90 via-gray-900/95 to-black shadow-2xl backdrop-blur-md cursor-pointer transition-all duration-500 ease-out flex flex-col justify-between group overflow-hidden" data-index="1">
                    <div class="flex justify-between items-center text-xs font-bold text-red-400 tracking-wider uppercase relative z-10">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                            Fruity Blend
                        </span>
                        <span>02 / 10</span>
                    </div>
                    <div class="w-full h-44 sm:h-52 md:h-56 rounded-2xl overflow-hidden border border-red-500/30 shadow-md my-2 sm:my-3 relative z-10">
                        <img src="{{ asset('assets/mango-strawberry.jpg') }}" alt="Mango Strawberry" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="text-left relative z-10">
                        <h3 class="text-lg sm:text-xl font-black text-white tracking-wide">Mango Strawberry</h3>
                        <p class="text-xs text-gray-300 mt-1 line-clamp-2">Sweet golden mangoes layered with tart Baguio strawberry preserves.</p>
                    </div>
                    <button class="w-full py-2.5 bg-gradient-to-r from-red-600 to-amber-600 text-white font-extrabold rounded-xl shadow-lg transition-all relative z-10 border border-red-400/40 text-xs sm:text-sm">Place Order • ₱160</button>
                </div>

                <!-- Product Card 3: Mango Graham -->
                <div class="product-card absolute w-[250px] sm:w-[290px] md:w-[310px] h-[430px] sm:h-[460px] md:h-[480px] rounded-3xl p-4 sm:p-5 border-2 border-amber-500/60 bg-gradient-to-b from-amber-950/90 via-gray-900/95 to-black shadow-2xl backdrop-blur-md cursor-pointer transition-all duration-500 ease-out flex flex-col justify-between group overflow-hidden" data-index="2">
                    <div class="flex justify-between items-center text-xs font-bold text-amber-400 tracking-wider uppercase relative z-10">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                            Bestseller
                        </span>
                        <span>03 / 10</span>
                    </div>
                    <div class="w-full h-44 sm:h-52 md:h-56 rounded-2xl overflow-hidden border border-amber-500/30 shadow-md my-2 sm:my-3 relative z-10">
                        <img src="{{ asset('assets/mango-graham.jpg') }}" alt="Mango Graham" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="text-left relative z-10">
                        <h3 class="text-lg sm:text-xl font-black text-white tracking-wide">Mango Graham</h3>
                        <p class="text-xs text-gray-300 mt-1 line-clamp-2">Classic Filipino favorite with crushed honey graham layers and condensed cream.</p>
                    </div>
                    <button class="w-full py-2.5 bg-gradient-to-r from-amber-500 to-yellow-600 text-gray-950 font-extrabold rounded-xl shadow-lg transition-all relative z-10 border border-amber-300/40 text-xs sm:text-sm">Place Order • ₱150</button>
                </div>

                <!-- Product Card 4: Mango Cheesecake -->
                <div class="product-card absolute w-[250px] sm:w-[290px] md:w-[310px] h-[430px] sm:h-[460px] md:h-[480px] rounded-3xl p-4 sm:p-5 border-2 border-yellow-500/60 bg-gradient-to-b from-yellow-950/90 via-gray-900/95 to-black shadow-2xl backdrop-blur-md cursor-pointer transition-all duration-500 ease-out flex flex-col justify-between group overflow-hidden" data-index="3">
                    <div class="flex justify-between items-center text-xs font-bold text-yellow-300 tracking-wider uppercase relative z-10">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5a2 2 0 10-2 2h2zm0 13C10.832 21 2 15 2 10a10 10 0 1120 0c0 5-8.832 11-10 11z"/></svg>
                            Decadent
                        </span>
                        <span>04 / 10</span>
                    </div>
                    <div class="w-full h-44 sm:h-52 md:h-56 rounded-2xl overflow-hidden border border-yellow-500/30 shadow-md my-2 sm:my-3 relative z-10">
                        <img src="{{ asset('assets/mango-cheesecake.jpg') }}" alt="Mango Cheesecake" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="text-left relative z-10">
                        <h3 class="text-lg sm:text-xl font-black text-white tracking-wide">Mango Cheesecake</h3>
                        <p class="text-xs text-gray-300 mt-1 line-clamp-2">Creamy New York style cheesecake bits swirled with sweet ripe mango nectar.</p>
                    </div>
                    <button class="w-full py-2.5 bg-gradient-to-r from-yellow-500 to-amber-600 text-gray-950 font-extrabold rounded-xl shadow-lg transition-all relative z-10 border border-yellow-300/40 text-xs sm:text-sm">Place Order • ₱170</button>
                </div>

                <!-- Product Card 5: Mango Oreo -->
                <div class="product-card absolute w-[250px] sm:w-[290px] md:w-[310px] h-[430px] sm:h-[460px] md:h-[480px] rounded-3xl p-4 sm:p-5 border-2 border-gray-600 bg-gradient-to-b from-gray-800/90 via-gray-900/95 to-black shadow-2xl backdrop-blur-md cursor-pointer transition-all duration-500 ease-out flex flex-col justify-between group overflow-hidden" data-index="4">
                    <div class="flex justify-between items-center text-xs font-bold text-gray-300 tracking-wider uppercase relative z-10">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                            Crunchy Twist
                        </span>
                        <span>05 / 10</span>
                    </div>
                    <div class="w-full h-44 sm:h-52 md:h-56 rounded-2xl overflow-hidden border border-gray-600 shadow-md my-2 sm:my-3 relative z-10">
                        <img src="{{ asset('assets/mango-oreo.jpg') }}" alt="Mango Oreo" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="text-left relative z-10">
                        <h3 class="text-lg sm:text-xl font-black text-white tracking-wide">Mango Oreo</h3>
                        <p class="text-xs text-gray-300 mt-1 line-clamp-2">Rich chocolate cookie crumbles combined with smooth tropical mango smoothie.</p>
                    </div>
                    <button class="w-full py-2.5 bg-gradient-to-r from-yellow-500 to-amber-600 text-gray-950 font-extrabold rounded-xl shadow-lg transition-all relative z-10 border border-yellow-300/40 text-xs sm:text-sm">Place Order • ₱160</button>
                </div>

                <!-- Product Card 6: Mango Banana -->
                <div class="product-card absolute w-[250px] sm:w-[290px] md:w-[310px] h-[430px] sm:h-[460px] md:h-[480px] rounded-3xl p-4 sm:p-5 border-2 border-yellow-400/60 bg-gradient-to-b from-yellow-900/90 via-gray-900/95 to-black shadow-2xl backdrop-blur-md cursor-pointer transition-all duration-500 ease-out flex flex-col justify-between group overflow-hidden" data-index="5">
                    <div class="flex justify-between items-center text-xs font-bold text-yellow-300 tracking-wider uppercase relative z-10">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            Energy Boost
                        </span>
                        <span>06 / 10</span>
                    </div>
                    <div class="w-full h-44 sm:h-52 md:h-56 rounded-2xl overflow-hidden border border-yellow-500/30 shadow-md my-2 sm:my-3 relative z-10">
                        <img src="{{ asset('assets/mango-banana.png') }}" alt="Mango Banana" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="text-left relative z-10">
                        <h3 class="text-lg sm:text-xl font-black text-white tracking-wide">Mango Banana</h3>
                        <p class="text-xs text-gray-300 mt-1 line-clamp-2">Potassium-packed blending of ripe Cavendish bananas and sweet mango puree.</p>
                    </div>
                    <button class="w-full py-2.5 bg-gradient-to-r from-yellow-500 to-amber-600 text-gray-950 font-extrabold rounded-xl shadow-lg transition-all relative z-10 border border-yellow-300/40 text-xs sm:text-sm">Place Order • ₱140</button>
                </div>

                <!-- Product Card 7: Mango Chocochips -->
                <div class="product-card absolute w-[250px] sm:w-[290px] md:w-[310px] h-[430px] sm:h-[460px] md:h-[480px] rounded-3xl p-4 sm:p-5 border-2 border-amber-700/70 bg-gradient-to-b from-amber-950/90 via-gray-900/95 to-black shadow-2xl backdrop-blur-md cursor-pointer transition-all duration-500 ease-out flex flex-col justify-between group overflow-hidden" data-index="6">
                    <div class="flex justify-between items-center text-xs font-bold text-amber-500 tracking-wider uppercase relative z-10">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.364A8 8 0 016.343 7.057a8 8 0 0111.314 11.307zM15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            Chocolate Fusion
                        </span>
                        <span>07 / 10</span>
                    </div>
                    <div class="w-full h-44 sm:h-52 md:h-56 rounded-2xl overflow-hidden border border-amber-700/40 shadow-md my-2 sm:my-3 relative z-10">
                        <img src="{{ asset('assets/mango-chocochips.jpg') }}" alt="Mango Chocochips" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="text-left relative z-10">
                        <h3 class="text-lg sm:text-xl font-black text-white tracking-wide">Mango Chocochips</h3>
                        <p class="text-xs text-gray-300 mt-1 line-clamp-2">Bittersweet dark chocolate chips mixed into refreshing crushed mango ice.</p>
                    </div>
                    <button class="w-full py-2.5 bg-gradient-to-r from-yellow-500 to-amber-600 text-gray-950 font-extrabold rounded-xl shadow-lg transition-all relative z-10 border border-yellow-300/40 text-xs sm:text-sm">Place Order • ₱155</button>
                </div>

                <!-- Product Card 8: Mango Juice -->
                <div class="product-card absolute w-[250px] sm:w-[290px] md:w-[310px] h-[430px] sm:h-[460px] md:h-[480px] rounded-3xl p-4 sm:p-5 border-2 border-amber-400/60 bg-gradient-to-b from-amber-900/80 via-gray-900/95 to-black shadow-2xl backdrop-blur-md cursor-pointer transition-all duration-500 ease-out flex flex-col justify-between group overflow-hidden" data-index="7">
                    <div class="flex justify-between items-center text-xs font-bold text-amber-300 tracking-wider uppercase relative z-10">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-amber-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                            Pure Refreshment
                        </span>
                        <span>08 / 10</span>
                    </div>
                    <div class="w-full h-44 sm:h-52 md:h-56 rounded-2xl overflow-hidden border border-amber-400/30 shadow-md my-2 sm:my-3 relative z-10">
                        <img src="{{ asset('assets/mango-juice.jpg') }}" alt="Mango Juice" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="text-left relative z-10">
                        <h3 class="text-lg sm:text-xl font-black text-white tracking-wide">Mango Juice</h3>
                        <p class="text-xs text-gray-300 mt-1 line-clamp-2">Cold-pressed 100% natural mango nectar with zero added sugars.</p>
                    </div>
                    <button class="w-full py-2.5 bg-gradient-to-r from-yellow-500 to-amber-600 text-gray-950 font-extrabold rounded-xl shadow-lg transition-all relative z-10 border border-yellow-300/40 text-xs sm:text-sm">Place Order • ₱110</button>
                </div>

                <!-- Product Card 9: Mango Mix -->
                <div class="product-card absolute w-[250px] sm:w-[290px] md:w-[310px] h-[430px] sm:h-[460px] md:h-[480px] rounded-3xl p-4 sm:p-5 border-2 border-orange-500/60 bg-gradient-to-b from-orange-950/90 via-gray-900/95 to-black shadow-2xl backdrop-blur-md cursor-pointer transition-all duration-500 ease-out flex flex-col justify-between group overflow-hidden" data-index="8">
                    <div class="flex justify-between items-center text-xs font-bold text-orange-400 tracking-wider uppercase relative z-10">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                            Special Medley
                        </span>
                        <span>09 / 10</span>
                    </div>
                    <div class="w-full h-44 sm:h-52 md:h-56 rounded-2xl overflow-hidden border border-orange-500/30 shadow-md my-2 sm:my-3 relative z-10">
                        <img src="{{ asset('assets/mango-mix.jpg') }}" alt="Mango Mix" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="text-left relative z-10">
                        <h3 class="text-lg sm:text-xl font-black text-white tracking-wide">Mango Mix</h3>
                        <p class="text-xs text-gray-300 mt-1 line-clamp-2">Assorted tropical fruit jellies paired with rich mango syrup and coconut milk.</p>
                    </div>
                    <button class="w-full py-2.5 bg-gradient-to-r from-yellow-500 to-amber-600 text-gray-950 font-extrabold rounded-xl shadow-lg transition-all relative z-10 border border-yellow-300/40 text-xs sm:text-sm">Place Order • ₱145</button>
                </div>

                <!-- Product Card 10: Mango Plain -->
                <div class="product-card absolute w-[250px] sm:w-[290px] md:w-[310px] h-[430px] sm:h-[460px] md:h-[480px] rounded-3xl p-4 sm:p-5 border-2 border-yellow-500/60 bg-gradient-to-b from-yellow-950/80 via-gray-900/95 to-black shadow-2xl backdrop-blur-md cursor-pointer transition-all duration-500 ease-out flex flex-col justify-between group overflow-hidden" data-index="9">
                    <div class="flex justify-between items-center text-xs font-bold text-yellow-400 tracking-wider uppercase relative z-10">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                            Pure Classic
                        </span>
                        <span>10 / 10</span>
                    </div>
                    <div class="w-full h-44 sm:h-52 md:h-56 rounded-2xl overflow-hidden border border-yellow-500/30 shadow-md my-2 sm:my-3 relative z-10">
                        <img src="{{ asset('assets/mango-plain.jpg') }}" alt="Mango Plain" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="text-left relative z-10">
                        <h3 class="text-lg sm:text-xl font-black text-white tracking-wide">Mango Plain</h3>
                        <p class="text-xs text-gray-300 mt-1 line-clamp-2">Unadulterated, smooth blended fresh mangoes served over crushed ice.</p>
                    </div>
                    <button class="w-full py-2.5 bg-gradient-to-r from-yellow-500 to-amber-600 text-gray-950 font-extrabold rounded-xl shadow-lg transition-all relative z-10 border border-yellow-300/40 text-xs sm:text-sm">Place Order • ₱120</button>
                </div>

            </div>

            <!-- Controls for Playing Cards -->
            <div class="flex justify-center items-center gap-4 sm:gap-6 mt-6 sm:mt-8 relative z-20">
                <button id="cardPrev" class="w-10 h-10 sm:w-12 sm:h-12 bg-gray-800/80 border border-gray-700 hover:border-yellow-400 text-yellow-400 rounded-full flex items-center justify-center transition shadow-lg hover:scale-110 active:scale-95 focus:outline-none">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path></svg>
                </button>

                <div id="cardCounter" class="text-xs sm:text-sm font-bold text-yellow-400 tracking-widest bg-black/50 px-3 sm:px-4 py-1.5 sm:py-2 rounded-full border border-yellow-500/30 backdrop-blur-sm">
                    1 / 10
                </div>

                <button id="cardNext" class="w-10 h-10 sm:w-12 sm:h-12 bg-gray-800/80 border border-gray-700 hover:border-yellow-400 text-yellow-400 rounded-full flex items-center justify-center transition shadow-lg hover:scale-110 active:scale-95 focus:outline-none">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>

        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const cardNodes = document.querySelectorAll('.product-card');
                const prevBtn = document.getElementById('cardPrev');
                const nextBtn = document.getElementById('cardNext');
                const counter = document.getElementById('cardCounter');
                
                let activeIndex = 0;
                const total = cardNodes.length;

                function updateCardPositions() {
                    const width = window.innerWidth;
                    let spacing = 110;

                    if (width < 640) {
                        spacing = 45;
                    } else if (width < 768) {
                        spacing = 75;
                    }

                    cardNodes.forEach((card, i) => {
                        const offset = i - activeIndex;
                        const absOffset = Math.abs(offset);

                        const translateX = offset * spacing;
                        const scale = 1 - absOffset * 0.07;
                        const rotate = offset * 3.5;
                        const zIndex = 50 - absOffset;
                        const opacity = absOffset > 3 ? 0 : 1 - absOffset * 0.25;
                        const pointerEvents = absOffset > 3 ? 'none' : 'auto';

                        card.style.transform = `translateX(${translateX}px) scale(${Math.max(scale, 0.65)}) rotate(${rotate}deg)`;
                        card.style.zIndex = zIndex;
                        card.style.opacity = opacity;
                        card.style.pointerEvents = pointerEvents;

                        if (offset === 0) {
                            card.classList.add('ring-4', 'ring-yellow-400/80', 'shadow-[0_0_35px_rgba(234,179,8,0.4)]');
                            card.classList.remove('brightness-75');
                        } else {
                            card.classList.remove('ring-4', 'ring-yellow-400/80', 'shadow-[0_0_35px_rgba(234,179,8,0.4)]');
                            card.classList.add('brightness-75');
                        }
                    });

                    counter.innerText = `${activeIndex + 1} / ${total}`;
                }

                cardNodes.forEach((card, index) => {
                    card.addEventListener('click', () => {
                        activeIndex = index;
                        updateCardPositions();
                    });
                });

                prevBtn.addEventListener('click', () => {
                    activeIndex = (activeIndex - 1 + total) % total;
                    updateCardPositions();
                });

                nextBtn.addEventListener('click', () => {
                    activeIndex = (activeIndex + 1) % total;
                    updateCardPositions();
                });

                window.addEventListener('resize', updateCardPositions);
                updateCardPositions();
            });
        </script>
    </section>

    <!-- 5. Single Investment Package Section -->
    <section id="pricing" class="py-16 sm:py-20 lg:py-24 bg-gradient-to-br from-amber-950 via-gray-900 to-red-950 text-white relative overflow-hidden">
        
        <!-- Subtle Glow Elements -->
        <div class="absolute top-0 right-0 w-64 sm:w-96 h-64 sm:h-96 bg-yellow-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-64 sm:w-96 h-64 sm:h-96 bg-red-600/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="text-center mb-10 sm:mb-12">
                <span class="inline-flex items-center gap-1.5 px-3.5 sm:px-4 py-1.5 rounded-full bg-yellow-500/20 border border-yellow-400/30 text-yellow-300 font-extrabold uppercase text-xs tracking-widest mb-3">
                    <svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0h5m-5 0V12m0 0h5m-5 0H7"></path></svg>
                    Franchise Opportunity
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 via-amber-200 to-yellow-500 mb-3 sm:mb-4">
                    Own a Mango Royal Outlet
                </h2>
                <p class="text-gray-300 max-w-2xl mx-auto text-sm sm:text-base font-medium">
                    Join our fast-growing national brand with a complete turnkey store package designed for maximum profitability.
                </p>
            </div>

            <!-- Single Franchise Investment Card -->
            <div class="bg-gradient-to-b from-gray-900/90 to-black/95 border-2 border-yellow-500/60 rounded-2xl sm:rounded-3xl p-5 sm:p-8 lg:p-12 shadow-[0_0_50px_rgba(234,179,8,0.2)] backdrop-blur-xl relative overflow-hidden">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 sm:gap-8 lg:gap-12 items-center">
                    
                    <!-- Left: Promotional Image & Badges -->
                    <div class="lg:col-span-5 flex flex-col items-center">
                        <div class="relative w-full rounded-2xl overflow-hidden border-2 border-yellow-500/40 shadow-2xl group">
                            <img src="{{ asset('assets/pricing.png') }}" alt="Total Investment Package Store Front" class="w-full h-auto object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                            <div class="absolute bottom-3 left-3 right-3 sm:bottom-4 sm:left-4 sm:right-4 text-left">
                                <span class="bg-yellow-500 text-gray-950 text-xs font-black px-2.5 py-1 rounded-full uppercase tracking-wider">In-Line Store</span>
                                <p class="text-xs text-gray-200 mt-1 font-medium">Fully equipped commercial layout concept</p>
                            </div>
                        </div>

                        <!-- Contract Highlights -->
                        <div class="grid grid-cols-2 gap-2.5 sm:gap-3 w-full mt-3 sm:mt-4">
                            <div class="bg-gray-800/80 border border-gray-700/80 rounded-xl p-2.5 sm:p-3 text-center">
                                <span class="block text-[10px] sm:text-xs text-gray-400 font-semibold uppercase">Contract Term</span>
                                <span class="text-xs sm:text-sm font-extrabold text-yellow-400">3-Year Contract</span>
                            </div>
                            <div class="bg-gray-800/80 border border-gray-700/80 rounded-xl p-2.5 sm:p-3 text-center">
                                <span class="block text-[10px] sm:text-xs text-gray-400 font-semibold uppercase">Renewal</span>
                                <span class="text-xs sm:text-sm font-extrabold text-yellow-400">No Renewal Fee</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Pricing Details & Features -->
                    <div class="lg:col-span-7 space-y-5 sm:space-y-6 text-left">
                        
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span class="text-xs font-extrabold uppercase tracking-widest text-yellow-400">Total Investment Package</span>
                            </div>
                            <h3 class="text-xl sm:text-3xl font-black text-white">In-Line Store Format</h3>
                            <div class="mt-2 sm:mt-3 flex flex-wrap items-baseline gap-2">
                                <span class="text-3xl sm:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 via-amber-300 to-yellow-500">
                                    ₱324,000.00
                                </span>
                                <span class="text-xs text-gray-400 font-medium">(Excluding Construction Cost)</span>
                            </div>
                        </div>

                        <hr class="border-gray-800">

                        <!-- Package Inclusions -->
                        <div>
                            <h4 class="text-xs sm:text-sm font-bold uppercase tracking-wider text-gray-300 mb-3 flex items-center gap-2">
                                <svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                Package Inclusions
                            </h4>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
                                <div class="flex items-center gap-2.5 text-xs sm:text-sm text-gray-200">
                                    <svg class="w-4 h-4 text-green-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    Franchise fee
                                </div>
                                <div class="flex items-center gap-2.5 text-xs sm:text-sm text-gray-200">
                                    <svg class="w-4 h-4 text-green-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    Security bond
                                </div>
                                <div class="flex items-center gap-2.5 text-xs sm:text-sm text-gray-200">
                                    <svg class="w-4 h-4 text-green-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    VAT-inclusive
                                </div>
                                <div class="flex items-center gap-2.5 text-xs sm:text-sm text-gray-200">
                                    <svg class="w-4 h-4 text-green-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    Initial equipment and consumables
                                </div>
                                <div class="flex items-center gap-2.5 text-xs sm:text-sm text-gray-200">
                                    <svg class="w-4 h-4 text-green-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    Staff and owner training
                                </div>
                                <div class="flex items-center gap-2.5 text-xs sm:text-sm text-gray-200">
                                    <svg class="w-4 h-4 text-green-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    Opening support
                                </div>
                            </div>
                        </div>

                        <!-- Additional Monthly Fees -->
                        <div class="bg-gray-800/50 border border-gray-700/60 rounded-2xl p-3.5 sm:p-4">
                            <h4 class="text-xs font-bold uppercase tracking-wider text-amber-400 mb-2 flex items-center gap-2">
                                <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                Additional Monthly Fees
                            </h4>
                            <ul class="space-y-1.5 text-xs text-gray-300">
                                <li class="flex items-start gap-2">
                                    <span class="text-yellow-400 font-bold">•</span>
                                    <span><strong class="text-white">₱5,000.00</strong> Fixed continuation fee (for trademark and after-sales support)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-yellow-400 font-bold">•</span>
                                    <span><strong class="text-white">₱2,500.00</strong> Marketing fee</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Important Disclaimer & CTA -->
                        <div class="pt-2 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                            <p class="text-xs text-gray-400 italic">
                                *Store renovation is not included in the package.
                            </p>
                            <a href="#contact" class="w-full sm:w-auto px-6 sm:px-8 py-3.5 bg-gradient-to-r from-yellow-500 via-amber-500 to-yellow-600 hover:from-yellow-400 hover:to-amber-500 text-gray-950 font-black rounded-xl shadow-xl transition-all border border-yellow-300/50 text-center text-xs sm:text-sm uppercase tracking-wider shrink-0">
                                Apply for Franchise
                            </a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- 6. Testimonials Section -->
    <section id="testimonials" class="py-16 sm:py-20 lg:py-24 bg-gradient-to-b from-amber-50/60 via-amber-100/30 to-amber-50/80 relative overflow-hidden">
        <!-- Ambient Decorative Glows -->
        <div class="absolute -top-24 -left-24 w-72 sm:w-96 h-72 sm:h-96 bg-yellow-300/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -right-24 w-72 sm:w-96 h-72 sm:h-96 bg-red-400/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-12 sm:mb-16">
                <span class="inline-flex items-center gap-1.5 px-3.5 sm:px-4 py-1.5 rounded-full bg-yellow-100 border border-yellow-300/70 text-yellow-800 font-extrabold uppercase text-xs tracking-widest mb-3 shadow-sm">
                    <svg class="w-4 h-4 text-yellow-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    Partner Success Stories
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-gray-900 tracking-tight mb-3 sm:mb-4">
                    What Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 via-amber-600 to-yellow-600">Partners Say</span>
                </h2>
                <p class="text-base sm:text-lg text-gray-600 max-w-2xl mx-auto font-medium">
                    Trusted by bakeries, franchise partners, and culinary teams across the Philippines.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
                <x-testimonial-card 
                    image="https://randomuser.me/api/portraits/women/44.jpg" 
                    name="Maria Santos" 
                    position="Bakeshop Owner" 
                    review="The mango purees from MangoRoyal are an absolute game changer for our Mango Bravo cakes. Always fresh and incredibly sweet!" 
                />
                <x-testimonial-card 
                    image="https://randomuser.me/api/portraits/men/32.jpg" 
                    name="Juan Dela Cruz" 
                    position="Franchise Partner" 
                    review="Opening an in-line store was seamless. The training and support staff guided us every step of the way!" 
                />
                <x-testimonial-card 
                    image="https://randomuser.me/api/portraits/women/68.jpg" 
                    name="Elena Reyes" 
                    position="Restaurant Manager" 
                    review="Their B2B supply is punctual and premium quality. Our mango shakes are now our top selling beverage." 
                />
            </div>
        </div>
    </section>

    <!-- 7. Call-to-Action Section -->
    <section id="contact" class="py-16 sm:py-20 lg:py-24 bg-gradient-to-br from-red-700 via-red-800 to-amber-950 text-white relative overflow-hidden">
        <!-- Ambient Decorative Background Lights -->
        <div class="absolute top-1/2 left-10 -translate-y-1/2 w-64 sm:w-80 h-64 sm:h-80 bg-yellow-400/15 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-20 right-10 w-72 sm:w-96 h-72 sm:h-96 bg-red-500/20 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <!-- Section Badge -->
            <span class="inline-flex items-center gap-1.5 px-3.5 sm:px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-yellow-300 font-extrabold uppercase text-xs tracking-widest mb-4 sm:mb-6">
                <svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                Get Started Today
            </span>

            <h2 class="text-3xl sm:text-5xl lg:text-6xl font-black text-white leading-tight mb-4 sm:mb-6 tracking-tight drop-shadow-md">
                Ready to Experience the <br class="hidden sm:inline"><span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 via-amber-200 to-yellow-400">Sweetness?</span>
            </h2>
            
            <p class="text-base sm:text-lg md:text-xl text-red-100 max-w-2xl mx-auto mb-8 sm:mb-10 font-medium leading-relaxed">
                Register today to receive your first batch of premium mangoes or get in touch with our dedicated team to launch your store location.
            </p>
            
            <div class="flex flex-col sm:flex-row justify-center items-center gap-3 sm:gap-4 max-w-md mx-auto">
                <a href="#" class="w-full sm:w-auto px-8 sm:px-9 py-3.5 sm:py-4 bg-gradient-to-r from-yellow-400 via-amber-500 to-yellow-500 hover:from-yellow-300 hover:to-amber-400 text-gray-950 font-black rounded-xl shadow-2xl hover:shadow-yellow-500/30 transition-all duration-300 transform hover:-translate-y-1 text-sm sm:text-base text-center uppercase tracking-wider border border-yellow-200/50">
                    Register Now
                </a>
                <a href="#" class="w-full sm:w-auto px-8 sm:px-9 py-3.5 sm:py-4 bg-white/10 backdrop-blur-md hover:bg-white/20 border-2 border-white/30 hover:border-white text-white font-bold rounded-xl shadow-lg transition-all duration-300 transform hover:-translate-y-1 text-sm sm:text-base text-center uppercase tracking-wider">
                    Contact Sales
                </a>
            </div>
        </div>
    </section>

@endsection
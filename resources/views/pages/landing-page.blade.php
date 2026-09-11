@extends('layouts.app')

@section('content')

    <!-- 2. Hero Section (Wide Banner & Carousel) -->
    <section id="home" class="relative bg-[#fcf9f4] py-16 overflow-hidden text-center flex flex-col justify-center min-h-[80vh]">
        
        <!-- Repeating Mango Pattern Background (Aesthetic, Colorless, Low Opacity) -->
        <div class="absolute inset-0 z-0 opacity-20 pointer-events-none" 
             style="background-image: url('data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'120\' height=\'120\' viewBox=\'0 0 64 64\'><path d=\'M42 12C28 12 16 24 16 40c0 10 6 18 14 22 8 4 20 2 26-6 6-8 4-22-2-30-4-6-10-14-12-14z\' fill=\'none\' stroke=\'%239ca3af\' stroke-width=\'2\'/><path d=\'M42 12C38 8 38 4 38 4s-6 4-6 10c0 4 4 6 4 6s2-6 6-8z\' fill=\'none\' stroke=\'%239ca3af\' stroke-width=\'2\'/></svg>'); background-size: 120px 120px;">
        </div>

        <div class="relative z-10 w-full max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Large Top Banner Carousel -->
            <div id="mango-carousel" class="relative w-full h-[400px] md:h-[550px] lg:h-[650px] mb-12 overflow-hidden group">
                
                <!-- Carousel Track -->
                <div id="carousel-track" class="flex w-full h-full transition-transform duration-700 ease-in-out bg-transparent">
                    <!-- Slide 1 -->
                    <div class="w-full h-full flex-shrink-0 flex items-center justify-center">
                        <img src="{{ asset('assets/banner-1.png') }}" alt="Mango Royal Banner 1" class="w-full h-full object-cover">
                    </div>
                    <!-- Slide 2 -->
                    <div class="w-full h-full flex-shrink-0 flex items-center justify-center">
                        <img src="{{ asset('assets/banner-2.png') }}" alt="Mango Royal Banner 2" class="w-full h-full object-cover">
                    </div>
                    <!-- Slide 3 -->
                    <div class="w-full h-full flex-shrink-0 flex items-center justify-center">
                        <img src="{{ asset('assets/banner-3.png') }}" alt="Mango Royal Banner 3" class="w-full h-full object-cover">
                    </div>
                    <!-- Slide 4 -->
                    <div class="w-full h-full flex-shrink-0 flex items-center justify-center">
                        <img src="{{ asset('assets/banner-4.png') }}" alt="Mango Royal Banner 4" class="w-full h-full object-cover">
                    </div>
                    <!-- Slide 5 -->
                    <div class="w-full h-full flex-shrink-0 flex items-center justify-center">
                        <img src="{{ asset('assets/banner-5.png') }}" alt="Mango Royal Banner 5" class="w-full h-full object-cover">
                    </div>
                    <!-- Slide 6 -->
                    <div class="w-full h-full flex-shrink-0 flex items-center justify-center">
                        <img src="{{ asset('assets/banner-6.png') }}" alt="Mango Royal Banner 6" class="w-full h-full object-cover">
                    </div>
                    <!-- Slide 7 -->
                    <div class="w-full h-full flex-shrink-0 flex items-center justify-center">
                        <img src="{{ asset('assets/banner-7.png') }}" alt="Mango Royal Banner 7" class="w-full h-full object-cover">
                    </div>
                    <!-- Slide 8 -->
                    <div class="w-full h-full flex-shrink-0 flex items-center justify-center">
                        <img src="{{ asset('assets/banner-8.png') }}" alt="Mango Royal Banner 8" class="w-full h-full object-cover">
                    </div>
                </div>
                
                <!-- Manual Navigation Controls -->
                <button id="prevBtn" class="absolute left-6 top-1/2 -translate-y-1/2 bg-white/90 rounded-full p-3 shadow-lg hover:bg-yellow-400 hover:text-white transition z-20 text-red-600">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button id="nextBtn" class="absolute right-6 top-1/2 -translate-y-1/2 bg-white/90 rounded-full p-3 shadow-lg hover:bg-yellow-400 hover:text-white transition z-20 text-red-600">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"></path></svg>
                </button>

                <!-- Indicators -->
                <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex space-x-3 z-20 bg-black/30 px-4 py-2 rounded-full">
                    <button class="indicator w-3 h-3 rounded-full bg-white transition-colors" data-index="0"></button>
                    <button class="indicator w-3 h-3 rounded-full bg-white/40 transition-colors" data-index="1"></button>
                    <button class="indicator w-3 h-3 rounded-full bg-white/40 transition-colors" data-index="2"></button>
                    <button class="indicator w-3 h-3 rounded-full bg-white/40 transition-colors" data-index="3"></button>
                    <button class="indicator w-3 h-3 rounded-full bg-white/40 transition-colors" data-index="4"></button>
                    <button class="indicator w-3 h-3 rounded-full bg-white/40 transition-colors" data-index="5"></button>
                    <button class="indicator w-3 h-3 rounded-full bg-white/40 transition-colors" data-index="6"></button>
                    <button class="indicator w-3 h-3 rounded-full bg-white/40 transition-colors" data-index="7"></button>
                </div>
            </div>

            <!-- Centered Text Content -->
            <div class="space-y-4 max-w-4xl mx-auto px-4">
                <span class="text-yellow-600 font-extrabold uppercase tracking-widest text-sm drop-shadow-sm">Premium Philippine Mangoes!</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-gray-900 leading-tight">
                    Taste the <span class="text-red-600">Royalty</span> of <br> Sweet Mangoes.
                </h1>
                <p class="text-lg text-gray-800 pt-2 pb-6 max-w-2xl mx-auto font-medium">
                    MangoRoyal.ph delivers the freshest, sweetest mango purees, desserts, and fresh produce directly from Guimaras and Zambales farms straight to your door or business.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#order" class="bg-yellow-500 text-white px-8 py-3 rounded-full font-bold text-lg hover:bg-yellow-600 transition shadow-md border-2 border-yellow-600">Order Now</a>
                    <a href="#menu" class="bg-red-600 text-white px-8 py-3 rounded-full font-bold text-lg hover:bg-red-700 transition shadow-md border-2 border-red-700">View Full Menu</a>
                </div>
            </div>

        </div>

        <!-- Carousel Script -->
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
    <section id="features" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <span class="text-yellow-600 font-bold uppercase tracking-widest text-sm mb-3 block">Our Royal Standard</span>
                <h2 class="text-4xl md:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-red-700 to-yellow-500 mb-6 pb-2">Why Choose Mango Royal?</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto font-medium">We take pride in delivering the highest quality mango products, combining traditional farming with world-class standards so every bite feels like royalty.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                
                <x-feature-card title="Farm to Table" description="Sourced directly from the best, carefully curated mango farms in the Philippines.">
                    <x-slot name="icon">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </x-slot>
                </x-feature-card>

                <x-feature-card title="100% Pure" description="No artificial sweeteners or preservatives. Just the pure, natural taste of ripe mangoes.">
                    <x-slot name="icon">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </x-slot>
                </x-feature-card>

                <x-feature-card title="Export Quality" description="Carefully sorted, tested, and packaged to consistently meet demanding global quality standards.">
                    <x-slot name="icon">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                    </x-slot>
                </x-feature-card>

                <x-feature-card title="Eco-Friendly" description="Our business embraces sustainability. All our packaging is 100% biodegradable and earth-conscious.">
                    <x-slot name="icon">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                    </x-slot>
                </x-feature-card>

                <x-feature-card title="Fast Delivery" description="Reliable and secure next-day delivery available for all our Metro Manila orders.">
                    <x-slot name="icon">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 14H5V5h10v9h-3m-4 0a2 2 0 104 0 2 2 0 00-4 0zm8-4h-2M15 7h4l3 3v4h-3m-4 0a2 2 0 104 0 2 2 0 00-4 0z"></path></svg>
                    </x-slot>
                </x-feature-card>

                <x-feature-card title="Rich in Vitamins" description="Packed with essential Vitamin C and immunity-boosting nutrients for a healthier you.">
                    <x-slot name="icon">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </x-slot>
                </x-feature-card>

            </div>
        </div>
    </section>

    <!-- 4. Interactive Playing Cards Product Showcase Section -->
    <section id="showcase" class="py-24 bg-gradient-to-b from-gray-900 via-amber-950 to-gray-900 text-white overflow-hidden relative">
        
        <!-- Subtle Ambient Background Glow -->
        <div class="absolute inset-0 pointer-events-none opacity-30">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-r from-red-600 to-yellow-500 rounded-full blur-[140px]"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            
            <span class="text-yellow-400 font-bold uppercase tracking-widest text-sm mb-2 block">Interactive Collection</span>
            <h2 class="text-4xl md:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 via-amber-200 to-red-400 mb-4">
                Pick Your Royal Flavor
            </h2>
            <p class="text-gray-300 max-w-xl mx-auto mb-16 text-base font-medium">
                Tap any card to bring it to the front deck. Discover our premium line of fresh handcrafted mango creations.
            </p>

            <!-- Card Stack Container -->
            <div id="playing-cards-container" class="relative w-full h-[520px] md:h-[560px] flex justify-center items-center select-none perspective-1000">
                
                <!-- Product Card 1: Mango Royal -->
                <div class="product-card absolute w-[270px] sm:w-[300px] h-[440px] md:h-[470px] rounded-3xl p-5 border-2 border-yellow-400/80 bg-gradient-to-b from-amber-900/90 via-gray-900/95 to-black shadow-2xl backdrop-blur-md cursor-pointer transition-all duration-500 ease-out flex flex-col justify-between group overflow-hidden" data-index="0">
                    <div class="absolute inset-0 bg-gradient-to-tr from-yellow-500/10 via-transparent to-red-500/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    
                    <div class="flex justify-between items-center text-xs font-bold text-yellow-400 tracking-wider uppercase relative z-10">
                        <span class="flex items-center gap-1"><span class="text-base">👑</span> Signature</span>
                        <span>01 / 10</span>
                    </div>

                    <div class="w-full h-56 rounded-2xl overflow-hidden border border-yellow-500/30 shadow-md my-3 relative z-10">
                        <img src="{{ asset('assets/mango-royal.jpg') }}" alt="Mango Royal" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>

                    <div class="text-left relative z-10">
                        <h3 class="text-xl font-black text-white tracking-wide">Mango Royal</h3>
                        <p class="text-xs text-gray-300 mt-1 line-clamp-2">Our flagship blend featuring 100% pure Guimaras mangoes and rich whipped cream.</p>
                    </div>

                    <button class="w-full py-2.5 bg-gradient-to-r from-yellow-500 to-amber-600 hover:from-yellow-400 hover:to-amber-500 text-gray-950 font-extrabold rounded-xl shadow-lg transition-all relative z-10 border border-yellow-300/40 text-sm">
                        Place Order • ₱180
                    </button>
                </div>

                <!-- Product Card 2: Mango Strawberry -->
                <div class="product-card absolute w-[270px] sm:w-[300px] h-[440px] md:h-[470px] rounded-3xl p-5 border-2 border-red-500/60 bg-gradient-to-b from-red-950/90 via-gray-900/95 to-black shadow-2xl backdrop-blur-md cursor-pointer transition-all duration-500 ease-out flex flex-col justify-between group overflow-hidden" data-index="1">
                    <div class="absolute inset-0 bg-gradient-to-tr from-red-500/10 via-transparent to-yellow-500/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>

                    <div class="flex justify-between items-center text-xs font-bold text-red-400 tracking-wider uppercase relative z-10">
                        <span class="flex items-center gap-1"><span class="text-base">🍓</span> Fruity Blend</span>
                        <span>02 / 10</span>
                    </div>

                    <div class="w-full h-56 rounded-2xl overflow-hidden border border-red-500/30 shadow-md my-3 relative z-10">
                        <img src="{{ asset('assets/mango-strawberry.jpg') }}" alt="Mango Strawberry" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>

                    <div class="text-left relative z-10">
                        <h3 class="text-xl font-black text-white tracking-wide">Mango Strawberry</h3>
                        <p class="text-xs text-gray-300 mt-1 line-clamp-2">Sweet golden mangoes layered with tart Baguio strawberry preserves.</p>
                    </div>

                    <button class="w-full py-2.5 bg-gradient-to-r from-red-600 to-amber-600 hover:from-red-500 hover:to-amber-500 text-white font-extrabold rounded-xl shadow-lg transition-all relative z-10 border border-red-400/40 text-sm">
                        Place Order • ₱160
                    </button>
                </div>

                <!-- Product Card 3: Mango Graham -->
                <div class="product-card absolute w-[270px] sm:w-[300px] h-[440px] md:h-[470px] rounded-3xl p-5 border-2 border-amber-500/60 bg-gradient-to-b from-amber-950/90 via-gray-900/95 to-black shadow-2xl backdrop-blur-md cursor-pointer transition-all duration-500 ease-out flex flex-col justify-between group overflow-hidden" data-index="2">
                    <div class="absolute inset-0 bg-gradient-to-tr from-amber-500/10 via-transparent to-yellow-500/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>

                    <div class="flex justify-between items-center text-xs font-bold text-amber-400 tracking-wider uppercase relative z-10">
                        <span class="flex items-center gap-1"><span class="text-base">🥐</span> Bestseller</span>
                        <span>03 / 10</span>
                    </div>

                    <div class="w-full h-56 rounded-2xl overflow-hidden border border-amber-500/30 shadow-md my-3 relative z-10">
                        <img src="{{ asset('assets/mango-graham.jpg') }}" alt="Mango Graham" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>

                    <div class="text-left relative z-10">
                        <h3 class="text-xl font-black text-white tracking-wide">Mango Graham</h3>
                        <p class="text-xs text-gray-300 mt-1 line-clamp-2">Classic Filipino favorite with crushed honey graham layers and condensed cream.</p>
                    </div>

                    <button class="w-full py-2.5 bg-gradient-to-r from-amber-500 to-yellow-600 hover:from-amber-400 hover:to-yellow-500 text-gray-950 font-extrabold rounded-xl shadow-lg transition-all relative z-10 border border-amber-300/40 text-sm">
                        Place Order • ₱150
                    </button>
                </div>

                <!-- Product Card 4: Mango Cheesecake -->
                <div class="product-card absolute w-[270px] sm:w-[300px] h-[440px] md:h-[470px] rounded-3xl p-5 border-2 border-yellow-500/60 bg-gradient-to-b from-yellow-950/90 via-gray-900/95 to-black shadow-2xl backdrop-blur-md cursor-pointer transition-all duration-500 ease-out flex flex-col justify-between group overflow-hidden" data-index="3">
                    <div class="absolute inset-0 bg-gradient-to-tr from-yellow-500/10 via-transparent to-amber-500/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>

                    <div class="flex justify-between items-center text-xs font-bold text-yellow-300 tracking-wider uppercase relative z-10">
                        <span class="flex items-center gap-1"><span class="text-base">🧀</span> Decadent</span>
                        <span>04 / 10</span>
                    </div>

                    <div class="w-full h-56 rounded-2xl overflow-hidden border border-yellow-500/30 shadow-md my-3 relative z-10">
                        <img src="{{ asset('assets/mango-cheesecake.jpg') }}" alt="Mango Cheesecake" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>

                    <div class="text-left relative z-10">
                        <h3 class="text-xl font-black text-white tracking-wide">Mango Cheesecake</h3>
                        <p class="text-xs text-gray-300 mt-1 line-clamp-2">Creamy New York style cheesecake bits swirled with sweet ripe mango nectar.</p>
                    </div>

                    <button class="w-full py-2.5 bg-gradient-to-r from-yellow-500 to-amber-600 hover:from-yellow-400 hover:to-amber-500 text-gray-950 font-extrabold rounded-xl shadow-lg transition-all relative z-10 border border-yellow-300/40 text-sm">
                        Place Order • ₱170
                    </button>
                </div>

                <!-- Product Card 5: Mango Oreo -->
                <div class="product-card absolute w-[270px] sm:w-[300px] h-[440px] md:h-[470px] rounded-3xl p-5 border-2 border-gray-600 bg-gradient-to-b from-gray-800/90 via-gray-900/95 to-black shadow-2xl backdrop-blur-md cursor-pointer transition-all duration-500 ease-out flex flex-col justify-between group overflow-hidden" data-index="4">
                    <div class="absolute inset-0 bg-gradient-to-tr from-gray-500/10 via-transparent to-yellow-500/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>

                    <div class="flex justify-between items-center text-xs font-bold text-gray-300 tracking-wider uppercase relative z-10">
                        <span class="flex items-center gap-1"><span class="text-base">🍪</span> Crunchy Twist</span>
                        <span>05 / 10</span>
                    </div>

                    <div class="w-full h-56 rounded-2xl overflow-hidden border border-gray-600 shadow-md my-3 relative z-10">
                        <img src="{{ asset('assets/mango-oreo.jpg') }}" alt="Mango Oreo" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>

                    <div class="text-left relative z-10">
                        <h3 class="text-xl font-black text-white tracking-wide">Mango Oreo</h3>
                        <p class="text-xs text-gray-300 mt-1 line-clamp-2">Rich chocolate cookie crumbles combined with smooth tropical mango smoothie.</p>
                    </div>

                    <button class="w-full py-2.5 bg-gradient-to-r from-yellow-500 to-amber-600 hover:from-yellow-400 hover:to-amber-500 text-gray-950 font-extrabold rounded-xl shadow-lg transition-all relative z-10 border border-yellow-300/40 text-sm">
                        Place Order • ₱160
                    </button>
                </div>

                <!-- Product Card 6: Mango Banana -->
                <div class="product-card absolute w-[270px] sm:w-[300px] h-[440px] md:h-[470px] rounded-3xl p-5 border-2 border-yellow-400/60 bg-gradient-to-b from-yellow-900/90 via-gray-900/95 to-black shadow-2xl backdrop-blur-md cursor-pointer transition-all duration-500 ease-out flex flex-col justify-between group overflow-hidden" data-index="5">
                    <div class="flex justify-between items-center text-xs font-bold text-yellow-300 tracking-wider uppercase relative z-10">
                        <span class="flex items-center gap-1"><span class="text-base">🍌</span> Energy Boost</span>
                        <span>06 / 10</span>
                    </div>

                    <div class="w-full h-56 rounded-2xl overflow-hidden border border-yellow-500/30 shadow-md my-3 relative z-10">
                        <img src="{{ asset('assets/mango-banana.png') }}" alt="Mango Banana" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>

                    <div class="text-left relative z-10">
                        <h3 class="text-xl font-black text-white tracking-wide">Mango Banana</h3>
                        <p class="text-xs text-gray-300 mt-1 line-clamp-2">Potassium-packed blending of ripe Cavendish bananas and sweet mango puree.</p>
                    </div>

                    <button class="w-full py-2.5 bg-gradient-to-r from-yellow-500 to-amber-600 hover:from-yellow-400 hover:to-amber-500 text-gray-950 font-extrabold rounded-xl shadow-lg transition-all relative z-10 border border-yellow-300/40 text-sm">
                        Place Order • ₱140
                    </button>
                </div>

                <!-- Product Card 7: Mango Chocochips -->
                <div class="product-card absolute w-[270px] sm:w-[300px] h-[440px] md:h-[470px] rounded-3xl p-5 border-2 border-amber-700/70 bg-gradient-to-b from-amber-950/90 via-gray-900/95 to-black shadow-2xl backdrop-blur-md cursor-pointer transition-all duration-500 ease-out flex flex-col justify-between group overflow-hidden" data-index="6">
                    <div class="flex justify-between items-center text-xs font-bold text-amber-500 tracking-wider uppercase relative z-10">
                        <span class="flex items-center gap-1"><span class="text-base">🍫</span> Chocolate Fusion</span>
                        <span>07 / 10</span>
                    </div>

                    <div class="w-full h-56 rounded-2xl overflow-hidden border border-amber-700/40 shadow-md my-3 relative z-10">
                        <img src="{{ asset('assets/mango-chocochips.jpg') }}" alt="Mango Chocochips" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>

                    <div class="text-left relative z-10">
                        <h3 class="text-xl font-black text-white tracking-wide">Mango Chocochips</h3>
                        <p class="text-xs text-gray-300 mt-1 line-clamp-2">Bittersweet dark chocolate chips mixed into refreshing crushed mango ice.</p>
                    </div>

                    <button class="w-full py-2.5 bg-gradient-to-r from-yellow-500 to-amber-600 hover:from-yellow-400 hover:to-amber-500 text-gray-950 font-extrabold rounded-xl shadow-lg transition-all relative z-10 border border-yellow-300/40 text-sm">
                        Place Order • ₱155
                    </button>
                </div>

                <!-- Product Card 8: Mango Juice -->
                <div class="product-card absolute w-[270px] sm:w-[300px] h-[440px] md:h-[470px] rounded-3xl p-5 border-2 border-amber-400/60 bg-gradient-to-b from-amber-900/80 via-gray-900/95 to-black shadow-2xl backdrop-blur-md cursor-pointer transition-all duration-500 ease-out flex flex-col justify-between group overflow-hidden" data-index="7">
                    <div class="flex justify-between items-center text-xs font-bold text-amber-300 tracking-wider uppercase relative z-10">
                        <span class="flex items-center gap-1"><span class="text-base">🧃</span> Pure Refreshment</span>
                        <span>08 / 10</span>
                    </div>

                    <div class="w-full h-56 rounded-2xl overflow-hidden border border-amber-400/30 shadow-md my-3 relative z-10">
                        <img src="{{ asset('assets/mango-juice.jpg') }}" alt="Mango Juice" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>

                    <div class="text-left relative z-10">
                        <h3 class="text-xl font-black text-white tracking-wide">Mango Juice</h3>
                        <p class="text-xs text-gray-300 mt-1 line-clamp-2">Cold-pressed 100% natural mango nectar with zero added sugars.</p>
                    </div>

                    <button class="w-full py-2.5 bg-gradient-to-r from-yellow-500 to-amber-600 hover:from-yellow-400 hover:to-amber-500 text-gray-950 font-extrabold rounded-xl shadow-lg transition-all relative z-10 border border-yellow-300/40 text-sm">
                        Place Order • ₱110
                    </button>
                </div>

                <!-- Product Card 9: Mango Mix -->
                <div class="product-card absolute w-[270px] sm:w-[300px] h-[440px] md:h-[470px] rounded-3xl p-5 border-2 border-orange-500/60 bg-gradient-to-b from-orange-950/90 via-gray-900/95 to-black shadow-2xl backdrop-blur-md cursor-pointer transition-all duration-500 ease-out flex flex-col justify-between group overflow-hidden" data-index="8">
                    <div class="flex justify-between items-center text-xs font-bold text-orange-400 tracking-wider uppercase relative z-10">
                        <span class="flex items-center gap-1"><span class="text-base">🍧</span> Special Medley</span>
                        <span>09 / 10</span>
                    </div>

                    <div class="w-full h-56 rounded-2xl overflow-hidden border border-orange-500/30 shadow-md my-3 relative z-10">
                        <img src="{{ asset('assets/mango-mix.jpg') }}" alt="Mango Mix" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>

                    <div class="text-left relative z-10">
                        <h3 class="text-xl font-black text-white tracking-wide">Mango Mix</h3>
                        <p class="text-xs text-gray-300 mt-1 line-clamp-2">Assorted tropical fruit jellies paired with rich mango syrup and coconut milk.</p>
                    </div>

                    <button class="w-full py-2.5 bg-gradient-to-r from-yellow-500 to-amber-600 hover:from-yellow-400 hover:to-amber-500 text-gray-950 font-extrabold rounded-xl shadow-lg transition-all relative z-10 border border-yellow-300/40 text-sm">
                        Place Order • ₱145
                    </button>
                </div>

                <!-- Product Card 10: Mango Plain -->
                <div class="product-card absolute w-[270px] sm:w-[300px] h-[440px] md:h-[470px] rounded-3xl p-5 border-2 border-yellow-500/60 bg-gradient-to-b from-yellow-950/80 via-gray-900/95 to-black shadow-2xl backdrop-blur-md cursor-pointer transition-all duration-500 ease-out flex flex-col justify-between group overflow-hidden" data-index="9">
                    <div class="flex justify-between items-center text-xs font-bold text-yellow-400 tracking-wider uppercase relative z-10">
                        <span class="flex items-center gap-1"><span class="text-base">🥭</span> Pure Classic</span>
                        <span>10 / 10</span>
                    </div>

                    <div class="w-full h-56 rounded-2xl overflow-hidden border border-yellow-500/30 shadow-md my-3 relative z-10">
                        <img src="{{ asset('assets/mango-plain.jpg') }}" alt="Mango Plain" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>

                    <div class="text-left relative z-10">
                        <h3 class="text-xl font-black text-white tracking-wide">Mango Plain</h3>
                        <p class="text-xs text-gray-300 mt-1 line-clamp-2">Unadulterated, smooth blended fresh mangoes served over crushed ice.</p>
                    </div>

                    <button class="w-full py-2.5 bg-gradient-to-r from-yellow-500 to-amber-600 hover:from-yellow-400 hover:to-amber-500 text-gray-950 font-extrabold rounded-xl shadow-lg transition-all relative z-10 border border-yellow-300/40 text-sm">
                        Place Order • ₱120
                    </button>
                </div>

            </div>

            <!-- Controls for Playing Cards -->
            <div class="flex justify-center items-center gap-6 mt-8 relative z-20">
                <button id="cardPrev" class="w-12 h-12 bg-gray-800/80 border border-gray-700 hover:border-yellow-400 text-yellow-400 rounded-full flex items-center justify-center transition shadow-lg hover:scale-110">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path></svg>
                </button>

                <div id="cardCounter" class="text-sm font-bold text-yellow-400 tracking-widest bg-black/40 px-4 py-2 rounded-full border border-yellow-500/30">
                    1 / 10
                </div>

                <button id="cardNext" class="w-12 h-12 bg-gray-800/80 border border-gray-700 hover:border-yellow-400 text-yellow-400 rounded-full flex items-center justify-center transition shadow-lg hover:scale-110">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>

        </div>

        <!-- Interactive Deck JS Script -->
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const cardNodes = document.querySelectorAll('.product-card');
                const prevBtn = document.getElementById('cardPrev');
                const nextBtn = document.getElementById('cardNext');
                const counter = document.getElementById('cardCounter');
                
                let activeIndex = 0; // Starts with Mango Royal in front
                const total = cardNodes.length;

                function updateCardPositions() {
                    const isMobile = window.innerWidth < 640;
                    const spacing = isMobile ? 65 : 110;

                    cardNodes.forEach((card, i) => {
                        const offset = i - activeIndex;
                        const absOffset = Math.abs(offset);

                        const translateX = offset * spacing;
                        const scale = 1 - absOffset * 0.08;
                        const rotate = offset * 4;
                        const zIndex = 50 - absOffset;
                        const opacity = absOffset > 3 ? 0 : 1 - absOffset * 0.22;
                        const pointerEvents = absOffset > 3 ? 'none' : 'auto';

                        card.style.transform = `translateX(${translateX}px) scale(${Math.max(scale, 0.6)}) rotate(${rotate}deg)`;
                        card.style.zIndex = zIndex;
                        card.style.opacity = opacity;
                        card.style.pointerEvents = pointerEvents;

                        // Active card glow and focus styling
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

    <!-- 5. Pricing Section -->
    <section id="pricing" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Partner Plans & Subscriptions</h2>
                <p class="text-gray-600">Choose the right supply plan for your personal cravings or business needs.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto items-center">
                <x-pricing-card 
                    plan="Starter (Home)" 
                    price="999" 
                    :features="['5kg Premium Mangoes', '1L Mango Puree', 'Free Delivery within MM', 'Email Support']" 
                />
                <x-pricing-card 
                    plan="Professional (Café)" 
                    price="4,499" 
                    :isPopular="true"
                    :features="['20kg Premium Mangoes', '5L Mango Puree', 'Weekly Delivery Schedule', 'Priority Support', 'Marketing Materials']" 
                />
                <x-pricing-card 
                    plan="Enterprise (Wholesale)" 
                    price="12,999" 
                    :features="['100kg Premium Mangoes', 'Custom Puree Packaging', 'Dedicated Account Manager', '24/7 Phone Support', 'Custom Dashboard']" 
                />
            </div>
        </div>
    </section>

    <!-- 6. Testimonials Section -->
    <section id="testimonials" class="py-20 bg-yellow-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What Our Customers Say</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <x-testimonial-card 
                    image="https://randomuser.me/api/portraits/women/44.jpg" 
                    name="Maria Santos" 
                    position="Bakeshop Owner" 
                    review="The mango purees from MangoRoyal are an absolute game changer for our Mango Bravo cakes. Always fresh and incredibly sweet!" 
                />
                <x-testimonial-card 
                    image="https://randomuser.me/api/portraits/men/32.jpg" 
                    name="Juan Dela Cruz" 
                    position="Home Customer" 
                    review="I ordered the Starter box and my family finished it in two days. You can really taste the export-quality standard." 
                />
                <x-testimonial-card 
                    image="https://randomuser.me/api/portraits/women/68.jpg" 
                    name="Elena Reyes" 
                    position="Restaurant Manager" 
                    review="Their enterprise dashboard makes ordering our weekly supply so easy. Delivery is always on time, and quality never drops." 
                />
            </div>
        </div>
    </section>

    <!-- 7. Call-to-Action Section -->
    <section id="contact" class="py-20 bg-red-600 text-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-5xl font-bold mb-6">Ready to Experience the Sweetness?</h2>
            <p class="text-lg text-red-100 mb-10">Register today to get your first box of premium mangoes at 20% off, or contact our sales team for enterprise rates.</p>
            
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#" class="bg-yellow-500 text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-yellow-600 transition-colors shadow-lg">
                    Register Now
                </a>
                <a href="#" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-red-700 transition-colors">
                    Contact Sales
                </a>
            </div>
            <p class="mt-6 text-sm text-red-200">*Start a 7-day free trial on our B2B ordering dashboard.</p>
        </div>
    </section>

@endsection
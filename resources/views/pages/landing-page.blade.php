@extends('layouts.app')

@section('content')

    <!-- 2. Hero Section (Wide Banner & Carousel) -->
    <section id="home" class="relative bg-[#fcf9f4] py-16 overflow-hidden text-center flex flex-col justify-center min-h-[80vh]">
        
        <!-- Repeating Mango Pattern Background (Aesthetic, Colorless, Low Opacity) -->
        <div class="absolute inset-0 z-0 opacity-20 pointer-events-none" 
             style="background-image: url('data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'120\' height=\'120\' viewBox=\'0 0 64 64\'><path d=\'M42 12C28 12 16 24 16 40c0 10 6 18 14 22 8 4 20 2 26-6 6-8 4-22-2-30-4-6-10-14-12-14z\' fill=\'none\' stroke=\'%239ca3af\' stroke-width=\'2\'/><path d=\'M42 12C38 8 38 4 38 4s-6 4-6 10c0 4 4 6 4 6s2-6 6-8z\' fill=\'none\' stroke=\'%239ca3af\' stroke-width=\'2\'/></svg>'); background-size: 120px 120px;">
        </div>

        <div class="relative z-10 w-full max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Large Top Banner Carousel (Removed box styling: no shadows, no rounded corners) -->
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

            <!-- Centered Text Content (Removed card styling) -->
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

    <!-- 3. Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Choose Mango Royal?</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">We take pride in delivering the highest quality mango products, ensuring every bite feels like royalty.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <x-feature-card icon="🚜" title="Farm to Table" description="Sourced directly from the best mango farms in the Philippines." />
                <x-feature-card icon="🍯" title="100% Pure" description="No artificial sweeteners. Just the pure, natural taste of ripe mangoes." />
                <x-feature-card icon="✈️" title="Export Quality" description="Carefully sorted and packaged to meet global quality standards." />
                <x-feature-card icon="♻️" title="Eco-Friendly" description="Our packaging is 100% biodegradable and eco-friendly." />
                <x-feature-card icon="🚚" title="Fast Delivery" description="Next-day delivery available for Metro Manila orders." />
                <x-feature-card icon="💪" title="Rich in Vitamins" description="Packed with Vitamin C and immunity-boosting nutrients." />
            </div>
        </div>
    </section>

    <!-- 4. Product Showcase -->
    <section id="showcase" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Mobile / App View Mockup -->
                <div class="relative flex justify-center">
                    <div class="bg-gray-800 rounded-[3rem] p-4 w-64 md:w-80 shadow-2xl border-4 border-gray-900">
                        <div class="bg-white rounded-[2rem] h-[500px] overflow-hidden flex flex-col">
                            <div class="bg-red-600 p-4 text-white text-center font-bold">MangoRoyal App</div>
                            <div class="p-4 space-y-4">
                                <div class="bg-gray-200 h-32 rounded-xl"></div>
                                <div class="h-4 bg-gray-200 rounded w-3/4"></div>
                                <div class="h-4 bg-gray-200 rounded w-1/2"></div>
                                <div class="bg-yellow-500 p-3 rounded-lg text-white text-sm font-bold text-center mt-4 cursor-pointer hover:bg-yellow-600">Place Order</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Details -->
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Manage Orders Seamlessly</h2>
                    <p class="text-lg text-gray-600 mb-8">Whether you are ordering a single box for home or bulk purees for your restaurant, our online dashboard and mobile app make it incredibly easy.</p>
                    
                    <ul class="space-y-6">
                        <li class="flex">
                            <div class="flex-shrink-0 bg-red-100 rounded-lg p-3 text-red-600 text-2xl">📱</div>
                            <div class="ml-4">
                                <h4 class="text-xl font-bold text-gray-900">Mobile Ordering View</h4>
                                <p class="text-gray-600 mt-1">Order fresh mangoes directly from your phone in 3 taps.</p>
                            </div>
                        </li>
                        <li class="flex">
                            <div class="flex-shrink-0 bg-red-100 rounded-lg p-3 text-red-600 text-2xl">💻</div>
                            <div class="ml-4">
                                <h4 class="text-xl font-bold text-gray-900">B2B Dashboard Preview</h4>
                                <p class="text-gray-600 mt-1">Track wholesale orders, recurring deliveries, and invoices.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
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
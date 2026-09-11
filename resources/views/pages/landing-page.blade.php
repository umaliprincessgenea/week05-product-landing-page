@extends('layouts.app')

@section('content')

    <!-- 2. Hero Section -->
    <x-hero />

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
                            <div class="bg-mango-500 p-4 text-white text-center font-bold">MangoRoyal App</div>
                            <div class="p-4 space-y-4">
                                <div class="bg-gray-200 h-32 rounded-xl"></div>
                                <div class="h-4 bg-gray-200 rounded w-3/4"></div>
                                <div class="h-4 bg-gray-200 rounded w-1/2"></div>
                                <div class="bg-mango-100 p-3 rounded-lg text-mango-600 text-sm font-bold text-center mt-4">Place Order</div>
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
                            <div class="flex-shrink-0 bg-mango-100 rounded-lg p-3">📱</div>
                            <div class="ml-4">
                                <h4 class="text-xl font-bold text-gray-900">Mobile Ordering View</h4>
                                <p class="text-gray-600 mt-1">Order fresh mangoes directly from your phone in 3 taps.</p>
                            </div>
                        </li>
                        <li class="flex">
                            <div class="flex-shrink-0 bg-mango-100 rounded-lg p-3">💻</div>
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
    <section id="testimonials" class="py-20 bg-mango-50">
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
    <section id="contact" class="py-20 bg-mango-600 text-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-5xl font-bold mb-6">Ready to Experience the Sweetness?</h2>
            <p class="text-lg text-yellow-100 mb-10">Register today to get your first box of premium mangoes at 20% off, or contact our sales team for enterprise rates.</p>
            
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#" class="bg-white text-mango-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition-colors shadow-lg">
                    Register Now
                </a>
                <a href="#" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-mango-700 transition-colors">
                    Contact Sales
                </a>
            </div>
            <p class="mt-6 text-sm text-yellow-200">*Start a 7-day free trial on our B2B ordering dashboard.</p>
        </div>
    </section>

@endsection
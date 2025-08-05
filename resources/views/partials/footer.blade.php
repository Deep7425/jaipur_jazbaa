<!-- Newsletter Section -->
<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="font-playfair text-3xl md:text-4xl font-bold text-gray-900 mb-4">Get On The List</h2>
        <p class="text-gray-600 mb-8 max-w-md mx-auto">A window to our world. Sign up to make the most of your shopping experience.</p>
        
        <form class="max-w-md mx-auto flex">
            <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-3 border border-gray-300 focus:outline-none focus:border-black">
            <button type="submit" class="bg-black text-white px-6 py-3 hover:bg-gray-800 transition-colors uppercase tracking-wide text-sm font-medium">
                Subscribe
            </button>
        </form>
    </div>
</section>

<!-- Main Footer -->
<footer class="bg-white border-t border-gray-200">
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Brand -->
            <div class="md:col-span-1">
                <h3 class="font-playfair text-2xl font-bold text-black mb-4">Jaipur Jazbaa</h3>
                <p class="text-gray-600 text-sm mb-4">Timeless silhouettes, handcrafted to perfection — luxury Indian wear rooted in heritage, destined to become modern heirlooms.</p>
                
                <!-- Social Links -->
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-600 hover:text-black transition-colors">
                        <i class="fab fa-instagram text-lg"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-black transition-colors">
                        <i class="fab fa-facebook text-lg"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-black transition-colors">
                        <i class="fab fa-pinterest text-lg"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-black transition-colors">
                        <i class="fab fa-youtube text-lg"></i>
                    </a>
                </div>
            </div>

            <!-- Shop -->
            <div>
                <h4 class="font-medium text-gray-900 mb-4 uppercase tracking-wide text-sm">Shop</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('shop.all') }}" class="text-gray-600 hover:text-black transition-colors">Shop All</a></li>
                    <li><a href="{{ route('shop.new-arrivals') }}" class="text-gray-600 hover:text-black transition-colors">New Arrivals</a></li>
                    <li><a href="{{ route('shop.kurta-sets') }}" class="text-gray-600 hover:text-black transition-colors">Kurta Sets</a></li>
                    <li><a href="{{ route('shop.kaftans') }}" class="text-gray-600 hover:text-black transition-colors">Kaftans</a></li>
                    <li><a href="{{ route('shop.occasion-wear') }}" class="text-gray-600 hover:text-black transition-colors">Occasion Wear</a></li>
                    <li><a href="{{ route('shop.silk-velvet') }}" class="text-gray-600 hover:text-black transition-colors">Silk Velvet</a></li>
                    <li><a href="{{ route('shop.bestsellers') }}" class="text-gray-600 hover:text-black transition-colors">Bestsellers</a></li>
                    <li><a href="{{ route('shop.sale') }}" class="text-gray-600 hover:text-black transition-colors">Sale</a></li>
                </ul>
            </div>

            <!-- Customer Care -->
            <div>
                <h4 class="font-medium text-gray-900 mb-4 uppercase tracking-wide text-sm">Customer Care</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('contact') }}" class="text-gray-600 hover:text-black transition-colors">Contact Us</a></li>
                    <li><a href="{{ route('size-guide') }}" class="text-gray-600 hover:text-black transition-colors">Size Guide</a></li>
                    <li><a href="{{ route('shipping') }}" class="text-gray-600 hover:text-black transition-colors">Shipping Info</a></li>
                    <li><a href="{{ route('returns') }}" class="text-gray-600 hover:text-black transition-colors">Returns & Exchanges</a></li>
                    <li><a href="{{ route('care-instructions') }}" class="text-gray-600 hover:text-black transition-colors">Care Instructions</a></li>
                    <li><a href="{{ route('faq') }}" class="text-gray-600 hover:text-black transition-colors">FAQ</a></li>
                </ul>
            </div>

            <!-- About -->
            <div>
                <h4 class="font-medium text-gray-900 mb-4 uppercase tracking-wide text-sm">About</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('about') }}" class="text-gray-600 hover:text-black transition-colors">Our Story</a></li>
                    <li><a href="{{ route('craftsmanship') }}" class="text-gray-600 hover:text-black transition-colors">Craftsmanship</a></li>
                    <li><a href="{{ route('sustainability') }}" class="text-gray-600 hover:text-black transition-colors">Sustainability</a></li>
                    <li><a href="{{ route('press') }}" class="text-gray-600 hover:text-black transition-colors">Press</a></li>
                    <li><a href="{{ route('careers') }}" class="text-gray-600 hover:text-black transition-colors">Careers</a></li>
                    <li><a href="{{ route('wholesale') }}" class="text-gray-600 hover:text-black transition-colors">Wholesale</a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="border-t border-gray-200 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
            <div class="text-sm text-gray-600 mb-4 md:mb-0">
                <p>&copy; {{ date('Y') }} Jaipur Jazbaa. All rights reserved.</p>
            </div>
            
            <div class="flex flex-wrap items-center space-x-6 text-sm">
                <a href="{{ route('privacy') }}" class="text-gray-600 hover:text-black transition-colors">Privacy Policy</a>
                <a href="{{ route('terms') }}" class="text-gray-600 hover:text-black transition-colors">Terms of Service</a>
                <a href="{{ route('cookies') }}" class="text-gray-600 hover:text-black transition-colors">Cookie Policy</a>
            </div>
        </div>
    </div>
</footer>

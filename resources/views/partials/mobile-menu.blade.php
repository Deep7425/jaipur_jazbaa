<!-- Mobile Menu -->
<div id="mobile-menu" class="fixed top-0 right-0 h-full w-80 bg-white shadow-xl z-50 transform translate-x-full transition-transform duration-300 ease-in-out overflow-y-auto">
    <div class="p-6">
        <!-- Close Button -->
        <div class="flex justify-between items-center mb-8">
            <h2 class="font-playfair text-xl font-bold">Menu</h2>
            <button id="close-mobile-menu" class="text-gray-600 hover:text-black">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>

        <!-- Account Link -->
        <div class="mb-6">
            <a href="{{ route('account') }}" class="flex items-center text-gray-800 hover:text-black py-3 border-b border-gray-100">
                <i class="far fa-user text-lg mr-3"></i>
                <span>Account</span>
            </a>
        </div>

        <!-- Navigation Links -->
        <nav class="space-y-2">
            <!-- Shop Section -->
            <div class="mb-4">
                <button class="mobile-menu-toggle w-full flex items-center justify-between text-gray-800 font-medium py-3 border-b border-gray-100">
                    <span class="uppercase tracking-wide text-sm">Shop</span>
                    <i class="fas fa-chevron-down text-sm transition-transform duration-200"></i>
                </button>
                <div class="mobile-submenu hidden pl-4 py-2 space-y-2">
                    <a href="{{ route('shop.all') }}" class="block text-gray-600 hover:text-black py-2 text-sm">Shop All</a>
                    <a href="{{ route('shop.new-arrivals') }}" class="block text-gray-600 hover:text-black py-2 text-sm">New Arrivals</a>
                    <a href="{{ route('shop.bestsellers') }}" class="block text-gray-600 hover:text-black py-2 text-sm">Bestsellers</a>
                    <a href="{{ route('shop.sale') }}" class="block text-gray-600 hover:text-black py-2 text-sm">Sale</a>
                </div>
            </div>

            <!-- Categories -->
            <a href="{{ route('shop.kurta-sets') }}" class="block text-gray-800 hover:text-black font-medium py-3 border-b border-gray-100 uppercase tracking-wide text-sm">
                Kurta Sets
            </a>
            <a href="{{ route('shop.kaftans') }}" class="block text-gray-800 hover:text-black font-medium py-3 border-b border-gray-100 uppercase tracking-wide text-sm">
                Kaftans
            </a>
            <a href="{{ route('shop.occasion-wear') }}" class="block text-gray-800 hover:text-black font-medium py-3 border-b border-gray-100 uppercase tracking-wide text-sm">
                Occasion Wear
            </a>
            <a href="{{ route('shop.silk-velvet') }}" class="block text-gray-800 hover:text-black font-medium py-3 border-b border-gray-100 uppercase tracking-wide text-sm">
                Silk Velvet
            </a>
            <a href="{{ route('shop.ready-to-ship') }}" class="block text-gray-800 hover:text-black font-medium py-3 border-b border-gray-100 uppercase tracking-wide text-sm">
                Ready To Ship
            </a>

            <!-- Women of JJ Section -->
            <div class="mb-4">
                <button class="mobile-menu-toggle w-full flex items-center justify-between text-gray-800 font-medium py-3 border-b border-gray-100">
                    <span class="uppercase tracking-wide text-sm">Women of JJ</span>
                    <i class="fas fa-chevron-down text-sm transition-transform duration-200"></i>
                </button>
                <div class="mobile-submenu hidden pl-4 py-2 space-y-2">
                    <a href="{{ route('shop.celebrities') }}" class="block text-gray-600 hover:text-black py-2 text-sm">Celebrities</a>
                    <a href="{{ route('shop.influencers') }}" class="block text-gray-600 hover:text-black py-2 text-sm">Influencers</a>
                </div>
            </div>

            <a href="{{ route('shop.gift-cards') }}" class="block text-gray-800 hover:text-black font-medium py-3 border-b border-gray-100 uppercase tracking-wide text-sm">
                Gift Cards
            </a>
            <a href="{{ route('collections') }}" class="block text-gray-800 hover:text-black font-medium py-3 border-b border-gray-100 uppercase tracking-wide text-sm">
                Collections
            </a>
        </nav>

        <!-- Social Links -->
        <div class="mt-8 pt-6 border-t border-gray-100">
            <div class="flex space-x-6">
                <a href="#" class="text-gray-600 hover:text-black transition-colors">
                    <i class="fab fa-instagram text-xl"></i>
                </a>
                <a href="#" class="text-gray-600 hover:text-black transition-colors">
                    <i class="fab fa-facebook text-xl"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mobile submenu toggles
    const mobileMenuToggles = document.querySelectorAll('.mobile-menu-toggle');
    
    mobileMenuToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const submenu = this.nextElementSibling;
            const icon = this.querySelector('i');
            
            submenu.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        });
    });
});
</script>

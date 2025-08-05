<!-- Top Announcement Bar -->
<div class="bg-black text-white text-center py-2 text-sm">
    <p>Free shipping on orders over ₹5,000 | Easy returns within 30 days</p>
</div>

<!-- Main Header -->
<header class="bg-white shadow-sm sticky top-0 z-30">
    <div class="container mx-auto px-4">
        <!-- Top Header -->
        <div class="flex items-center justify-between py-4 border-b border-gray-100">
            <!-- Social Links (Desktop) -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="#" class="text-gray-600 hover:text-black transition-colors">
                    <i class="fab fa-instagram text-lg"></i>
                </a>
                <a href="#" class="text-gray-600 hover:text-black transition-colors">
                    <i class="fab fa-facebook text-lg"></i>
                </a>
            </div>

            <!-- Logo -->
            <div class="flex-1 md:flex-none text-center">
                <a href="{{ route('home') }}" class="inline-block">
                    <h1 class="font-playfair text-2xl md:text-3xl font-bold text-black tracking-wide">
                        Jaipur Jazbaa
                    </h1>
                    <p class="text-xs text-gray-600 mt-1 tracking-widest uppercase">Luxury Indian Wear</p>
                </a>
            </div>

            <!-- Account & Cart -->
            <div class="flex items-center space-x-4">
                <!-- Account -->
                <a href="{{ route('account') }}" class="hidden md:flex items-center text-gray-700 hover:text-black transition-colors">
                    <i class="far fa-user text-lg"></i>
                    <span class="ml-2 text-sm">Account</span>
                </a>

                <!-- Cart -->
                <a href="{{ route('cart') }}" class="flex items-center text-gray-700 hover:text-black transition-colors relative">
                    <i class="fas fa-shopping-bag text-lg"></i>
                    <span class="ml-2 text-sm hidden md:inline">Cart</span>
                    <span class="absolute -top-2 -right-2 bg-black text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">
                        0
                    </span>
                </a>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-gray-700 hover:text-black">
                    <i class="fas fa-bars text-lg"></i>
                </button>
            </div>
        </div>

        <!-- Navigation Menu (Desktop) -->
        <nav class="hidden md:block py-4">
            <ul class="flex items-center justify-center space-x-8">
                <li class="relative group">
                    <a href="{{ route('shop.all') }}" class="text-gray-800 hover:text-black font-medium transition-colors uppercase tracking-wide text-sm">
                        Shop
                    </a>
                    <!-- Dropdown -->
                    <div class="absolute top-full left-0 mt-2 w-48 bg-white shadow-lg border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                        <a href="{{ route('shop.all') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50">Shop All</a>
                        <a href="{{ route('shop.new-arrivals') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50">New Arrivals</a>
                        <a href="{{ route('shop.bestsellers') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50">Bestsellers</a>
                        <a href="{{ route('shop.sale') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50">Sale</a>
                    </div>
                </li>
                <li><a href="{{ route('shop.kurta-sets') }}" class="text-gray-800 hover:text-black font-medium transition-colors uppercase tracking-wide text-sm">Kurta Sets</a></li>
                <li><a href="{{ route('shop.kaftans') }}" class="text-gray-800 hover:text-black font-medium transition-colors uppercase tracking-wide text-sm">Kaftans</a></li>
                <li><a href="{{ route('shop.occasion-wear') }}" class="text-gray-800 hover:text-black font-medium transition-colors uppercase tracking-wide text-sm">Occasion Wear</a></li>
                <li><a href="{{ route('shop.silk-velvet') }}" class="text-gray-800 hover:text-black font-medium transition-colors uppercase tracking-wide text-sm">Silk Velvet</a></li>
                <li><a href="{{ route('shop.ready-to-ship') }}" class="text-gray-800 hover:text-black font-medium transition-colors uppercase tracking-wide text-sm">Ready To Ship</a></li>
                <li class="relative group">
                    <a href="#" class="text-gray-800 hover:text-black font-medium transition-colors uppercase tracking-wide text-sm">
                        Women of JJ
                    </a>
                    <!-- Dropdown -->
                    <div class="absolute top-full left-0 mt-2 w-48 bg-white shadow-lg border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                        <a href="{{ route('shop.celebrities') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50">Celebrities</a>
                        <a href="{{ route('shop.influencers') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50">Influencers</a>
                    </div>
                </li>
                <li><a href="{{ route('shop.gift-cards') }}" class="text-gray-800 hover:text-black font-medium transition-colors uppercase tracking-wide text-sm">Gift Cards</a></li>
                <li><a href="{{ route('collections') }}" class="text-gray-800 hover:text-black font-medium transition-colors uppercase tracking-wide text-sm">Collections</a></li>
            </ul>
        </nav>
    </div>
</header>

@extends('layouts.app')

@section('title', 'Jaipur Jazbaa - Luxury Indian Wear')
@section('description', 'Timeless silhouettes, handcrafted to perfection — luxury Indian wear by Jaipur Jazbaa. Rooted in heritage, destined to become modern heirlooms.')

@section('content')
<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-black/30 to-transparent z-10"></div>
    <img src="{{ asset('images/hero-bg.jpg') }}" alt="Luxury Indian Wear" class="absolute inset-0 w-full h-full object-cover">
    
    <div class="relative z-20 text-center text-white px-4">
        <h1 class="font-playfair text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
            Timeless Elegance<br>
            <span class="text-3xl md:text-5xl lg:text-6xl">Handcrafted to Perfection</span>
        </h1>
        <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto opacity-90">
            Discover our collection of luxury Indian wear, rooted in heritage and destined to become modern heirlooms.
        </p>
        <a href="{{ route('shop.all') }}" class="inline-block bg-white text-black px-8 py-4 font-medium uppercase tracking-wide hover:bg-gray-100 transition-colors">
            Shop Collection
        </a>
    </div>
</section>

<!-- Category Showcase -->
<section class="py-16 md:py-24">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Kurta Sets -->
            <div class="group cursor-pointer">
                <div class="category-image">
                    <img src="{{ asset('images/categories/kurta-sets.jpg') }}" alt="Kurta Sets">
                    <div class="category-overlay"></div>
                    <div class="category-info">
                        <h3 class="font-playfair text-2xl font-bold mb-2">Kurta Sets</h3>
                        <p class="text-sm opacity-90">Elegant traditional wear</p>
                    </div>
                </div>
                <a href="{{ route('shop.kurta-sets') }}" class="inline-block text-black border-b border-black pb-1 hover:border-gray-400 transition-colors uppercase tracking-wide text-sm font-medium">
                    Shop Kurta Sets
                </a>
            </div>

            <!-- Kaftans -->
            <div class="group cursor-pointer">
                <div class="category-image">
                    <img src="{{ asset('images/categories/kaftans.jpg') }}" alt="Kaftans">
                    <div class="category-overlay"></div>
                    <div class="category-info">
                        <h3 class="font-playfair text-2xl font-bold mb-2">Kaftans</h3>
                        <p class="text-sm opacity-90">Flowing comfort & style</p>
                    </div>
                </div>
                <a href="{{ route('shop.kaftans') }}" class="inline-block text-black border-b border-black pb-1 hover:border-gray-400 transition-colors uppercase tracking-wide text-sm font-medium">
                    Shop Kaftans
                </a>
            </div>

            <!-- Occasion Wear -->
            <div class="group cursor-pointer">
                <div class="category-image">
                    <img src="{{ asset('images/categories/occasion-wear.jpg') }}" alt="Occasion Wear">
                    <div class="category-overlay"></div>
                    <div class="category-info">
                        <h3 class="font-playfair text-2xl font-bold mb-2">Occasion Wear</h3>
                        <p class="text-sm opacity-90">For special moments</p>
                    </div>
                </div>
                <a href="{{ route('shop.occasion-wear') }}" class="inline-block text-black border-b border-black pb-1 hover:border-gray-400 transition-colors uppercase tracking-wide text-sm font-medium">
                    Shop Occasion Wear
                </a>
            </div>
        </div>
    </div>
</section>

<!-- New Arrivals -->
<section class="py-16 md:py-24 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="font-playfair text-3xl md:text-4xl font-bold text-gray-900 mb-4">New Arrivals</h2>
            <p class="text-gray-600 max-w-md mx-auto">Discover our latest collection of handcrafted luxury pieces</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @for($i = 1; $i <= 4; $i++)
            <div class="group">
                <div class="relative overflow-hidden aspect-[3/4] mb-4 bg-gray-100">
                    <img src="{{ asset('images/products/new-arrival-' . $i . '.jpg') }}" alt="New Arrival {{ $i }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-4 left-4">
                        <span class="bg-black text-white px-2 py-1 text-xs uppercase tracking-wide">New</span>
                    </div>
                </div>
                <div class="text-center">
                    <h3 class="font-medium text-gray-900 mb-2">Elegant Kurta Set {{ $i }}</h3>
                    <p class="text-gray-600 text-sm mb-2">From ₹{{ number_format(15000 + ($i * 2000)) }}</p>
                    <div class="flex justify-center space-x-1">
                        <span class="w-3 h-3 bg-black rounded-full"></span>
                        <span class="w-3 h-3 bg-gray-300 rounded-full"></span>
                        <span class="w-3 h-3 bg-blue-900 rounded-full"></span>
                    </div>
                </div>
            </div>
            @endfor
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('shop.new-arrivals') }}" class="inline-block bg-black text-white px-8 py-3 font-medium uppercase tracking-wide hover:bg-gray-800 transition-colors">
                View All New Arrivals
            </a>
        </div>
    </div>
</section>

<!-- Celebrity Closet -->
<section class="py-16 md:py-24">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="font-playfair text-3xl md:text-4xl font-bold text-gray-900 mb-4">Celebrity Closet</h2>
            <p class="text-gray-600 max-w-md mx-auto">Worn by celebrities and loved by fashion enthusiasts</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div class="relative overflow-hidden aspect-[4/5]">
                <img src="{{ asset('images/celebrity-showcase.jpg') }}" alt="Celebrity Showcase" class="w-full h-full object-cover">
            </div>
            <div class="space-y-6">
                <h3 class="font-playfair text-2xl md:text-3xl font-bold text-gray-900">As Seen On</h3>
                <p class="text-gray-600 leading-relaxed">
                    Our designs have graced red carpets and special occasions, worn by celebrities who appreciate the finest in Indian couture. Each piece tells a story of craftsmanship and elegance.
                </p>
                <a href="{{ route('shop.celebrities') }}" class="inline-block text-black border-b border-black pb-1 hover:border-gray-400 transition-colors uppercase tracking-wide text-sm font-medium">
                    Shop Celebrity Favorites
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Bestsellers -->
<section class="py-16 md:py-24 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="font-playfair text-3xl md:text-4xl font-bold text-gray-900 mb-4">Bestsellers</h2>
            <p class="text-gray-600 max-w-md mx-auto">Our most loved pieces, chosen by discerning customers</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @for($i = 1; $i <= 3; $i++)
            <div class="group">
                <div class="relative overflow-hidden aspect-[3/4] mb-4 bg-gray-100">
                    <img src="{{ asset('images/products/bestseller-' . $i . '.jpg') }}" alt="Bestseller {{ $i }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-4 left-4">
                        <span class="bg-red-600 text-white px-2 py-1 text-xs uppercase tracking-wide">Bestseller</span>
                    </div>
                </div>
                <div class="text-center">
                    <h3 class="font-medium text-gray-900 mb-2">Premium Collection {{ $i }}</h3>
                    <p class="text-gray-600 text-sm mb-2">From ₹{{ number_format(25000 + ($i * 3000)) }}</p>
                    <div class="flex justify-center items-center space-x-1">
                        @for($j = 1; $j <= 5; $j++)
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        @endfor
                        <span class="text-gray-500 text-xs ml-2">({{ 50 + $i * 10 }} reviews)</span>
                    </div>
                </div>
            </div>
            @endfor
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('shop.bestsellers') }}" class="inline-block bg-black text-white px-8 py-3 font-medium uppercase tracking-wide hover:bg-gray-800 transition-colors">
                Shop Bestsellers
            </a>
        </div>
    </div>
</section>

<!-- Instagram Feed -->
<section class="py-16 md:py-24">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="font-playfair text-3xl md:text-4xl font-bold text-gray-900 mb-4">Follow @jaipurjazbaa</h2>
            <p class="text-gray-600 max-w-md mx-auto">See how our community styles our pieces</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @for($i = 1; $i <= 8; $i++)
            <div class="aspect-square overflow-hidden group cursor-pointer">
                <img src="{{ asset('images/instagram/post-' . $i . '.jpg') }}" alt="Instagram Post {{ $i }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
            </div>
            @endfor
        </div>

        <div class="text-center mt-8">
            <a href="https://instagram.com/jaipurjazbaa" target="_blank" class="inline-flex items-center text-black hover:text-gray-600 transition-colors">
                <i class="fab fa-instagram text-xl mr-2"></i>
                <span class="font-medium">Follow us on Instagram</span>
            </a>
        </div>
    </div>
</section>
@endsection

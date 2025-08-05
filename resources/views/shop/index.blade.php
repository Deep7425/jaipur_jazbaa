@extends('layouts.app')

@section('title', 'Shop All - Jaipur Jazbaa')
@section('description', 'Discover our complete collection of luxury Indian wear. From kurta sets to kaftans, find your perfect piece.')

@section('content')
<!-- Page Header -->
<section class="bg-luxury-cream py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="font-playfair text-4xl md:text-5xl font-bold text-gray-900 mb-4">Shop All</h1>
        <p class="text-gray-600 max-w-2xl mx-auto">Discover our complete collection of handcrafted luxury Indian wear, each piece telling a story of heritage and elegance.</p>
    </div>
</section>

<!-- Filters & Sort -->
<section class="py-8 border-b border-gray-200">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-center gap-4">
            <!-- Filter Buttons -->
            <div class="flex flex-wrap gap-2">
                <button class="filter-btn active px-4 py-2 text-sm border border-black bg-black text-white hover:bg-gray-800 transition-colors">
                    All
                </button>
                <button class="filter-btn px-4 py-2 text-sm border border-gray-300 text-gray-700 hover:border-black hover:text-black transition-colors">
                    Kurta Sets
                </button>
                <button class="filter-btn px-4 py-2 text-sm border border-gray-300 text-gray-700 hover:border-black hover:text-black transition-colors">
                    Kaftans
                </button>
                <button class="filter-btn px-4 py-2 text-sm border border-gray-300 text-gray-700 hover:border-black hover:text-black transition-colors">
                    Occasion Wear
                </button>
                <button class="filter-btn px-4 py-2 text-sm border border-gray-300 text-gray-700 hover:border-black hover:text-black transition-colors">
                    Sale
                </button>
            </div>

            <!-- Sort Dropdown -->
            <div class="relative">
                <select class="form-select text-sm min-w-48">
                    <option>Sort by: Featured</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                    <option>Newest First</option>
                    <option>Best Selling</option>
                </select>
            </div>
        </div>
    </div>
</section>

<!-- Products Grid -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @for($i = 1; $i <= 12; $i++)
            <div class="product-card group">
                <div class="product-image">
                    <img src="{{ asset('images/products/product-' . $i . '.jpg') }}" alt="Product {{ $i }}">
                    
                    <!-- Product Badges -->
                    <div class="absolute top-4 left-4 space-y-2">
                        @if($i <= 3)
                        <span class="bg-red-600 text-white px-2 py-1 text-xs uppercase tracking-wide">Sale</span>
                        @elseif($i <= 6)
                        <span class="bg-black text-white px-2 py-1 text-xs uppercase tracking-wide">New</span>
                        @endif
                    </div>

                    <!-- Quick Actions -->
                    <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 space-y-2">
                        <button class="bg-white hover:bg-black hover:text-white p-2 rounded-full shadow-lg transition-colors">
                            <i class="far fa-heart text-sm"></i>
                        </button>
                        <button class="bg-white hover:bg-black hover:text-white p-2 rounded-full shadow-lg transition-colors">
                            <i class="far fa-eye text-sm"></i>
                        </button>
                    </div>

                    <!-- Quick Add to Cart -->
                    <div class="absolute bottom-4 left-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <button class="w-full bg-black text-white py-2 px-4 text-sm font-medium uppercase tracking-wide hover:bg-gray-800 transition-colors">
                            Add to Cart
                        </button>
                    </div>
                </div>

                <div class="product-info mt-4">
                    <h3 class="product-title font-medium text-gray-900 mb-2 hover:text-black transition-colors">
                        {{ $i <= 4 ? 'Elegant Kurta Set' : ($i <= 8 ? 'Luxury Kaftan' : 'Designer Occasion Wear') }} {{ $i }}
                    </h3>
                    <div class="product-price text-gray-600 text-sm mb-2">
                        @if($i <= 3)
                        <span class="line-through mr-2">₹{{ number_format(25000 + ($i * 2000)) }}</span>
                        <span class="text-red-600 font-medium">₹{{ number_format(20000 + ($i * 1500)) }}</span>
                        @else
                        <span>From ₹{{ number_format(15000 + ($i * 2500)) }}</span>
                        @endif
                    </div>
                    
                    <!-- Color Options -->
                    <div class="flex justify-center space-x-1 mb-2">
                        <span class="w-4 h-4 bg-black rounded-full border-2 border-gray-200"></span>
                        <span class="w-4 h-4 bg-blue-900 rounded-full border-2 border-gray-200"></span>
                        <span class="w-4 h-4 bg-red-800 rounded-full border-2 border-gray-200"></span>
                    </div>

                    <!-- Rating -->
                    <div class="flex justify-center items-center space-x-1">
                        @for($j = 1; $j <= 5; $j++)
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        @endfor
                        <span class="text-gray-500 text-xs ml-1">({{ 20 + $i * 5 }})</span>
                    </div>
                </div>
            </div>
            @endfor
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button class="btn-secondary">
                Load More Products
            </button>
        </div>
    </div>
</section>

<!-- Featured Categories -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="font-playfair text-3xl md:text-4xl font-bold text-gray-900 mb-4">Shop by Category</h2>
            <p class="text-gray-600 max-w-md mx-auto">Explore our curated collections designed for every occasion</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <a href="{{ route('shop.kurta-sets') }}" class="category-card group">
                <div class="category-image">
                    <img src="{{ asset('images/categories/kurta-sets-featured.jpg') }}" alt="Kurta Sets" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="category-overlay"></div>
                    <div class="category-info">
                        <h3 class="font-playfair text-2xl font-bold mb-2">Kurta Sets</h3>
                        <p class="text-sm opacity-90">Traditional elegance</p>
                    </div>
                </div>
            </a>

            <a href="{{ route('shop.kaftans') }}" class="category-card group">
                <div class="category-image">
                    <img src="{{ asset('images/categories/kaftans-featured.jpg') }}" alt="Kaftans" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="category-overlay"></div>
                    <div class="category-info">
                        <h3 class="font-playfair text-2xl font-bold mb-2">Kaftans</h3>
                        <p class="text-sm opacity-90">Flowing comfort</p>
                    </div>
                </div>
            </a>

            <a href="{{ route('shop.occasion-wear') }}" class="category-card group">
                <div class="category-image">
                    <img src="{{ asset('images/categories/occasion-wear-featured.jpg') }}" alt="Occasion Wear" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="category-overlay"></div>
                    <div class="category-info">
                        <h3 class="font-playfair text-2xl font-bold mb-2">Occasion Wear</h3>
                        <p class="text-sm opacity-90">Special moments</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Filter functionality
    const filterBtns = document.querySelectorAll('.filter-btn');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            filterBtns.forEach(b => {
                b.classList.remove('active', 'bg-black', 'text-white');
                b.classList.add('border-gray-300', 'text-gray-700');
            });
            
            // Add active class to clicked button
            this.classList.add('active', 'bg-black', 'text-white');
            this.classList.remove('border-gray-300', 'text-gray-700');
            
            // Here you would typically filter the products
            console.log('Filter by:', this.textContent.trim());
        });
    });
});
</script>
@endpush

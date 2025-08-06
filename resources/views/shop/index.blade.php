@extends('layouts.app')

@section('title', 'Shop All - Jaipur Jazbaa')
@section('description', 'Discover our complete collection of luxury Indian wear. From kurta sets to kaftans, find your perfect piece.')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-br from-rose-50 via-pink-50 to-purple-50 py-16 md:py-24 lg:py-32 relative overflow-hidden min-h-[70vh] flex items-center">
    <!-- Interactive Animated Background Elements -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-10 left-10 w-32 h-32 bg-rose-200 rounded-full blur-3xl animate-float cursor-pointer hover:scale-110 transition-transform duration-500"></div>
        <div class="absolute bottom-20 right-20 w-40 h-40 bg-purple-200 rounded-full blur-3xl animate-float-delayed cursor-pointer hover:scale-110 transition-transform duration-500"></div>
        <div class="absolute top-1/2 left-1/3 w-24 h-24 bg-pink-200 rounded-full blur-2xl animate-pulse cursor-pointer hover:scale-110 transition-transform duration-500"></div>
        <div class="absolute top-1/4 right-1/3 w-20 h-20 bg-amber-200 rounded-full blur-2xl animate-float cursor-pointer hover:scale-110 transition-transform duration-500" style="animation-delay: 1s;"></div>
        <div class="absolute bottom-1/3 left-1/4 w-28 h-28 bg-emerald-200 rounded-full blur-3xl animate-float-delayed cursor-pointer hover:scale-110 transition-transform duration-500" style="animation-delay: 3s;"></div>
    </div>
    
    <!-- Interactive Particles -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="particle absolute w-2 h-2 bg-rose-400 rounded-full opacity-60 animate-float" style="top: 20%; left: 15%; animation-duration: 4s;"></div>
        <div class="particle absolute w-1.5 h-1.5 bg-purple-400 rounded-full opacity-50 animate-float-delayed" style="top: 60%; left: 80%; animation-duration: 6s;"></div>
        <div class="particle absolute w-2.5 h-2.5 bg-pink-400 rounded-full opacity-40 animate-pulse" style="top: 40%; left: 70%; animation-duration: 3s;"></div>
        <div class="particle absolute w-1 h-1 bg-amber-400 rounded-full opacity-70 animate-float" style="top: 80%; left: 30%; animation-duration: 5s;"></div>
    </div>
    
    <div class="container mx-auto px-4 text-center relative z-10 w-full">
        <div class="animate-fade-in-up max-w-5xl mx-auto">
            <!-- Interactive Title with Typing Effect -->
            <div class="mb-8">
                <h1 class="font-playfair text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-bold bg-gradient-to-r from-rose-600 via-purple-600 to-pink-600 bg-clip-text text-transparent mb-4 leading-tight hover:scale-105 transition-transform duration-300 cursor-default">
                    <span class="inline-block hover:animate-bounce" style="animation-delay: 0.1s;">S</span><span class="inline-block hover:animate-bounce" style="animation-delay: 0.2s;">h</span><span class="inline-block hover:animate-bounce" style="animation-delay: 0.3s;">o</span><span class="inline-block hover:animate-bounce" style="animation-delay: 0.4s;">p</span>
                    <span class="inline-block mx-4"></span>
                    <span class="inline-block hover:animate-bounce" style="animation-delay: 0.5s;">A</span><span class="inline-block hover:animate-bounce" style="animation-delay: 0.6s;">l</span><span class="inline-block hover:animate-bounce" style="animation-delay: 0.7s;">l</span>
                </h1>
                <div class="w-24 h-1 bg-gradient-to-r from-rose-400 to-pink-400 rounded-full mx-auto animate-pulse"></div>
            </div>
            
            <!-- Interactive Description -->
            <p class="text-gray-700 max-w-4xl mx-auto text-lg md:text-xl lg:text-2xl leading-relaxed animate-fade-in-up-delayed mb-8 hover:text-gray-800 transition-colors duration-300">
                Discover our complete collection of <span class="font-semibold text-rose-600 hover:text-rose-700 cursor-pointer">handcrafted luxury</span> Indian wear, each piece telling a story of <span class="font-semibold text-purple-600 hover:text-purple-700 cursor-pointer">heritage</span> and <span class="font-semibold text-pink-600 hover:text-pink-700 cursor-pointer">elegance</span>.
            </p>
            
            <!-- Interactive Stats & Features -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-6 mb-10 animate-fade-in-up-delayed-2">
                <div class="bg-white/80 backdrop-blur-sm px-6 py-4 rounded-2xl shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                    <div class="flex items-center justify-center space-x-3">
                        <div class="w-3 h-3 bg-rose-400 rounded-full animate-ping group-hover:animate-bounce"></div>
                        <span class="text-sm font-semibold text-gray-700 group-hover:text-rose-600 transition-colors">150+ New Arrivals</span>
                    </div>
                </div>
                <div class="bg-white/80 backdrop-blur-sm px-6 py-4 rounded-2xl shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                    <div class="flex items-center justify-center space-x-3">
                        <div class="w-3 h-3 bg-purple-400 rounded-full animate-pulse group-hover:animate-bounce"></div>
                        <span class="text-sm font-semibold text-gray-700 group-hover:text-purple-600 transition-colors">Free Shipping</span>
                    </div>
                </div>
                <div class="bg-white/80 backdrop-blur-sm px-6 py-4 rounded-2xl shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                    <div class="flex items-center justify-center space-x-3">
                        <div class="w-3 h-3 bg-pink-400 rounded-full animate-ping group-hover:animate-bounce"></div>
                        <span class="text-sm font-semibold text-gray-700 group-hover:text-pink-600 transition-colors">Easy Returns</span>
                    </div>
                </div>
            </div>
            
            <!-- Interactive CTA Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 animate-fade-in-up-delayed-2">
                <button class="group relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white bg-gradient-to-r from-rose-500 to-pink-500 rounded-full shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden">
                    <span class="absolute inset-0 bg-gradient-to-r from-rose-600 to-pink-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                    <span class="relative flex items-center space-x-2">
                        <i class="fas fa-shopping-bag group-hover:animate-bounce"></i>
                        <span>Start Shopping</span>
                        <i class="fas fa-arrow-right transform group-hover:translate-x-1 transition-transform duration-300"></i>
                    </span>
                </button>
                <button class="group relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-rose-600 bg-white/80 backdrop-blur-sm border-2 border-rose-300 rounded-full shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden">
                    <span class="absolute inset-0 bg-gradient-to-r from-rose-500 to-pink-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                    <span class="relative flex items-center space-x-2 group-hover:text-white transition-colors duration-300">
                        <i class="fas fa-play-circle group-hover:animate-spin"></i>
                        <span>Watch Collection</span>
                    </span>
                </button>
            </div>
            
            <!-- Interactive Scroll Indicator -->
            <div class="mt-12 animate-fade-in-up-delayed-2">
                <div class="flex flex-col items-center space-y-2 cursor-pointer hover:scale-110 transition-transform duration-300" onclick="document.querySelector('.filter-section').scrollIntoView({behavior: 'smooth'})">
                    <span class="text-sm font-medium text-gray-600 hover:text-rose-600 transition-colors">Explore Products</span>
                    <div class="w-6 h-10 border-2 border-rose-300 rounded-full flex justify-center">
                        <div class="w-1 h-3 bg-rose-400 rounded-full mt-2 animate-bounce"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Interactive Mouse Follower Effect -->
    <div id="mouseFollower" class="fixed w-4 h-4 bg-rose-400/30 rounded-full pointer-events-none z-50 transition-all duration-300 ease-out opacity-0"></div>
</section>

<!-- Filters & Sort -->
<section class="filter-section py-8 bg-white/80 backdrop-blur-sm border-b border-rose-100 sticky top-0 z-40">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row justify-between items-center gap-6">
            <!-- Filter Buttons -->
            <div class="flex flex-wrap justify-center lg:justify-start gap-3">
                <button class="filter-btn active px-6 py-3 text-sm font-medium rounded-full border-2 border-rose-300 bg-gradient-to-r from-rose-400 to-pink-400 text-white shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-300">
                    <span class="flex items-center space-x-2">
                        <i class="fas fa-sparkles text-xs"></i>
                        <span>All</span>
                    </span>
                </button>
                <button class="filter-btn px-6 py-3 text-sm font-medium rounded-full border-2 border-gray-200 bg-white text-gray-700 hover:border-rose-300 hover:bg-rose-50 hover:text-rose-600 shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300">
                    <span class="flex items-center space-x-2">
                        <i class="fas fa-tshirt text-xs"></i>
                        <span>Kurta Sets</span>
                    </span>
                </button>
                <button class="filter-btn px-6 py-3 text-sm font-medium rounded-full border-2 border-gray-200 bg-white text-gray-700 hover:border-purple-300 hover:bg-purple-50 hover:text-purple-600 shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300">
                    <span class="flex items-center space-x-2">
                        <i class="fas fa-user-tie text-xs"></i>
                        <span>Kaftans</span>
                    </span>
                </button>
                <button class="filter-btn px-6 py-3 text-sm font-medium rounded-full border-2 border-gray-200 bg-white text-gray-700 hover:border-pink-300 hover:bg-pink-50 hover:text-pink-600 shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300">
                    <span class="flex items-center space-x-2">
                        <i class="fas fa-crown text-xs"></i>
                        <span>Occasion Wear</span>
                    </span>
                </button>
                <button class="filter-btn px-6 py-3 text-sm font-medium rounded-full border-2 border-gray-200 bg-white text-gray-700 hover:border-red-300 hover:bg-red-50 hover:text-red-600 shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300">
                    <span class="flex items-center space-x-2">
                        <i class="fas fa-fire text-xs"></i>
                        <span>Sale</span>
                    </span>
                </button>
            </div>

            <!-- Sort Dropdown -->
            <div class="relative">
                <select class="form-select text-sm min-w-56 px-4 py-3 rounded-xl border-2 border-gray-200 bg-white shadow-md hover:shadow-lg focus:border-rose-300 focus:ring-2 focus:ring-rose-100 transition-all duration-300">
                    <option>🌟 Sort by: Featured</option>
                    <option>💰 Price: Low to High</option>
                    <option>💎 Price: High to Low</option>
                    <option>✨ Newest First</option>
                    <option>🔥 Best Selling</option>
                </select>
            </div>
        </div>
    </div>
</section>

<!-- Products Grid -->
<section class="py-20 bg-gradient-to-b from-white to-rose-50/30">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-6 md:gap-8">
            @for($i = 1; $i <= 12; $i++)
            <div class="product-card group cursor-pointer transform hover:-translate-y-2 transition-all duration-500 hover:shadow-2xl animate-fade-in-up" style="animation-delay: {{ ($i - 1) * 0.1 }}s">
                <div class="product-image relative overflow-hidden rounded-2xl bg-gradient-to-br from-gray-50 to-gray-100 shadow-lg group-hover:shadow-2xl transition-all duration-500">
                    <div class="aspect-[3/4] overflow-hidden">
                        <img src="{{ asset('images/products/product-' . $i . '.jpg') }}" alt="Product {{ $i }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <!-- Product Badges -->
                    <div class="absolute top-4 left-4 space-y-2 z-10">
                        @if($i <= 3)
                        <span class="bg-gradient-to-r from-red-500 to-pink-500 text-white px-3 py-1.5 text-xs font-bold uppercase tracking-wide rounded-full shadow-lg animate-bounce">
                            <i class="fas fa-fire mr-1"></i>Sale
                        </span>
                        @elseif($i <= 6)
                        <span class="bg-gradient-to-r from-emerald-500 to-teal-500 text-white px-3 py-1.5 text-xs font-bold uppercase tracking-wide rounded-full shadow-lg">
                            <i class="fas fa-sparkles mr-1"></i>New
                        </span>
                        @endif
                    </div>

                    <!-- Quick Actions -->
                    <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-all duration-300 space-y-3 z-10 transform translate-x-2 group-hover:translate-x-0">
                        <button class="bg-white/90 backdrop-blur-sm hover:bg-rose-500 hover:text-white p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-110">
                            <i class="far fa-heart text-sm"></i>
                        </button>
                        <button class="bg-white/90 backdrop-blur-sm hover:bg-purple-500 hover:text-white p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-110">
                            <i class="far fa-eye text-sm"></i>
                        </button>
                        <button class="bg-white/90 backdrop-blur-sm hover:bg-blue-500 hover:text-white p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-110">
                            <i class="fas fa-share-alt text-sm"></i>
                        </button>
                    </div>

                    <!-- Quick Add to Cart -->
                    <div class="absolute bottom-4 left-4 right-4 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-4 group-hover:translate-y-0 z-10">
                        <button class="w-full bg-gradient-to-r from-rose-500 to-pink-500 hover:from-rose-600 hover:to-pink-600 text-white py-3 px-4 text-sm font-bold uppercase tracking-wide rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-shopping-bag mr-2"></i>Add to Cart
                        </button>
                    </div>
                    
                    <!-- Size Guide Hint -->
                    <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-4 group-hover:translate-y-0 z-10" style="margin-bottom: 60px;">
                        <div class="bg-white/90 backdrop-blur-sm px-3 py-1.5 rounded-full text-xs font-medium text-gray-600 shadow-md">
                            <i class="fas fa-ruler mr-1"></i>Size Guide
                        </div>
                    </div>
                </div>

                <div class="product-info mt-6 px-2">
                    <h3 class="product-title font-semibold text-gray-800 mb-3 group-hover:text-rose-600 transition-colors duration-300 text-center">
                        <a href="{{ route('shop.product', ['id' => $i]) }}" class="hover:underline decoration-rose-300 underline-offset-4">
                            Elegant {{ ['Kurta Set', 'Kaftan', 'Lehenga', 'Saree', 'Palazzo Set', 'Anarkali'][$i % 6] }}
                        </a>
                    </h3>
                    
                    <div class="product-price mb-4 text-center">
                        @if($i <= 3)
                        <div class="flex items-center justify-center space-x-3">
                            <span class="text-rose-600 font-bold text-xl">₹{{ number_format(2500 + ($i * 500)) }}</span>
                            <span class="text-gray-400 line-through text-sm bg-gray-100 px-2 py-1 rounded-full">₹{{ number_format(3500 + ($i * 500)) }}</span>
                            <span class="bg-red-100 text-red-600 text-xs font-bold px-2 py-1 rounded-full">
                                {{ round(((3500 + ($i * 500)) - (2500 + ($i * 500))) / (3500 + ($i * 500)) * 100) }}% OFF
                            </span>
                        </div>
                        @else
                        <span class="text-gray-800 font-bold text-xl">₹{{ number_format(3500 + ($i * 500)) }}</span>
                        @endif
                    </div>

                    <!-- Color Options -->
                    <div class="flex justify-center space-x-2 mb-4">
                        <button class="w-5 h-5 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full border-2 border-white shadow-md hover:scale-110 transition-transform duration-200 ring-2 ring-blue-200"></button>
                        <button class="w-5 h-5 bg-gradient-to-br from-emerald-400 to-emerald-600 rounded-full border-2 border-white shadow-md hover:scale-110 transition-transform duration-200"></button>
                        <button class="w-5 h-5 bg-gradient-to-br from-purple-400 to-purple-600 rounded-full border-2 border-white shadow-md hover:scale-110 transition-transform duration-200"></button>
                        <button class="w-5 h-5 bg-gradient-to-br from-rose-400 to-rose-600 rounded-full border-2 border-white shadow-md hover:scale-110 transition-transform duration-200"></button>
                        <button class="w-5 h-5 bg-gradient-to-br from-amber-400 to-amber-600 rounded-full border-2 border-white shadow-md hover:scale-110 transition-transform duration-200"></button>
                    </div>

                    <!-- Rating -->
                    <div class="flex justify-center items-center space-x-1 mb-3">
                        @for($j = 1; $j <= 5; $j++)
                        <i class="fas fa-star text-amber-400 text-sm hover:text-amber-500 transition-colors cursor-pointer"></i>
                        @endfor
                        <span class="text-gray-500 text-sm ml-2 font-medium">({{ 20 + $i * 5 }} reviews)</span>
                    </div>
                    
                    <!-- Quick Info -->
                    <div class="flex justify-center space-x-4 text-xs text-gray-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="flex items-center"><i class="fas fa-truck mr-1"></i>Free Shipping</span>
                        <span class="flex items-center"><i class="fas fa-undo mr-1"></i>Easy Returns</span>
                    </div>
                </div>
            </div>
            @endfor
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-16">
            <button class="group relative inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white bg-gradient-to-r from-rose-500 to-pink-500 rounded-full shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden">
                <span class="absolute inset-0 bg-gradient-to-r from-rose-600 to-pink-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                <span class="relative flex items-center space-x-2">
                    <i class="fas fa-plus-circle"></i>
                    <span>Load More Products</span>
                    <i class="fas fa-arrow-down group-hover:animate-bounce"></i>
                </span>
            </button>
            <p class="text-gray-500 text-sm mt-3">Showing 12 of 150+ products</p>
        </div>
    </div>
</section>

<!-- Featured Categories -->
<section class="py-20 bg-gradient-to-br from-rose-50/50 via-purple-50/30 to-pink-50/50 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-20 w-64 h-64 bg-rose-300 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-20 w-80 h-80 bg-purple-300 rounded-full blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <h2 class="font-playfair text-4xl md:text-5xl lg:text-6xl font-bold bg-gradient-to-r from-rose-600 via-purple-600 to-pink-600 bg-clip-text text-transparent mb-6">Shop by Category</h2>
            <p class="text-gray-700 max-w-2xl mx-auto text-lg md:text-xl leading-relaxed">Explore our curated collections designed for every occasion and celebration</p>
            <div class="mt-6 flex justify-center">
                <div class="w-24 h-1 bg-gradient-to-r from-rose-400 to-pink-400 rounded-full"></div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
            <a href="{{ route('shop.kurta-sets') }}" class="category-card group transform hover:-translate-y-4 transition-all duration-500 hover:shadow-2xl">
                <div class="category-image relative overflow-hidden rounded-3xl aspect-[4/5] shadow-xl group-hover:shadow-2xl transition-all duration-500">
                    <img src="{{ asset('images/categories/kurta-sets-featured.jpg') }}" alt="Kurta Sets" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="category-overlay absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent group-hover:from-rose-600/80 group-hover:via-rose-400/30 transition-all duration-500"></div>
                    <div class="category-info absolute bottom-6 left-6 right-6 text-white transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="font-playfair text-3xl font-bold mb-3 group-hover:text-white transition-colors">Kurta Sets</h3>
                        <p class="text-lg opacity-90 mb-4 group-hover:opacity-100 transition-opacity">Traditional elegance</p>
                        <div class="flex items-center space-x-2 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-x-4 group-hover:translate-x-0">
                            <span class="text-sm font-medium">Explore Collection</span>
                            <i class="fas fa-arrow-right text-sm"></i>
                        </div>
                    </div>
                    <div class="absolute top-4 right-4 bg-white/20 backdrop-blur-sm rounded-full p-3 opacity-0 group-hover:opacity-100 transition-all duration-300 transform scale-75 group-hover:scale-100">
                        <i class="fas fa-tshirt text-white text-lg"></i>
                    </div>
                </div>
            </a>

            <a href="{{ route('shop.kaftans') }}" class="category-card group transform hover:-translate-y-4 transition-all duration-500 hover:shadow-2xl">
                <div class="category-image relative overflow-hidden rounded-3xl aspect-[4/5] shadow-xl group-hover:shadow-2xl transition-all duration-500">
                    <img src="{{ asset('images/categories/kaftans-featured.jpg') }}" alt="Kaftans" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="category-overlay absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent group-hover:from-purple-600/80 group-hover:via-purple-400/30 transition-all duration-500"></div>
                    <div class="category-info absolute bottom-6 left-6 right-6 text-white transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="font-playfair text-3xl font-bold mb-3 group-hover:text-white transition-colors">Kaftans</h3>
                        <p class="text-lg opacity-90 mb-4 group-hover:opacity-100 transition-opacity">Flowing comfort</p>
                        <div class="flex items-center space-x-2 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-x-4 group-hover:translate-x-0">
                            <span class="text-sm font-medium">Explore Collection</span>
                            <i class="fas fa-arrow-right text-sm"></i>
                        </div>
                    </div>
                    <div class="absolute top-4 right-4 bg-white/20 backdrop-blur-sm rounded-full p-3 opacity-0 group-hover:opacity-100 transition-all duration-300 transform scale-75 group-hover:scale-100">
                        <i class="fas fa-user-tie text-white text-lg"></i>
                    </div>
                </div>
            </a>

            <a href="{{ route('shop.occasion-wear') }}" class="category-card group transform hover:-translate-y-4 transition-all duration-500 hover:shadow-2xl">
                <div class="category-image relative overflow-hidden rounded-3xl aspect-[4/5] shadow-xl group-hover:shadow-2xl transition-all duration-500">
                    <img src="{{ asset('images/categories/occasion-wear-featured.jpg') }}" alt="Occasion Wear" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="category-overlay absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent group-hover:from-pink-600/80 group-hover:via-pink-400/30 transition-all duration-500"></div>
                    <div class="category-info absolute bottom-6 left-6 right-6 text-white transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="font-playfair text-3xl font-bold mb-3 group-hover:text-white transition-colors">Occasion Wear</h3>
                        <p class="text-lg opacity-90 mb-4 group-hover:opacity-100 transition-opacity">Special moments</p>
                        <div class="flex items-center space-x-2 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-x-4 group-hover:translate-x-0">
                            <span class="text-sm font-medium">Explore Collection</span>
                            <i class="fas fa-arrow-right text-sm"></i>
                        </div>
                    </div>
                    <div class="absolute top-4 right-4 bg-white/20 backdrop-blur-sm rounded-full p-3 opacity-0 group-hover:opacity-100 transition-all duration-300 transform scale-75 group-hover:scale-100">
                        <i class="fas fa-crown text-white text-lg"></i>
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
    // Enhanced Filter functionality
    const filterBtns = document.querySelectorAll('.filter-btn');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            filterBtns.forEach(b => {
                b.classList.remove('active');
                b.classList.remove('bg-gradient-to-r', 'from-rose-400', 'to-pink-400', 'text-white', 'border-rose-300');
                b.classList.add('border-gray-200', 'bg-white', 'text-gray-700');
            });
            
            // Add active class to clicked button
            this.classList.add('active');
            this.classList.remove('border-gray-200', 'bg-white', 'text-gray-700');
            this.classList.add('bg-gradient-to-r', 'from-rose-400', 'to-pink-400', 'text-white', 'border-rose-300');
            
            // Add bounce animation
            this.style.animation = 'bounce 0.5s ease-in-out';
            setTimeout(() => {
                this.style.animation = '';
            }, 500);
            
            console.log('Filter by:', this.textContent.trim());
        });
    });
    
    // Interactive mouse follower effect
    const mouseFollower = document.getElementById('mouseFollower');
    let mouseX = 0, mouseY = 0;
    let followerX = 0, followerY = 0;
    
    document.addEventListener('mousemove', function(e) {
        mouseX = e.clientX;
        mouseY = e.clientY;
        
        if (mouseFollower) {
            mouseFollower.style.opacity = '1';
        }
    });
    
    function animateFollower() {
        followerX += (mouseX - followerX) * 0.1;
        followerY += (mouseY - followerY) * 0.1;
        
        if (mouseFollower) {
            mouseFollower.style.left = followerX + 'px';
            mouseFollower.style.top = followerY + 'px';
        }
        
        requestAnimationFrame(animateFollower);
    }
    animateFollower();
    
    // Interactive title letter hover effects
    const titleLetters = document.querySelectorAll('h1 span');
    titleLetters.forEach(letter => {
        letter.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.2) rotate(5deg)';
            this.style.color = '#ec4899';
        });
        
        letter.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1) rotate(0deg)';
            this.style.color = '';
        });
    });
    
    // Interactive background elements
    const bgElements = document.querySelectorAll('.absolute.rounded-full');
    bgElements.forEach(element => {
        element.addEventListener('click', function() {
            // Create ripple effect
            const ripple = document.createElement('div');
            ripple.className = 'absolute inset-0 rounded-full bg-white/30 animate-ping';
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 1000);
        });
    });
    
    // Smooth scroll for CTA buttons
    const startShoppingBtn = document.querySelector('button:has(i.fa-shopping-bag)');
    if (startShoppingBtn) {
        startShoppingBtn.addEventListener('click', function() {
            document.querySelector('.filter-section').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
    }
    
    // Interactive stats cards
    const statsCards = document.querySelectorAll('.bg-white\/80.backdrop-blur-sm');
    statsCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px) scale(1.05)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
    
    // Parallax effect for background elements
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.animate-float, .animate-float-delayed');
        
        parallaxElements.forEach(element => {
            const speed = 0.5;
            element.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });
    
    // Add typing effect to description
    const description = document.querySelector('p.text-gray-700');
    if (description) {
        const text = description.textContent;
        description.textContent = '';
        let i = 0;
        
        function typeWriter() {
            if (i < text.length) {
                description.innerHTML += text.charAt(i) === ' ' ? '&nbsp;' : text.charAt(i);
                i++;
                setTimeout(typeWriter, 30);
            }
        }
        
        // Start typing effect after a delay
        setTimeout(typeWriter, 1000);
    }
});
</script>
@endpush

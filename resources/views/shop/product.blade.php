@extends('layouts.app')

@section('title', 'Elegant Kurta Set - Jaipur Jazbaa')
@section('description', 'Handcrafted luxury kurta set with intricate embroidery. Perfect for special occasions and celebrations.')

@section('content')
<!-- Breadcrumb -->
<nav class="bg-gray-50 py-4">
    <div class="container mx-auto px-4">
        <div class="flex items-center space-x-2 text-sm text-gray-600">
            <a href="{{ route('home') }}" class="hover:text-black transition-colors">Home</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <a href="{{ route('shop.all') }}" class="hover:text-black transition-colors">Shop</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <a href="{{ route('shop.kurta-sets') }}" class="hover:text-black transition-colors">Kurta Sets</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span class="text-black">Elegant Kurta Set</span>
        </div>
    </div>
</nav>

<!-- Product Details -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Product Images -->
            <div class="space-y-4">
                <!-- Main Image -->
                <div class="aspect-[3/4] overflow-hidden bg-gray-100">
                    <img id="main-image" src="{{ asset('images/products/product-detail-1.jpg') }}" alt="Elegant Kurta Set" class="w-full h-full object-cover">
                </div>
                
                <!-- Thumbnail Images -->
                <div class="grid grid-cols-4 gap-4">
                    @for($i = 1; $i <= 4; $i++)
                    <div class="aspect-square overflow-hidden bg-gray-100 cursor-pointer border-2 {{ $i === 1 ? 'border-black' : 'border-transparent' }} hover:border-gray-400 transition-colors thumbnail" data-image="{{ asset('images/products/product-detail-' . $i . '.jpg') }}">
                        <img src="{{ asset('images/products/product-detail-' . $i . '.jpg') }}" alt="View {{ $i }}" class="w-full h-full object-cover">
                    </div>
                    @endfor
                </div>
            </div>

            <!-- Product Info -->
            <div class="space-y-6">
                <div>
                    <h1 class="font-playfair text-3xl md:text-4xl font-bold text-gray-900 mb-4">Elegant Kurta Set</h1>
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="flex items-center space-x-1">
                            @for($i = 1; $i <= 5; $i++)
                            <i class="fas fa-star text-yellow-400"></i>
                            @endfor
                            <span class="text-gray-600 text-sm ml-2">(127 reviews)</span>
                        </div>
                        <span class="text-green-600 text-sm font-medium">In Stock</span>
                    </div>
                    <div class="text-2xl font-bold text-gray-900 mb-6">₹21,900</div>
                </div>

                <div class="prose prose-gray max-w-none">
                    <p>Exquisite handcrafted kurta set featuring intricate embroidery and premium fabrics. This timeless piece combines traditional artistry with contemporary elegance, perfect for special occasions and celebrations.</p>
                </div>

                <!-- Color Selection -->
                <div>
                    <h3 class="font-medium text-gray-900 mb-3">Color: <span id="selected-color">Midnight Blue</span></h3>
                    <div class="flex space-x-3">
                        <button class="color-option w-8 h-8 bg-blue-900 rounded-full border-2 border-black" data-color="Midnight Blue"></button>
                        <button class="color-option w-8 h-8 bg-black rounded-full border-2 border-transparent hover:border-gray-400" data-color="Classic Black"></button>
                        <button class="color-option w-8 h-8 bg-red-800 rounded-full border-2 border-transparent hover:border-gray-400" data-color="Deep Maroon"></button>
                        <button class="color-option w-8 h-8 bg-green-800 rounded-full border-2 border-transparent hover:border-gray-400" data-color="Forest Green"></button>
                    </div>
                </div>

                <!-- Size Selection -->
                <div>
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="font-medium text-gray-900">Size: <span id="selected-size">M</span></h3>
                        <a href="{{ route('size-guide') }}" class="text-sm text-gray-600 hover:text-black underline">Size Guide</a>
                    </div>
                    <div class="grid grid-cols-4 gap-3">
                        <button class="size-option py-2 px-4 border border-gray-300 text-center hover:border-black transition-colors" data-size="XS">XS</button>
                        <button class="size-option py-2 px-4 border border-gray-300 text-center hover:border-black transition-colors" data-size="S">S</button>
                        <button class="size-option py-2 px-4 border border-black bg-black text-white" data-size="M">M</button>
                        <button class="size-option py-2 px-4 border border-gray-300 text-center hover:border-black transition-colors" data-size="L">L</button>
                        <button class="size-option py-2 px-4 border border-gray-300 text-center hover:border-black transition-colors" data-size="XL">XL</button>
                        <button class="size-option py-2 px-4 border border-gray-300 text-center hover:border-black transition-colors" data-size="XXL">XXL</button>
                    </div>
                </div>

                <!-- Quantity -->
                <div>
                    <h3 class="font-medium text-gray-900 mb-3">Quantity</h3>
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center border border-gray-300">
                            <button id="qty-minus" class="px-3 py-2 hover:bg-gray-100 transition-colors">-</button>
                            <input id="quantity" type="number" value="1" min="1" class="w-16 text-center border-0 focus:outline-none">
                            <button id="qty-plus" class="px-3 py-2 hover:bg-gray-100 transition-colors">+</button>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="space-y-4">
                    <button class="w-full btn-primary">
                        Add to Cart
                    </button>
                    <button class="w-full btn-secondary">
                        <i class="far fa-heart mr-2"></i>
                        Add to Wishlist
                    </button>
                </div>

                <!-- Product Features -->
                <div class="border-t border-gray-200 pt-6">
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-truck text-gray-600"></i>
                            <span class="text-sm text-gray-700">Free shipping on orders over ₹5,000</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-undo text-gray-600"></i>
                            <span class="text-sm text-gray-700">Easy returns within 30 days</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-certificate text-gray-600"></i>
                            <span class="text-sm text-gray-700">Authentic handcrafted piece</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Details Tabs -->
<section class="py-16 border-t border-gray-200">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Tab Navigation -->
            <div class="flex border-b border-gray-200 mb-8">
                <button class="tab-btn active py-4 px-6 font-medium border-b-2 border-black" data-tab="description">Description</button>
                <button class="tab-btn py-4 px-6 font-medium border-b-2 border-transparent hover:border-gray-300 transition-colors" data-tab="care">Care Instructions</button>
                <button class="tab-btn py-4 px-6 font-medium border-b-2 border-transparent hover:border-gray-300 transition-colors" data-tab="reviews">Reviews (127)</button>
            </div>

            <!-- Tab Content -->
            <div class="tab-content">
                <div id="description" class="tab-pane active">
                    <div class="prose prose-gray max-w-none">
                        <h3>Product Details</h3>
                        <p>This exquisite kurta set represents the pinnacle of Indian craftsmanship, featuring:</p>
                        <ul>
                            <li>Hand-embroidered motifs using traditional techniques</li>
                            <li>Premium cotton silk fabric for comfort and elegance</li>
                            <li>Matching dupatta with coordinated embellishments</li>
                            <li>Comfortable straight-cut palazzo pants</li>
                            <li>Perfect for weddings, festivals, and special occasions</li>
                        </ul>
                        
                        <h4>Fabric & Fit</h4>
                        <p>Crafted from the finest cotton silk blend, this kurta set offers both comfort and sophistication. The relaxed fit ensures all-day comfort while maintaining an elegant silhouette.</p>
                    </div>
                </div>

                <div id="care" class="tab-pane hidden">
                    <div class="prose prose-gray max-w-none">
                        <h3>Care Instructions</h3>
                        <ul>
                            <li>Dry clean only to preserve embroidery and fabric quality</li>
                            <li>Store in a cool, dry place away from direct sunlight</li>
                            <li>Use padded hangers to maintain shape</li>
                            <li>Iron on low heat with a cloth barrier</li>
                            <li>Avoid contact with perfumes and deodorants</li>
                        </ul>
                    </div>
                </div>

                <div id="reviews" class="tab-pane hidden">
                    <div class="space-y-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xl font-bold">Customer Reviews</h3>
                            <button class="btn-secondary text-sm">Write a Review</button>
                        </div>
                        
                        <!-- Review Summary -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <div class="flex items-center space-x-4 mb-4">
                                <div class="text-3xl font-bold">4.8</div>
                                <div>
                                    <div class="flex items-center space-x-1 mb-1">
                                        @for($i = 1; $i <= 5; $i++)
                                        <i class="fas fa-star text-yellow-400"></i>
                                        @endfor
                                    </div>
                                    <div class="text-sm text-gray-600">Based on 127 reviews</div>
                                </div>
                            </div>
                        </div>

                        <!-- Individual Reviews -->
                        <div class="space-y-6">
                            @for($i = 1; $i <= 3; $i++)
                            <div class="border-b border-gray-200 pb-6">
                                <div class="flex items-center space-x-4 mb-3">
                                    <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
                                        <span class="text-sm font-medium">{{ chr(64 + $i) }}</span>
                                    </div>
                                    <div>
                                        <div class="font-medium">Customer {{ $i }}</div>
                                        <div class="flex items-center space-x-2">
                                            <div class="flex items-center space-x-1">
                                                @for($j = 1; $j <= 5; $j++)
                                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                                @endfor
                                            </div>
                                            <span class="text-sm text-gray-600">{{ $i }} days ago</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-gray-700">Beautiful craftsmanship and excellent quality. The embroidery work is stunning and the fit is perfect. Highly recommended!</p>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Products -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="font-playfair text-3xl md:text-4xl font-bold text-gray-900 mb-4">You May Also Like</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @for($i = 1; $i <= 4; $i++)
            <div class="product-card group">
                <div class="product-image">
                    <img src="{{ asset('images/products/related-' . $i . '.jpg') }}" alt="Related Product {{ $i }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="product-info mt-4">
                    <h3 class="product-title font-medium text-gray-900 mb-2">Related Product {{ $i }}</h3>
                    <div class="product-price text-gray-600 text-sm">₹{{ number_format(18000 + ($i * 1500)) }}</div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Image gallery
    const thumbnails = document.querySelectorAll('.thumbnail');
    const mainImage = document.getElementById('main-image');
    
    thumbnails.forEach(thumb => {
        thumb.addEventListener('click', function() {
            // Remove active class from all thumbnails
            thumbnails.forEach(t => t.classList.remove('border-black'));
            thumbnails.forEach(t => t.classList.add('border-transparent'));
            
            // Add active class to clicked thumbnail
            this.classList.add('border-black');
            this.classList.remove('border-transparent');
            
            // Update main image
            mainImage.src = this.dataset.image;
        });
    });

    // Color selection
    const colorOptions = document.querySelectorAll('.color-option');
    const selectedColorSpan = document.getElementById('selected-color');
    
    colorOptions.forEach(option => {
        option.addEventListener('click', function() {
            // Remove active class from all colors
            colorOptions.forEach(c => c.classList.remove('border-black'));
            colorOptions.forEach(c => c.classList.add('border-transparent'));
            
            // Add active class to clicked color
            this.classList.add('border-black');
            this.classList.remove('border-transparent');
            
            // Update selected color text
            selectedColorSpan.textContent = this.dataset.color;
        });
    });

    // Size selection
    const sizeOptions = document.querySelectorAll('.size-option');
    const selectedSizeSpan = document.getElementById('selected-size');
    
    sizeOptions.forEach(option => {
        option.addEventListener('click', function() {
            // Remove active class from all sizes
            sizeOptions.forEach(s => {
                s.classList.remove('border-black', 'bg-black', 'text-white');
                s.classList.add('border-gray-300', 'text-black');
            });
            
            // Add active class to clicked size
            this.classList.add('border-black', 'bg-black', 'text-white');
            this.classList.remove('border-gray-300');
            
            // Update selected size text
            selectedSizeSpan.textContent = this.dataset.size;
        });
    });

    // Quantity controls
    const qtyMinus = document.getElementById('qty-minus');
    const qtyPlus = document.getElementById('qty-plus');
    const quantityInput = document.getElementById('quantity');
    
    qtyMinus.addEventListener('click', function() {
        let qty = parseInt(quantityInput.value);
        if (qty > 1) {
            quantityInput.value = qty - 1;
        }
    });
    
    qtyPlus.addEventListener('click', function() {
        let qty = parseInt(quantityInput.value);
        quantityInput.value = qty + 1;
    });

    // Tabs
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabPanes = document.querySelectorAll('.tab-pane');
    
    tabBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const targetTab = this.dataset.tab;
            
            // Remove active class from all tabs and panes
            tabBtns.forEach(b => {
                b.classList.remove('active', 'border-black');
                b.classList.add('border-transparent');
            });
            tabPanes.forEach(p => {
                p.classList.remove('active');
                p.classList.add('hidden');
            });
            
            // Add active class to clicked tab and corresponding pane
            this.classList.add('active', 'border-black');
            this.classList.remove('border-transparent');
            document.getElementById(targetTab).classList.add('active');
            document.getElementById(targetTab).classList.remove('hidden');
        });
    });
});
</script>
@endpush

<?php
// Simple script to create placeholder images for the website

function createPlaceholderImage($width, $height, $text, $filename, $bgColor = [200, 200, 200], $textColor = [50, 50, 50]) {
    $image = imagecreate($width, $height);
    
    // Allocate colors
    $bg = imagecolorallocate($image, $bgColor[0], $bgColor[1], $bgColor[2]);
    $textColorResource = imagecolorallocate($image, $textColor[0], $textColor[1], $textColor[2]);
    
    // Fill background
    imagefill($image, 0, 0, $bg);
    
    // Add text
    $font_size = 5;
    $text_width = imagefontwidth($font_size) * strlen($text);
    $text_height = imagefontheight($font_size);
    
    $x = ($width - $text_width) / 2;
    $y = ($height - $text_height) / 2;
    
    imagestring($image, $font_size, $x, $y, $text, $textColorResource);
    
    // Save image
    imagejpeg($image, $filename, 80);
    imagedestroy($image);
}

// Create directories if they don't exist
$dirs = [
    'public/images/categories',
    'public/images/products', 
    'public/images/instagram'
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// Create category images
$categories = [
    ['kurta-sets.jpg', 'Kurta Sets', [139, 69, 19]],
    ['kaftans.jpg', 'Kaftans', [75, 85, 99]],
    ['occasion-wear.jpg', 'Occasion Wear', [127, 29, 29]],
    ['kurta-sets-featured.jpg', 'Kurta Sets', [139, 69, 19]],
    ['kaftans-featured.jpg', 'Kaftans', [75, 85, 99]],
    ['occasion-wear-featured.jpg', 'Occasion Wear', [127, 29, 29]]
];

foreach ($categories as $cat) {
    createPlaceholderImage(600, 800, $cat[1], 'public/images/categories/' . $cat[0], $cat[2], [255, 255, 255]);
}

// Create product images
for ($i = 1; $i <= 12; $i++) {
    $colors = [
        [139, 69, 19],   // Brown
        [75, 85, 99],    // Gray
        [127, 29, 29],   // Red
        [21, 128, 61],   // Green
        [30, 64, 175],   // Blue
        [88, 28, 135]    // Purple
    ];
    
    $color = $colors[($i - 1) % count($colors)];
    createPlaceholderImage(600, 800, "Product $i", "public/images/products/product-$i.jpg", $color, [255, 255, 255]);
}

// Create additional product images
for ($i = 1; $i <= 4; $i++) {
    createPlaceholderImage(600, 800, "New Arrival $i", "public/images/products/new-arrival-$i.jpg", [139, 69, 19], [255, 255, 255]);
    createPlaceholderImage(600, 800, "Bestseller $i", "public/images/products/bestseller-$i.jpg", [127, 29, 29], [255, 255, 255]);
    createPlaceholderImage(600, 800, "Related $i", "public/images/products/related-$i.jpg", [75, 85, 99], [255, 255, 255]);
    createPlaceholderImage(600, 800, "Detail View $i", "public/images/products/product-detail-$i.jpg", [21, 128, 61], [255, 255, 255]);
}

// Create hero and showcase images
createPlaceholderImage(1920, 1080, 'Luxury Indian Wear', 'public/images/hero-bg.jpg', [139, 69, 19], [255, 255, 255]);
createPlaceholderImage(800, 1000, 'Celebrity Showcase', 'public/images/celebrity-showcase.jpg', [127, 29, 29], [255, 255, 255]);

// Create Instagram feed images
for ($i = 1; $i <= 8; $i++) {
    createPlaceholderImage(400, 400, "Instagram $i", "public/images/instagram/post-$i.jpg", [88, 28, 135], [255, 255, 255]);
}

echo "Placeholder images created successfully!\n";
echo "Created " . (count($categories) + 12 + 16 + 2 + 8) . " images total.\n";
?>

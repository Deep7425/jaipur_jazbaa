<?php

use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    return view('home');
})->name('home');

// Shop Routes
Route::get('/shop', function () {
    return view('shop.index');
})->name('shop.all');

Route::get('/shop/new-arrivals', function () {
    return view('shop.new-arrivals');
})->name('shop.new-arrivals');

Route::get('/shop/bestsellers', function () {
    return view('shop.bestsellers');
})->name('shop.bestsellers');

Route::get('/shop/sale', function () {
    return view('shop.sale');
})->name('shop.sale');

Route::get('/shop/kurta-sets', function () {
    return view('shop.kurta-sets');
})->name('shop.kurta-sets');

Route::get('/shop/kaftans', function () {
    return view('shop.kaftans');
})->name('shop.kaftans');

Route::get('/shop/occasion-wear', function () {
    return view('shop.occasion-wear');
})->name('shop.occasion-wear');

Route::get('/shop/silk-velvet', function () {
    return view('shop.silk-velvet');
})->name('shop.silk-velvet');

Route::get('/shop/ready-to-ship', function () {
    return view('shop.ready-to-ship');
})->name('shop.ready-to-ship');

Route::get('/shop/gift-cards', function () {
    return view('shop.gift-cards');
})->name('shop.gift-cards');

Route::get('/shop/celebrities', function () {
    return view('shop.celebrities');
})->name('shop.celebrities');

Route::get('/shop/influencers', function () {
    return view('shop.influencers');
})->name('shop.influencers');

// Collections
Route::get('/collections', function () {
    return view('collections.index');
})->name('collections');

// Account Routes
Route::get('/account', function () {
    return view('account.index');
})->name('account');

// Cart Routes
Route::get('/cart', function () {
    return view('cart.index');
})->name('cart');

// Footer Pages
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/size-guide', function () {
    return view('pages.size-guide');
})->name('size-guide');

Route::get('/shipping', function () {
    return view('pages.shipping');
})->name('shipping');

Route::get('/returns', function () {
    return view('pages.returns');
})->name('returns');

Route::get('/care-instructions', function () {
    return view('pages.care-instructions');
})->name('care-instructions');

Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/craftsmanship', function () {
    return view('pages.craftsmanship');
})->name('craftsmanship');

Route::get('/sustainability', function () {
    return view('pages.sustainability');
})->name('sustainability');

Route::get('/press', function () {
    return view('pages.press');
})->name('press');

Route::get('/careers', function () {
    return view('pages.careers');
})->name('careers');

Route::get('/wholesale', function () {
    return view('pages.wholesale');
})->name('wholesale');

Route::get('/privacy', function () {
    return view('pages.privacy');
})->name('privacy');

Route::get('/terms', function () {
    return view('pages.terms');
})->name('terms');

Route::get('/cookies', function () {
    return view('pages.cookies');
})->name('cookies');

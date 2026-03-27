<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index3_one_page'])
    ->name('index');

Route::get('/index-one-page', [HomeController::class, 'index_one_page'])
    ->name('index-one-page');

Route::get('/index2', [HomeController::class, 'index2'])
    ->name('index2');

Route::get('/index2-one-page', [HomeController::class, 'index2_one_page'])
    ->name('index2-one-page');

Route::get('/index3', [HomeController::class, 'index3'])
    ->name('index3');

Route::get('/index3-one-page', [HomeController::class, 'index3_one_page'])
    ->name('index3-one-page');

Route::get('/index-dark', [HomeController::class, 'index_dark'])
    ->name('index-dark');

Route::get('/about', [PagesController::class, 'about'])
    ->name('about');

Route::get('/services', [PagesController::class, 'services'])
    ->name('services');

Route::get('/drivers', [PagesController::class, 'drivers'])
    ->name('drivers');

Route::get('/driver-details', [PagesController::class, 'driver_details'])
    ->name('driver-details');

Route::get('/testimonials', [PagesController::class, 'testimonials'])
    ->name('testimonials');

Route::get('/pricing', [PagesController::class, 'pricing'])
    ->name('pricing');

Route::get('/faq', [PagesController::class, 'faq'])
    ->name('faq');

Route::get('/404', [PagesController::class, 'notFound'])
    ->name('404');

Route::get('/car-subscription', [PagesController::class, 'car_subscription'])
    ->name('car-subscription');

Route::get('/self-drive-car', [PagesController::class, 'self_drive_car'])
    ->name('self-drive-car');

Route::get('/car-sharing', [PagesController::class, 'car_list_v_2'])
    ->name('car-sharing');

Route::get('/taxi-services', [PagesController::class, 'car_list_v_3'])
    ->name('taxi-services');

Route::get('/swift-vxi-details', [PagesController::class, 'swift_vxi_details'])
    ->name('swift-vxi-details');

Route::get('/ertiga-vxi-details', [PagesController::class, 'ertiga_vxi_details'])
    ->name('ertiga-vxi-details');

Route::get('/swift-lxi-details', [PagesController::class, 'swift_lxi_details'])
    ->name('swift-lxi-details');

Route::get('/mahindra-scorpio-s11-details', [PagesController::class, 'mahindra_scorpio_s11_details'])
    ->name('mahindra-scorpio-s11-details');

Route::get('/mahindra-thar-4x4-details', [PagesController::class, 'mahindra_thar_4x4_details'])
    ->name('mahindra-thar-4x4-details');

Route::get('/hyundai-i20-details', [PagesController::class, 'hyundai_i20_details'])
    ->name('hyundai-i20-details');

Route::get('/hyundai-i10-details', [PagesController::class, 'hyundai_i10_details'])
    ->name('hyundai-i10-details');

Route::get('/products', [PagesController::class, 'products'])
    ->name('products');

Route::get('/product-details', [PagesController::class, 'product_details'])
    ->name('product-details');

Route::get('/cart', [PagesController::class, 'cart'])
    ->name('cart');

Route::get('/checkout', [PagesController::class, 'checkout'])
    ->name('checkout');

Route::get('/wishlist', [PagesController::class, 'wishlist'])
    ->name('wishlist');

Route::get('/sign-up', [PagesController::class, 'sign_up'])
    ->name('sign-up');

Route::get('/login', [PagesController::class, 'login'])
    ->name('login');

Route::get('/blog', [PagesController::class, 'blog'])
    ->name('blog');

Route::get('/blog-standard', [PagesController::class, 'blog_standard'])
    ->name('blog-standard');

Route::get('/blog-left-sidebar', [PagesController::class, 'blog_left_sidebar'])
    ->name('blog-left-sidebar');

Route::get('/blog-right-sidebar', [PagesController::class, 'blog_right_sidebar'])
    ->name('blog-right-sidebar');

Route::get('/blog-details', [PagesController::class, 'blog_details'])
    ->name('blog-details');

Route::get('/contact', [PagesController::class, 'contact'])
    ->name('contact');

Route::get('/terms-of-service', [PagesController::class, 'terms_of_service'])
    ->name('terms-of-service');

Route::get('/privacy-policy', [PagesController::class, 'privacy_policy'])
    ->name('privacy-policy');

Route::get('/cancellation-policy', [PagesController::class, 'cancellation_policy'])
    ->name('cancellation-policy');

Route::get('/customer-agreement', [PagesController::class, 'customer_agreement'])
    ->name('customer-agreement');

Route::fallback(function () {
    return view('pages.404');
});

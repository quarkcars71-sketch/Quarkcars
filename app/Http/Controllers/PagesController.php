<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function drivers()
    {
        return view('pages.drivers');
    }

    public function driver_details()
    {
        return view('pages.driver-details');
    }

    public function testimonials()
    {
        return view('pages.testimonials');
    }

    public function pricing()
    {
        return view('pages.pricing');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function notFound()
    {
        return view('pages.404');
    }

    public function car_subscription()
    {
        return view('pages.car-subscription');
    }

    public function self_drive_car()
    {
        return view('pages.self-drive-car');
    }

    public function car_list_v_2()
    {
        return view('pages.car-sharing');
    }

    public function car_list_v_3()
    {
        return view('pages.taxi-services');
    }

    public function listing_single()
    {
        return view('pages.listing-single');
    }

    public function products()
    {
        return view('pages.products');
    }

    public function product_details()
    {
        return view('pages.product-details');
    }

    public function cart()
    {
        return view('pages.cart');
    }

    public function checkout()
    {
        return view('pages.checkout');
    }

    public function wishlist()
    {
        return view('pages.wishlist');
    }

    public function sign_up()
    {
        return view('pages.sign-up');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function blog_standard()
    {
        return view('pages.blog-standard');
    }

    public function blog_left_sidebar()
    {
        return view('pages.blog-left-sidebar');
    }

    public function blog_right_sidebar()
    {
        return view('pages.blog-right-sidebar');
    }

    public function blog_details()
    {
        return view('pages.blog-details');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function terms_of_service()
    {
        return view('pages.terms-of-service');
    }

    public function privacy_policy()
    {
        return view('pages.privacy-policy');
    }

    public function cancellation_policy()
    {
        return view('pages.cancellation-policy');
    }
}

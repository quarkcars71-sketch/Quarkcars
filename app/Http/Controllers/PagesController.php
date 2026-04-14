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

    public function swift_vxi_details()
    {
        return view('pages.SwiftVXIDetails');
    }

    public function ertiga_vxi_details()
    {
        return view('pages.ErtigaVXIDetails');
    }

    public function swift_lxi_details()
    {
        return view('pages.SwiftLXIDetails');
    }

    public function mahindra_scorpio_s11_details()
    {
        return view('pages.MahindraScorpioS11Details');
    }

    public function mahindra_thar_4x4_details()
    {
        return view('pages.MahindraThar4X4Details');
    }

    public function hyundai_i20_details()
    {
        return view('pages.Hyundaii20Details');
    }

    public function hyundai_i10_details()
    {
        return view('pages.Hyundaii10Details');
    }

    public function maruti_swift_dzire_details()
    {
        return view('pages.MarutiSwiftDzireDetails');
    }

    public function aura_cng_details()
    {
        return view('pages.AuraCNGDetails');
    }

    public function maruti_baleno_details()
    {
        return view('pages.MarutiBalenoDetails');
    }

    public function maruti_dzire_tour_cng_details()
    {
        return view('pages.MarutiDzireTourCNGDetails');
    }

    public function maruti_brezza_details()
    {
        return view('pages.MarutiBrezzaDetails');
    }

    public function hyundai_verna_petrol_details()
    {
        return view('pages.HyundaiVernaPetrol');
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

    public function register(Request $request)
    {
        $validated = $request->validate([
            'form_name' => 'required|string|max:255',
            'form_email' => 'required|string|email|max:255|unique:users,email',
            'form_phone' => 'required|string|max:20',
            'form_password' => 'required|string|min:8',
        ]);

        $user = \App\Models\User::create([
            'name' => $validated['form_name'],
            'email' => $validated['form_email'],
            'password' => \Illuminate\Support\Facades\Hash::make($validated['form_password']),
        ]);

        \Illuminate\Support\Facades\Auth::login($user);

        return redirect()->route('dashboard')->with('success', 'Registration successful!');
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

    public function customer_agreement()
    {
        return view('pages.customer-agreement');
    }
}

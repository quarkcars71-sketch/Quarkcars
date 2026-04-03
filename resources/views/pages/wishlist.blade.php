@extends('layouts.layoutCommon')
@section('title', 'Wishlist || QuarkCars')

@section('content')

    <x-pageHeader title="Wishlist" subtitle="Wishlist" />

    <!--Start Cart Page-->
    <section class="wishlist-page">
        <div class="container">
            <div class="table-responsive">
                <table class="table wishlist-table">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Unit Price</th>
                            <th>Stock Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>
                                <div class="product-box">
                                    <div class="cross-icon">
                                        <a href="{{ route('wishlist') }}"><i class="fas fa-times"></i></a>
                                    </div>
                                    <div class="img-box">
                                        <img src="{{ asset('assets/images/shop/wishlist-page-img-1.jpg') }}" alt="">
                                    </div>
                                    <h3><a href="{{ route('product-details') }}">Fite ON AC_DC Adapter</a></h3>
                                </div>
                            </td>
                            <td>$120.99</td>
                            <td>In Stock</td>
                            <td>
                                <div class="product-select">
                                    <a class="thm-btn wishlist-page__btn" href="{{ route('wishlist') }}">
                                        Select Product <span class="fas fa-arrow-right"></span>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="product-box">
                                    <div class="cross-icon">
                                        <a href="{{ route('wishlist') }}"><i class="fas fa-times"></i></a>
                                    </div>
                                    <div class="img-box">
                                        <img src="{{ asset('assets/images/shop/wishlist-page-img-2.jpg') }}" alt="">
                                    </div>
                                    <h3><a href="{{ route('product-details') }}">Gaming Headset</a></h3>
                                </div>
                            </td>
                            <td>$100.99</td>
                            <td>In Stock</td>
                            <td>
                                <div class="product-select">
                                    <a class="thm-btn wishlist-page__btn" href="{{ route('wishlist') }}">
                                        Select Product <span class="fas fa-arrow-right"></span>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="product-box">
                                    <div class="cross-icon">
                                        <a href="{{ route('wishlist') }}"><i class="fas fa-times"></i></a>
                                    </div>
                                    <div class="img-box">
                                        <img src="{{ asset('assets/images/shop/wishlist-page-img-3.jpg') }}" alt="">
                                    </div>
                                    <h3><a href="{{ route('product-details') }}">Wireless Mouse</a></h3>
                                </div>
                            </td>
                            <td>$106.99</td>
                            <td>In Stock</td>
                            <td>
                                <div class="product-select">
                                    <a class="thm-btn wishlist-page__btn" href="{{ route('wishlist') }}">
                                        Select Product <span class="fas fa-arrow-right"></span>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="product-box">
                                    <div class="cross-icon">
                                        <a href="{{ route('wishlist') }}"><i class="fas fa-times"></i></a>
                                    </div>
                                    <div class="img-box">
                                        <img src="{{ asset('assets/images/shop/wishlist-page-img-4.jpg') }}" alt="">
                                    </div>
                                    <h3><a href="{{ route('product-details') }}">Screwdriver and wrench</a></h3>
                                </div>
                            </td>
                            <td>$170.00</td>
                            <td>In Stock</td>
                            <td>
                                <div class="product-select">
                                    <a class="thm-btn wishlist-page__btn" href="{{ route('wishlist') }}">
                                        Select Product <span class="fas fa-arrow-right"></span>
                                    </a>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="product-details__social two">
                <div class="title">
                    <h3>Share with friends:</h3>
                </div>
                <div class="product-details__social-link">
                    <a href="#"><span class="fab fa-twitter"></span></a>
                    <a href="#"><span class="fab fa-facebook"></span></a>
                    <a href="#"><span class="fab fa-pinterest-p"></span></a>
                    <a href="#"><span class="fab fa-instagram"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!--End Cart Page-->

    <!--Gallery One Start -->
    <section class="gallery-one">
        <div class="gallery-one__carousel owl-theme owl-carousel">
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-1(1).jpg') }}" alt="">
                        <a href="{{ route('car-subscription') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-2(1).jpg') }}" alt="">
                        <a href="{{ route('car-subscription') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-3(1).jpg') }}" alt="">
                        <a href="{{ route('cart') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-4(1).jpg') }}" alt="">
                        <a href="{{ route('cart') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-5(1).jpg') }}" alt="">
                        <a href="{{ route('cart') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-6(1).jpg') }}" alt="">
                        <a href="{{ route('cart') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
        </div>
    </section>
    <!--Gallery One End -->

    <x-footer_style_one />
@endsection
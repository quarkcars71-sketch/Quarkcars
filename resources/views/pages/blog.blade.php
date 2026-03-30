@extends('layouts.layoutCommon')
@section('title', 'Blog')

@section('content')


    <x-pageHeader title="Blog" subtitle="Blog" />

    <!--Blog Page Start -->
    <section class="blog-page">
        <div class="container">
            <div class="row">
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="{{ asset('assets/images/blog/blog-1-1.jpg') }}" alt="">
                                <div class="blog-one__tags">
                                    <span>Car Showcase</span>
                                </div>
                            </div>
                            <div class="blog-one__date">
                                <p>10</p>
                                <span>Nov</span>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="{{ route('blog-details') }}">
                                        <span class="fas fa-user"></span>Admin
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-details') }}">
                                        <span class="fas fa-comments"></span>Comment
                                    </a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Self Drive Car Rental in Jaipur - Complete Guide (2026)</a></h3>
                            <p class="blog-one__text">Self-drive car rental in Jaipur is becoming the most preferred way to travel. It offers freedom, flexibility, and privacy—without depending on drivers.</p>
                            <a href="{{ route('blog-details') }}" class="blog-one__read-more">Read More <span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="{{ asset('assets/images/blog/blog-1-2.jpg') }}" alt="">
                                <div class="blog-one__tags">
                                    <span>Car Showcase</span>
                                </div>
                            </div>
                            <div class="blog-one__date">
                                <p>10</p>
                                <span>Nov</span>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="{{ route('blog-details') }}">
                                        <span class="fas fa-user"></span>Admin
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-details') }}">
                                        <span class="fas fa-comments"></span>Comment
                                    </a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Car Rental Price in Jaipur - Full Cost Breakdown</a></h3>
                            <p class="blog-one__text">Understanding rental cost helps you choose the right car within your budget.</p>
                            <a href="{{ route('blog-details') }}" class="blog-one__read-more">Read More <span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="{{ asset('assets/images/blog/blog-1-3.jpg') }}" alt="">
                                <div class="blog-one__tags">
                                    <span>Car Showcase</span>
                                </div>
                            </div>
                            <div class="blog-one__date">
                                <p>10</p>
                                <span>Nov</span>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="{{ route('blog-details') }}">
                                        <span class="fas fa-user"></span>Admin
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-details') }}">
                                        <span class="fas fa-comments"></span>Comment
                                    </a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Cheap Car Rental in Jaipur - Best Budget Options.</a></h3>
                            <p class="blog-one__text">Looking for affordable travel? Budget car rentals are the best solution.</p>
                            <a href="{{ route('blog-details') }}" class="blog-one__read-more">Read More <span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="{{ asset('assets/images/blog/blog-1-4.jpg') }}" alt="">
                                <div class="blog-one__tags">
                                    <span>Car Showcase</span>
                                </div>
                            </div>
                            <div class="blog-one__date">
                                <p>10</p>
                                <span>Nov</span>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="{{ route('blog-details') }}">
                                        <span class="fas fa-user"></span>Admin
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-details') }}">
                                        <span class="fas fa-comments"></span>Comment
                                    </a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Documents Required for Self Drive Car Rental in Jaipur.</a></h3>
                            <p class="blog-one__text">Before renting a car, you must have proper documents ready.</p>
                            <a href="{{ route('blog-details') }}" class="blog-one__read-more">Read More <span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="{{ asset('assets/images/blog/blog-1-5.jpg') }}" alt="">
                                <div class="blog-one__tags">
                                    <span>Car Showcase</span>
                                </div>
                            </div>
                            <div class="blog-one__date">
                                <p>10</p>
                                <span>Nov</span>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="{{ route('blog-details') }}">
                                        <span class="fas fa-user"></span>Admin
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-details') }}">
                                        <span class="fas fa-comments"></span>Comment
                                    </a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Hatchback vs SUV vs Luxury Cars - Which Should You Rent?</a></h3>
                            <p class="blog-one__text">Choosing the right car depends on your budget and purpose.</p>
                            <a href="{{ route('blog-details') }}" class="blog-one__read-more">Read More <span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="{{ asset('assets/images/blog/blog-1-6.jpg') }}" alt="">
                                <div class="blog-one__tags">
                                    <span>Car Showcase</span>
                                </div>
                            </div>
                            <div class="blog-one__date">
                                <p>10</p>
                                <span>Nov</span>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="{{ route('blog-details') }}">
                                        <span class="fas fa-user"></span>Admin
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-details') }}">
                                        <span class="fas fa-comments"></span>Comment
                                    </a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">SUV Rental in Jaipur – Price, Benefits & Best Options (2026 Guide)</a></h3>
                            <p class="blog-one__text">SUV rentals in Jaipur are ideal for travelers who want comfort, space, and power, especially for long trips and family travel.</p>
                            <a href="{{ route('blog-details') }}" class="blog-one__read-more">Read More <span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <div class="car-listing__pagination">
                    <ul class="pg-pagination list-unstyled">
                        <li class="prev">
                            <a href="#" aria-label="prev"><i class="fas fa-angle-left"></i></a>
                        </li>
                        <li class="count active"><a href="#">1</a></li>
                        <li class="count"><a href="#">2</a></li>
                        <li class="count"><a href="#">3</a></li>
                        <li class="count"><a href="#">...</a></li>
                        <li class="next">
                            <a href="#" aria-label="Next"><i class="fas fa-angle-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Blog Page End -->



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
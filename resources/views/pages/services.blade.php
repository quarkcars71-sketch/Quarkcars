@extends('layouts.layoutCommon')
@section('title', 'Services')

@section('content')

    <x-pageHeader title="Services" subtitle="Services" />

    <!-- Sliding Text One Start -->
    <section class="sliding-text-one">
        <div class="sliding-text-one__wrap">
            <ul class="sliding-text__list list-unstyled marquee_mode">
                <li>
                    <h2 data-hover="Premium" class="sliding-text__title">Premium
                        <span class="icon-jeep"></span>
                    </h2>
                </li>
                <li>
                    <h2 data-hover="Rates" class="sliding-text__title">Rates
                        <span class="icon-cuv"></span>
                    </h2>
                </li>
                <li>
                    <h2 data-hover="Car" class="sliding-text__title">Car
                        <span class="icon-jeep"></span>
                    </h2>
                </li>
                <li>
                    <h2 data-hover="Rental" class="sliding-text__title">Rental
                        <span class="icon-cuv"></span>
                    </h2>
                </li>
                <!-- <li>
                    <h2 data-hover="Worldwide" class="sliding-text__title">Worldwide
                        <span class="icon-jeep"></span>
                    </h2>
                </li> -->
                <li>
                    <h2 data-hover="Affordable" class="sliding-text__title">Affordable
                        <span class="icon-cuv"></span>
                    </h2>
                </li>
            </ul>
        </div>
    </section>
    <!-- Sliding Text One End -->

    <!-- Services One Start -->
    <!-- <section class="services-one">
        <div class="services-one__shape-1"></div>
        <div class="services-one__shape-2"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box justify-content-center">
                    <div class="section-title__tagline-shape">
                        <img src="{{ asset('assets/images/shapes/section-title-tagline-shape-1.png') }}" alt="">
                    </div>
                    <span class="section-title__tagline">What We’re Offering</span>
                </div>
                <h2 class="section-title__title title-animation">Services We’re Provding <br> to Customers</h2>
            </div>
            <div class="row"> -->
                <!--Services One Single Start-->
                <!-- <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="services-one__single">
                        <div class="services-one__single-shape-1"></div>
                        <div class="services-one__single-shape-2"></div>
                        <div class="services-one__single-shape-3"></div>
                        <div class="services-one__count"></div>
                        <div class="services-one__icon">
                            <span class="icon-car"></span>
                        </div>
                        <h3 class="services-one__title"><a href="{{ route('services') }}">Self Drive Rental</a>
                        </h3>
                        <p class="services-one__text">Flexible and convenient self-drive car rentals for complete travel freedom.</p>
                    </div>
                </div> -->
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <!-- <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="services-one__single">
                        <div class="services-one__single-shape-1"></div>
                        <div class="services-one__single-shape-2"></div>
                        <div class="services-one__single-shape-3"></div>
                        <div class="services-one__count"></div>
                        <div class="services-one__icon">
                            <span class="icon-taxi"></span>
                        </div>
                        <h3 class="services-one__title"><a href="{{ route('services') }}">Car rental with driver</a>
                        </h3>
                        <p class="services-one__text">Professional chauffeur-driven car rental for a comfortable and stress-free journey.</p>
                    </div>
                </div> -->
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <!-- <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
                    <div class="services-one__single">
                        <div class="services-one__single-shape-1"></div>
                        <div class="services-one__single-shape-2"></div>
                        <div class="services-one__single-shape-3"></div>
                        <div class="services-one__count"></div>
                        <div class="services-one__icon">
                            <span class="icon-sport-car-1"></span>
                        </div>
                        <h3 class="services-one__title"><a href="{{ route('services') }}">Airport transfer</a></h3>
                        <p class="services-one__text">Reliable airport pickup and drop services ensuring comfortable, timely travel every time.</p>
                    </div>
                </div> -->
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <!-- <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="700ms" data-wow-duration="1500ms">
                    <div class="services-one__single">
                        <div class="services-one__single-shape-1"></div>
                        <div class="services-one__single-shape-2"></div>
                        <div class="services-one__single-shape-3"></div>
                        <div class="services-one__count"></div>
                        <div class="services-one__icon">
                            <span class="icon-car-insurance"></span>
                        </div>
                        <h3 class="services-one__title"><a href="{{ route('services') }}">Fleet leasing</a></h3>
                        <p class="services-one__text">Flexible fleet leasing solutions for businesses with reliable and cost-efficient vehicles.

</p>
                    </div>
                </div> -->
                <!--Services One Single End-->
            <!-- </div>
        </div>
    </section> -->
    <!-- Services One End -->

    <!-- Process One Start -->
    <section class="process-one services-page-process">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style2">
                <div class="section-title__tagline-box justify-content-center">
                    <div class="section-title__tagline-shape">
                        <img src="{{ asset('assets/images/shapes/section-title-tagline-shape-1.png') }}" alt="">
                    </div>
                    <span class="section-title__tagline">Steps</span>
                </div>
                <h2 class="section-title__title title-animation">Car Rental Process</h2>
            </div>
            <div class="row">
                <!-- Process One Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="process-one__single">
                        <!-- <div class="process-one__single-bg"
                            style="background-image: url({{ asset('assets/images/backgrounds/process-one-single-bg-1.jpg') }});">
                        </div> -->
                        <div class="process-one__icon-box">
                            <div class="process-one__icon-shape"></div>
                            <div class="process-one__icon">
                                <span class="icon-car-wash"></span>
                            </div>
                            <div class="process-one__count"></div>
                        </div>
                        <h3 class="process-one__title">Choose A Car</h3>
                        <p class="process-one__text">Select the perfect car from our wide range of reliable and comfortable vehicles.</p>
                    </div>
                </div>
                <!-- Process One Single End -->
                <!-- Process One Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="process-one__single">
                        <!-- <div class="process-one__single-bg"
                            style="background-image: url({{ asset('assets/images/backgrounds/process-one-single-bg-2.jpg') }});">
                        </div> -->
                        <div class="process-one__icon-box">
                            <div class="process-one__icon-shape"></div>
                            <div class="process-one__icon">
                                <span class="icon-in-person"></span>
                            </div>
                            <div class="process-one__count"></div>
                        </div>
                        <h3 class="process-one__title">Come In Contact</h3>
                        <p class="process-one__text">Get in touch with our team for quick support and booking assistance.</p>
                    </div>
                </div>
                <!-- Process One Single End -->
                <!-- Process One Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
                    <div class="process-one__single">
                        <!-- <div class="process-one__single-bg"
                            style="background-image: url({{ asset('assets/images/backgrounds/process-one-single-bg-3.jpg') }});">
                        </div> -->
                        <div class="process-one__icon-box">
                            <div class="process-one__icon-shape"></div>
                            <div class="process-one__icon">
                                <span class="icon-car-insurance"></span>
                            </div>
                            <div class="process-one__count"></div>
                        </div>
                        <h3 class="process-one__title">Pick-Up Locations</h3>
                        <p class="process-one__text">Convenient pick-up points across multiple locations for easy and flexible car rentals.</p>
                    </div>
                </div>
                <!-- Process One Single End -->
                <!-- Process One Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="700ms" data-wow-duration="1500ms">
                    <div class="process-one__single">
                        <!-- <div class="process-one__single-bg"
                            style="background-image: url({{ asset('assets/images/backgrounds/process-one-single-bg-4.jpg') }});">
                        </div> -->
                        <div class="process-one__icon-box">
                            <div class="process-one__icon-shape"></div>
                            <div class="process-one__icon">
                                <span class="icon-steering-wheel"></span>
                            </div>
                            <div class="process-one__count"></div>
                        </div>
                        <h3 class="process-one__title">Enjoy Driving</h3>
                        <p class="process-one__text">Experience smooth, comfortable driving with our well-maintained rental cars.</p>
                    </div>
                </div>
                <!-- Process One Single End -->
            </div>
        </div>
    </section>
    <!-- Process One End -->

    <!--Services Three Start -->
    <section class="services-three services-four">
        <div class="services-three__shape-1"></div>
        <div class="services-three__shape-2"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box justify-content-center">
                    <div class="section-title__tagline-shape">
                        <img src="{{ asset('assets/images/shapes/section-title-tagline-shape-1.png') }}" alt="">
                    </div>
                    <span class="section-title__tagline">What We’re Offering</span>
                </div>
                <h2 class="section-title__title title-animation">Services We’re Provding <br> to Customers</h2>
            </div>
            <div class="row">
                <!--Services Three Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                            <span class="icon-car"></span>
                        </div>
                        <div class="services-three__content">
                            <h3 class="services-three__title"><a href="{{ route('services') }}">Self Drive Rental</a>
                            </h3>
                            <p class="services-three__text">Flexible and convenient self-drive car rentals for complete travel freedom.</p>
                        </div>
                        <div class="services-three__count"></div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                            <span class="icon-taxi"></span>
                        </div>
                        <div class="services-three__content">
                            <h3 class="services-three__title"><a href="{{ route('services') }}">Car Sharing</a>
                            </h3>
                            <p class="services-three__text">Earn consistently by sharing your car through a trusted and managed platform.</p>
                        </div>
                        <div class="services-three__count"></div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                            <span class="icon-sport-car-1"></span>
                        </div>
                        <div class="services-three__content">
                            <h3 class="services-three__title"><a href="{{ route('services') }}">Airport transfer</a>
                            </h3>
                            <p class="services-three__text">Reliable airport pickup and drop services ensuring comfortable, timely travel every time.</p>
                        </div>
                        <div class="services-three__count"></div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                            <span class="icon-car-insurance"></span>
                        </div>
                        <div class="services-three__content">
                            <h3 class="services-three__title"><a href="{{ route('services') }}">Fleet leasing</a>
                            </h3>
                            <p class="services-three__text">Flexible fleet leasing solutions for businesses with reliable and cost-efficient vehicles.</p>
                        </div>
                        <div class="services-three__count"></div>
                    </div>
                </div>
                <!--Services Three Single End-->
            </div>
        </div>
    </section>
    <!--Services Three End -->

    <!--Lets Talk Start -->
    <section class="lets-talk">
        <!-- <div class="lets-talk__bg"
            style="background-image: url({{ asset('assets/images/backgrounds/lets-talk-bg.jpg') }});"></div> -->
        <div class="container">
            <div class="lets-talk__inner">
                <div class="lets-talk__title">
                    <p>Rent Your Car</p>
                    <h2>Interested in Renting?</h2>
                </div>
                <div class="lets-talk__btn-boxes">
                    <div class="lets-talk__btn-1">
                        <a href="{{ route('contact') }}" class="thm-btn">Contact Us<span
                                class="fas fa-arrow-right"></span></a>
                    </div>
                    <div class="lets-talk__btn-2">
                        <a href="{{ route('self-drive-car') }}" class="thm-btn">Rent Now<span
                                class="fas fa-arrow-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Lets Talk End -->

    <!-- Services Two Start -->
    <!-- <section class="services-two">
        <div class="services-two__shape-1"></div>
        <div class="services-two__shape-2"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box justify-content-center">
                    <div class="section-title__tagline-shape">
                        <img src="{{ asset('assets/images/shapes/section-title-tagline-shape-1.png') }}" alt="">
                    </div>
                    <span class="section-title__tagline">What We’re Offering</span>
                </div>
                <h2 class="section-title__title title-animation">Services We’re Provding <br> to Customers</h2>
            </div>
            <div class="row"> -->
                <!--Services Two Single Start-->
                <!-- <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="services-two__single">
                        <div class="services-two__single-shape-1"></div>
                        <div class="services-two__single-shape-2"></div>
                        <div class="services-two__single-shape-3"></div>
                        <div class="services-two__count"></div>
                        <div class="services-two__icon">
                            <span class="icon-car"></span>
                        </div>
                        <h3 class="services-two__title"><a href="{{ route('services') }}">Corporate car rental</a>
                        </h3>
                        <p class="services-two__text">Open multipy a green form lesser their from in made herb
                            multiply</p>
                    </div>
                </div> -->
                <!--Services Two Single End-->
                <!--Services Two Single Start-->
                <!-- <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="services-two__single">
                        <div class="services-two__single-shape-1"></div>
                        <div class="services-two__single-shape-2"></div>
                        <div class="services-two__single-shape-3"></div>
                        <div class="services-two__count"></div>
                        <div class="services-two__icon">
                            <span class="icon-taxi"></span>
                        </div>
                        <h3 class="services-two__title"><a href="{{ route('services') }}">Car rental with driver</a>
                        </h3>
                        <p class="services-two__text">Open multipy a green form lesser their from in made herb
                            multiply</p>
                    </div>
                </div> -->
                <!--Services Two Single End-->
                <!--Services Two Single Start-->
                <!-- <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="services-two__single">
                        <div class="services-two__single-shape-1"></div>
                        <div class="services-two__single-shape-2"></div>
                        <div class="services-two__single-shape-3"></div>
                        <div class="services-two__count"></div>
                        <div class="services-two__icon">
                            <span class="icon-sport-car-1"></span>
                        </div>
                        <h3 class="services-two__title"><a href="{{ route('services') }}">Airport transfer</a></h3>
                        <p class="services-two__text">Open multipy a green form lesser their from in made herb
                            multiply</p>
                    </div>
                </div> -->
                <!--Services Two Single End-->
                <!--Services Two Single Start-->
                <!-- <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="services-two__single">
                        <div class="services-two__single-shape-1"></div>
                        <div class="services-two__single-shape-2"></div>
                        <div class="services-two__single-shape-3"></div>
                        <div class="services-two__count"></div>
                        <div class="services-two__icon">
                            <span class="icon-car-insurance"></span>
                        </div>
                        <h3 class="services-two__title"><a href="{{ route('services') }}">Fleet leasing</a></h3>
                        <p class="services-two__text">Open multipy a green form lesser their from in made herb
                            multiply</p>
                    </div>
                </div> -->
                <!--Services Two Single End-->
            <!-- </div>
        </div>
    </section> -->
    <!-- Services Two End -->



    <!--Gallery One Start -->
    <section class="gallery-one">
        <div class="gallery-one__carousel owl-theme owl-carousel">
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-1(1).jpg') }}" alt="">
                        <a href="{{ route('cars') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-2(1).jpg') }}" alt="">
                        <a href="{{ route('cars') }}"><span class="fab fa-instagram"></span></a>
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
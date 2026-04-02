@extends('layouts.layoutCommon')
@section('title', 'About Us || Gorent || Gorent Laravel  Template')

@section('content')

    <x-pageHeader title="About Us" subtitle="About Us" />

    <!-- About One Start -->
    <section class="about-one about-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-one__img-box">
                            <div class="about-one__img">
                                <img src="{{ asset('assets/images/resources/about-one-img-1(1).jpg') }}" alt="">
                            </div>
                            <div class="about-one__shape-2 float-bob-y">
                                <img src="{{ asset('assets/images/shapes/about-one-shape-2(1).png') }}" alt="">
                            </div>
                            <div class="about-one__shape-1">
                                <img src="{{ asset('assets/images/shapes/about-one-shape-1.png') }}" alt="">
                            </div>
                            <div class="about-one__shape-4 float-bob-x">
                                <img src="{{ asset('assets/images/shapes/about-one-shape-4.png') }}" alt="">
                            </div>
                            <div class="about-one__shape-3 float-bob-x">
                                <img src="{{ asset('assets/images/shapes/about-one-shape-3.png') }}" alt="">
                            </div>
                            <div class="about-one__img-2">
                                <img src="{{ asset('assets/images/resources/about-one-img-2.jpg') }}" alt="">
                            </div>
                            <div class="about-one__experience">
                                <div class="about-one__experience-count">
                                    <h3 class="odometer" data-count="50">00</h3>
                                    <span> </span>
                                </div>
                                <p class="about-one__experience-text">Years of <br>Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div class="section-title text-left sec-title-animation animation-style1">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape">
                                    <img src="{{ asset('assets/images/shapes/section-title-tagline-shape-1.png') }}" alt="">
                                </div>
                                <span class="section-title__tagline">About Quarkcars</span>
                            </div>
                            <h2 class="section-title__title title-animation">Welcome to Quarkcars
                                car booking company</h2>
                        </div>
                        <p class="about-one__text-1">Committed to providing our customers with<br> ultimate service.
                        </p>
                        <p class="about-one__text-2">QuarkCars is a reliable car rental and subscription service in Jaipur offering well-maintained vehicles and affordable pricing. With a focus on customer satisfaction and convenience, we provide flexible plans and smooth booking experience for daily travel, long-term use, and business needs across the city.</p>
                        <ul class="about-one__progress-box list-unstyled">
                            <li>
                                <div class="about-one__progress">
                                    <h4 class="about-one__progress-title">Time Awareness</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="90%">
                                            <div class="count-text">90%</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="about-one__progress">
                                    <h4 class="about-one__progress-title">Driver Experience</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="70%">
                                            <div class="count-text">70%</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="about-one__btn-box-and-call-box">
                            <div class="about-one__btn-box">
                                <a href="{{ route('about') }}" class="about-one__btn thm-btn">Read More<span
                                        class="fas fa-arrow-right"></span></a>
                            </div>
                            <div class="about-one__call-box">
                                <div class="about-one__call-box-icon">
                                    <span class="icon-call-2"></span>
                                </div>
                                <div class="about-one__call-box-content">
                                    <p>Call to Anytime</p>
                                    <h4><a href="tel:918769639911">+91 8769639911</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About One End -->

    <!-- Services One Start -->
    <section class="services-one">
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
            <div class="row">
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
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
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="services-one__single">
                        <div class="services-one__single-shape-1"></div>
                        <div class="services-one__single-shape-2"></div>
                        <div class="services-one__single-shape-3"></div>
                        <div class="services-one__count"></div>
                        <div class="services-one__icon">
                            <span class="icon-taxi"></span>
                        </div>
                        <h3 class="services-one__title"><a href="{{ route('services') }}">Car Sharing</a>
                        </h3>
                        <p class="services-one__text">Earn consistently by sharing your car through a trusted and managed platform.</p>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
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
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="700ms" data-wow-duration="1500ms">
                    <div class="services-one__single">
                        <div class="services-one__single-shape-1"></div>
                        <div class="services-one__single-shape-2"></div>
                        <div class="services-one__single-shape-3"></div>
                        <div class="services-one__count"></div>
                        <div class="services-one__icon">
                            <span class="icon-car-insurance"></span>
                        </div>
                        <h3 class="services-one__title"><a href="{{ route('services') }}">Fleet leasing</a></h3>
                        <p class="services-one__text">Flexible fleet leasing solutions for businesses with reliable and cost-efficient vehicles.</p>
                    </div>
                </div>
                <!--Services One Single End-->
            </div>
        </div>
    </section>
    <!-- Services One End -->

    <!-- Booking One Start -->
    <section class="booking-one">
        <div class="booking-one__wrap">
            <div class="booking-one__bg"
                style="background-image: url({{ asset('assets/images/backgrounds/booking-one-bg.jpg') }});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-5">
                        <div class="booking-one__left">
                            <div class="booking-one__img wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                                <img src="{{ asset('assets/images/resources/booking-one-img-1(1).png') }}" alt="">
                            </div>
                            <div class="booking-one__shape-1 float-bob-x">
                                <img src="{{ asset('assets/images/shapes/booking-one-shape-1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="booking-one__right wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="booking-one__content">
                                <div class="booking-one__title-box">
                                    <div class="booking-one__title-shape"
                                        style="background-image: url({{ asset('assets/images/shapes/book-one-title-shape-1.png') }});">
                                    </div>
                                    <h3 class="booking-one__title">Book a car</h3>
                                </div>
                                <form class="contact-form-validated booking-one__form" action="assets/inc/sendemail.php"
                                    method="post" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="booking-one__input-box">
                                                <p class="booking-one__input-title"> <span class="icon-pin-2"></span> Pickup
                                                </p>
                                                <div class="select-box">
                                                    <select class="selectmenu wide">
                                                        <option selected="selected">Enter a Location</option>
                                                        <option>Jaipur</option>
                                                        <option>Dausa</option>
                                                        <option>Sikar</option>
                                                        <option>Sawai Madhopur</option>
                                                        <option>Ajmer</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="booking-one__input-box">
                                                <p class="booking-one__input-title"> <span class="icon-pin-2"></span> Drop
                                                    of</p>
                                                <div class="select-box">
                                                    <select class="selectmenu wide">
                                                        <option selected="selected">Enter a Location</option>
                                                        <option>Sikar</option>
                                                        <option>Ajmer</option>
                                                        <option>Sawai Madhopur</option>
                                                        <option>Dausa</option>
                                                        <option>Jaipur</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="booking-one__input-box">
                                                <p class="booking-one__input-title"> <span class="icon-cuv"></span>
                                                    Your car type</p>
                                                <div class="select-box">
                                                    <select class="selectmenu wide">
                                                        <option selected="selected">Your Car Type
                                                        </option>
                                                        <option>Your Car Type 01</option>
                                                        <option>Your Car Type 02</option>
                                                        <option>Your Car Type 03</option>
                                                        <option>Your Car Type 04</option>
                                                        <option>Your Car Type 05</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="booking-one__input-box">
                                                <p class="booking-one__input-title"> <span class="icon-date"></span>
                                                    Date</p>
                                                <input type="text" placeholder="mm/dd/yyy" name="date" id="datepicker">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="booking-one__btn-box">
                                                <button type="submit" class="thm-btn">Book Now<span
                                                        class="fas fa-arrow-right"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Booking One End -->

    <!-- Listing One Start -->
    <section class="listing-one">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box justify-content-center">
                    <div class="section-title__tagline-shape">
                        <img src="{{ asset('assets/images/shapes/section-title-tagline-shape-1.png') }}" alt="">
                    </div>
                    <span class="section-title__tagline">Checkout our new cars</span>
                </div>
                <h2 class="section-title__title title-animation">Explore Most Popular Cars</h2>
            </div>
            <div class="listing-one__tab-box listing-one-tabs-box">
                <ul class="listing-one-tab-buttons listing-one-tab-btns clearfix list-unstyled">
                    <li data-tab="#tesla" class="p-tab-btn active-btn"><span>Tesla</span></li>
                    <li data-tab="#honda" class="p-tab-btn"><span>Honda</span></li>
                    <li data-tab="#audi" class="p-tab-btn"><span>Audi</span></li>
                    <li data-tab="#mazda" class="p-tab-btn"><span>Mazda</span></li>
                    <li data-tab="#toyota" class="p-tab-btn"><span>Toyota</span></li>
                    <li data-tab="#acura" class="p-tab-btn"><span>Acura</span></li>
                </ul>
                <div class="p-tabs-content">
                    <!--tab-->
                    <div class="p-tab active-tab" id="tesla">
                        <div class="listing-one__inner">
                            <div class="listing-one__carousel owl-carousel owl-theme">
                                <!-- Listing One Single Start -->
                                <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-1.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Maruti</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('swift-vxi-details') }}">Maruti Swift VXI (O) CNG</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('swift-vxi-details') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-2.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Kia Soul</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('ertiga-vxi-details') }}">Kia Soul
                                                    2025</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('ertiga-vxi-details') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-3.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Audi</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('swift-lxi-details') }}">Audi A3
                                                    2025 New</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('swift-lxi-details') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-4.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Audi</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('mahindra-scorpio-s11-details') }}">Ferrari
                                                    458 MM Speciale</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('mahindra-scorpio-s11-details') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-5.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Acura</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('mahindra-thar-4x4-details') }}">Audi
                                                    Sport
                                                    Version</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('mahindra-thar-4x4-details') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-6.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Toyota</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('hyundai-verna-petrol-details') }}">Toyota
                                                    Tacoma 4WD</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('hyundai-verna-petrol-details') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-2.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Honda</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('hyundai-i20-details') }}">Kia Soul
                                                    2025</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('hyundai-i20-details') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Listing One Single End -->
                            </div>
                        </div>
                    </div>
                    <!--Tab-->
                    <!--tab-->
                    <div class="p-tab" id="honda">
                        <div class="listing-one__inner">
                            <div class="listing-one__carousel owl-carousel owl-theme">
                                <!-- Listing One Single Start -->
                                <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-1.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Acura</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('hyundai-i10-details') }}">Acura
                                                    Sport Version</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('hyundai-i10-details') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-2.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Kia Soul</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('maruti-swift-dzire-details') }}">Kia Soul
                                                    2025</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('maruti-swift-dzire-details') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-3.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Audi</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('aura-cng-details') }}">Audi A3
                                                    2025 New</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('aura-cng-details') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-4.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Audi</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Ferrari
                                                    458 MM Speciale</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-5.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Acura</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Audi
                                                    Sport
                                                    Version</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-6.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Toyota</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Toyota
                                                    Tacoma 4WD</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-2.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Honda</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Kia Soul
                                                    2025</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                            <!-- </div>
                        </div>
                    </div> -->
                    <!--tab-->
                    <!--tab-->
                    <!-- <div class="p-tab" id="audi">
                        <div class="listing-one__inner">
                            <div class="listing-one__carousel owl-carousel owl-theme"> -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-1.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Acura</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Acura
                                                    Sport Version</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-2.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Kia Soul</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Kia Soul
                                                    2025</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-3.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Audi</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Audi A3
                                                    2025 New</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-4.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Audi</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Ferrari
                                                    458 MM Speciale</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-5.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Acura</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Audi
                                                    Sport
                                                    Version</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-6.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Toyota</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Toyota
                                                    Tacoma 4WD</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-2.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Honda</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Kia Soul
                                                    2025</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                            <!-- </div>
                        </div>
                    </div> -->
                    <!--tab-->
                    <!--tab-->
                    <!-- <div class="p-tab" id="mazda">
                        <div class="listing-one__inner">
                            <div class="listing-one__carousel owl-carousel owl-theme"> -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-1.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Acura</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Acura
                                                    Sport Version</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-2.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Kia Soul</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Kia Soul
                                                    2025</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-3.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Audi</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Audi A3
                                                    2025 New</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-4.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Audi</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Ferrari
                                                    458 MM Speciale</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-5.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Acura</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Audi
                                                    Sport
                                                    Version</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-6.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Toyota</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Toyota
                                                    Tacoma 4WD</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-2.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Honda</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Kia Soul
                                                    2025</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                            <!-- </div>
                        </div>
                    </div> -->
                    <!--tab-->
                    <!--tab-->
                    <!-- <div class="p-tab" id="toyota">
                        <div class="listing-one__inner">
                            <div class="listing-one__carousel owl-carousel owl-theme"> -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-1.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Acura</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Acura
                                                    Sport Version</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-2.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Kia Soul</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Kia Soul
                                                    2025</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-3.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Audi</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Audi A3
                                                    2025 New</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-4.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Audi</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Ferrari
                                                    458 MM Speciale</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-5.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Acura</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Audi
                                                    Sport
                                                    Version</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-6.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Toyota</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Toyota
                                                    Tacoma 4WD</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-2.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Honda</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Kia Soul
                                                    2025</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                            <!-- </div>
                        </div>
                    </div> -->
                    <!--tab-->
                    <!--tab-->
                    <!-- <div class="p-tab" id="acura">
                        <div class="listing-one__inner">
                            <div class="listing-one__carousel owl-carousel owl-theme"> -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-1.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Acura</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Acura
                                                    Sport Version</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-2.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Kia Soul</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Kia Soul
                                                    2025</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-3.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Audi</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Audi A3
                                                    2025 New</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-4.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Audi</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Ferrari
                                                    458 MM Speciale</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-5.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Acura</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Audi
                                                    Sport
                                                    Version</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-6.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Toyota</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Toyota
                                                    Tacoma 4WD</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                                <!-- Listing One Single Start -->
                                <!-- <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-2.jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Honda</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('self-drive-car') }}">Kia Soul
                                                    2025</a></h3>
                                            <div class="listing-one__meta-box-info">
                                                <ul class="list-unstyled listing-one__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-manual"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Manual</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-mileage"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>25 KM</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Diesel</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Basic</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 25</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>5 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>$100/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Listing One Single End -->
                            <!-- </div>
                        </div>
                    </div> -->
                    <!--tab-->
                </div>
            </div>
        </div>
    </section>
    <!-- Listing One End -->

    <!-- Team Three Start -->
    <section class="team-three">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box justify-content-center">
                    <div class="section-title__tagline-shape">
                        <img src="{{ asset('assets/images/shapes/section-title-tagline-shape-1.png') }}" alt="">
                    </div>
                    <span class="section-title__tagline">Our Drivers</span>
                </div>
                <h2 class="section-title__title title-animation">Meet Our Premium Drivers</h2>
            </div>
            <div class="row">
                <!-- Team Three Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="team-three__single">
                        <div class="team-three__img-box">
                            <div class="team-three__img">
                                <img src="{{ asset('assets/images/team/team-3-1(1).jpg') }}" alt="">
                                <div class="team-three__social">
                                    <a href="{{ route('driver-details') }}"><i class="icon-facebook"></i></a>
                                    <a href="{{ route('driver-details') }}"><i class="icon-twitter"></i></a>
                                    <a href="{{ route('driver-details') }}"><i class="icon-linkedin"></i></a>
                                    <a href="{{ route('driver-details') }}"><i class="icon-instagram-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-three__content">
                            <h3 class="team-three__name"><a href="{{ route('driver-details') }}">Rishab Rai</a></h3>
                            <p class="team-three__sub-title">SR. Driver</p>
                        </div>
                    </div>
                </div>
                <!-- Team Three Single End -->
                <!-- Team Three Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="team-three__single">
                        <div class="team-three__img-box">
                            <div class="team-three__img">
                                <img src="{{ asset('assets/images/team/team-3-2(1).jpg') }}" alt="">
                                <div class="team-three__social">
                                    <a href="{{ route('driver-details') }}"><i class="icon-facebook"></i></a>
                                    <a href="{{ route('driver-details') }}"><i class="icon-twitter"></i></a>
                                    <a href="{{ route('driver-details') }}"><i class="icon-linkedin"></i></a>
                                    <a href="{{ route('driver-details') }}"><i class="icon-instagram-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-three__content">
                            <h3 class="team-three__name"><a href="{{ route('driver-details') }}">Namo Narayan</a></h3>
                            <p class="team-three__sub-title">Premium Driver</p>
                        </div>
                    </div>
                </div>
                <!-- Team Three Single End -->
                <!-- Team Three Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="team-three__single">
                        <div class="team-three__img-box">
                            <div class="team-three__img">
                                <img src="{{ asset('assets/images/team/team-3-3(1).jpg') }}" alt="">
                                <div class="team-three__social">
                                    <a href="{{ route('driver-details') }}"><i class="icon-facebook"></i></a>
                                    <a href="{{ route('driver-details') }}"><i class="icon-twitter"></i></a>
                                    <a href="{{ route('driver-details') }}"><i class="icon-linkedin"></i></a>
                                    <a href="{{ route('driver-details') }}"><i class="icon-instagram-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-three__content">
                            <h3 class="team-three__name"><a href="{{ route('driver-details') }}">Ankur Vaishnav</a></h3>
                            <p class="team-three__sub-title">JR. Driver</p>
                        </div>
                    </div>
                </div>
                <!-- Team Three Single End -->
                <!-- Team Three Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="team-three__single">
                        <div class="team-three__img-box">
                            <div class="team-three__img">
                                <img src="{{ asset('assets/images/team/team-3-4(1).jpg') }}" alt="">
                                <div class="team-three__social">
                                    <a href="{{ route('driver-details') }}"><i class="icon-facebook"></i></a>
                                    <a href="{{ route('driver-details') }}"><i class="icon-twitter"></i></a>
                                    <a href="{{ route('driver-details') }}"><i class="icon-linkedin"></i></a>
                                    <a href="{{ route('driver-details') }}"><i class="icon-instagram-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-three__content">
                            <h3 class="team-three__name"><a href="{{ route('driver-details') }}">Shree Ram Meena</a></h3>
                            <p class="team-three__sub-title">SR. Driver</p>
                        </div>
                    </div>
                </div>
                <!-- Team Three Single End -->
            </div>
        </div>
    </section>
    <!-- Team Three End -->

    <!-- Testimonial Two Start -->
    <section class="testimonial-two">
        <div class="testimonial-two__shape-1 float-bob-y">
            <img src="{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}" alt="">
        </div>
        <div class="testimonial-two__shape-2 float-bob-x">
            <img src="{{ asset('assets/images/shapes/testimonial-two-shape-2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="section-title text-left sec-title-animation animation-style2">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape">
                        <img src="{{ asset('assets/images/shapes/section-title-tagline-shape-1.png') }}" alt="">
                    </div>
                    <span class="section-title__tagline">Testimonials</span>
                </div>
                <h2 class="section-title__title title-animation">What Peoples Say <br>
                    about Gorent</h2>
            </div>
            <div class="testimonial-two__carousel owl-carousel owl-theme">
                <!-- Testimonial Two Single Start -->
                <div class="item">
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__quote">
                            <span class="icon-quote"></span>
                        </div>
                        <div class="testimonial-two__img">
                            <img src="{{ asset('assets/images/testimonial/testimonial-1-1(1).jpg') }}" alt="">
                        </div>
                        <p class="testimonial-two__text">Honestly the best self-drive service I ve used booking was easy the car felt like new and support was responsive will book again.</p>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">Ramakant Bohara</a>
                                </h4>
                                <p class="testimonial-two__client-sub-title">Customer</p>
                            </div>
                            <div class="testimonial-two__rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Two Single End -->
                <!-- Testimonial Two Single Start -->
                <div class="item">
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__quote">
                            <span class="icon-quote"></span>
                        </div>
                        <div class="testimonial-two__img">
                            <img src="{{ asset('assets/images/testimonial/testimonial-1-2(1).jpg') }}" alt="">
                        </div>
                        <p class="testimonial-two__text">I rented a car on a very short notice, and what a smooth process we had here, within max to max 10 min we were provided with the car, and the car was really well maintained. Must try, respect++ for Quarkcars Rental Services.</p>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">Amit M</a></h4>
                                <p class="testimonial-two__client-sub-title">Customer</p>
                            </div>
                            <div class="testimonial-two__rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Two Single End -->
                <!-- Testimonial Two Single Start -->
                <div class="item">
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__quote">
                            <span class="icon-quote"></span>
                        </div>
                        <div class="testimonial-two__img">
                            <img src="{{ asset('assets/images/testimonial/testimonial-1-3(1).jpg') }}" alt="">
                        </div>
                        <p class="testimonial-two__text">"Quarkcars is the best self - drive Car rental in jaipur. Clean cars affordable rates,and hassle - free booking make every Trip comfortable and reliable"</p>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">Pawan Saini</a>
                                </h4>
                                <p class="testimonial-two__client-sub-title">Customer</p>
                            </div>
                            <div class="testimonial-two__rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Two Single End -->
                <!-- Testimonial Two Single Start -->
                <div class="item">
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__quote">
                            <span class="icon-quote"></span>
                        </div>
                        <div class="testimonial-two__img">
                            <img src="{{ asset('assets/images/testimonial/testimonial-1-4(1).jpg') }}" alt="">
                        </div>
                        <p class="testimonial-two__text">Quarkcars rental jaipur  my driver, showcasing exceptional skills behind the wheel. The prices were reasonable, in line with city standards. He drove me to …"</p>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">Shambhu Saini</a></h4>
                                <p class="testimonial-two__client-sub-title">Customer</p>
                            </div>
                            <div class="testimonial-two__rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Two Single End -->
                <!-- Testimonial Two Single Start -->
                <div class="item">
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__quote">
                            <span class="icon-quote"></span>
                        </div>
                        <div class="testimonial-two__img">
                            <img src="{{ asset('assets/images/testimonial/testimonial-1-5(1).jpg') }}" alt="">
                        </div>
                        <p class="testimonial-two__text">Quarkcars is the best choice for rental in jaipur. Hassle-free service great cars and very reasonable rates thanks for Quarkcars.</p>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">Nitin Yadav</a></h4>
                                <p class="testimonial-two__client-sub-title">Customer</p>
                            </div>
                            <div class="testimonial-two__rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Two Single End -->
                <!-- Testimonial Two Single Start -->
                <div class="item">
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__quote">
                            <span class="icon-quote"></span>
                        </div>
                        <div class="testimonial-two__img">
                            <img src="{{ asset('assets/images/testimonial/testimonial-1-6(1).jpg') }}" alt="">
                        </div>
                        <p class="testimonial-two__text">I needed a car urgently for business travel and Quarkcars arranged everything within a short time. The car was in perfect condition and drove smoothly. The team is very supportive and professional. Highly recommend for commercial car rental in Jaipur.</p>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">Priyanshi Jain</a></h4>
                                <p class="testimonial-two__client-sub-title">Customer</p>
                            </div>
                            <div class="testimonial-two__rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Two Single End -->
            </div>
        </div>
    </section>
    <!-- Testimonial Two End -->

    <!--Lets Talk Start -->
    <section class="lets-talk">
        <div class="lets-talk__bg"
            style="background-image: url({{ asset('assets/images/backgrounds/lets-talk-bg.jpg') }});"></div>
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

    <!--Blog One Start-->
    <section class="blog-one">
        <div class="blog-one__shape-1"></div>
        <div class="blog-one__shape-2"></div>
        <div class="container">
            <div class="section-title text-left sec-title-animation animation-style2">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape">
                        <img src="{{ asset('assets/images/shapes/section-title-tagline-shape-1.png') }}" alt="">
                    </div>
                    <span class="section-title__tagline">Our Blog</span>
                </div>
                <h2 class="section-title__title title-animation">Our Latest Blog</h2>
            </div>
            <div class="blog-one__carousel owl-carousel owl-theme">
                <!--Blog One Single Start-->
                <div class="item">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="{{ asset('assets/images/blog/blog-1-1(1).png') }}" alt="">
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
                <div class="item">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="{{ asset('assets/images/blog/blog-1-2(1).png') }}" alt="">
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
                <div class="item">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="{{ asset('assets/images/blog/blog-1-3(1).png') }}" alt="">
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
                <div class="item">
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
                            <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Rental cars how to check
                                    driving
                                    fines?</a></h3>
                            <p class="blog-one__text">Car Is Where Early Adopters And Innovation Seekers Find Lively
                                Imaginative Tech.</p>
                            <a href="{{ route('blog-details') }}" class="blog-one__read-more">Read More <span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="item">
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
                            <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">How to Rent a Car at the
                                    Airport
                                    Terminal?</a></h3>
                            <p class="blog-one__text">Car Is Where Early Adopters And Innovation Seekers Find Lively
                                Imaginative Tech.</p>
                            <a href="{{ route('blog-details') }}" class="blog-one__read-more">Read More <span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="item">
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
                            <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Penalties for violating the
                                    rules in rental cars</a></h3>
                            <p class="blog-one__text">Car Is Where Early Adopters And Innovation Seekers Find Lively
                                Imaginative Tech.</p>
                            <a href="{{ route('blog-details') }}" class="blog-one__read-more">Read More <span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
            </div>
        </div>
    </section>
    <!--Blog One End-->

    <!--Gallery One Start -->
    <section class="gallery-one">
        <div class="gallery-one__carousel owl-theme owl-carousel">
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-1(2).png') }}" alt="">
                        <a href="{{ route('self-drive-car') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-2(2).png') }}" alt="">
                        <a href="{{ route('self-drive-car') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-3(2).png') }}" alt="">
                        <a href="{{ route('cart') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-4(2).png') }}" alt="">
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
                        <img src="{{ asset('assets/images/gallery/gallery-1-6(2).png') }}" alt="">
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
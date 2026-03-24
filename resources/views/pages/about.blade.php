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
                                <img src="{{ asset('assets/images/shapes/about-one-shape-2.png') }}" alt="">
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
                                <img src="{{ asset('assets/images/resources/about-one-img-2(1).jpg') }}" alt="">
                            </div>
                            <div class="about-one__experience">
                                <div class="about-one__experience-count">
                                    <h3 class="odometer" data-count="3">3</h3>
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
                        <p class="about-one__text-2">Quarkcars provides seamless car booking with a focus on quality, safety, and customer satisfaction. We make every ride comfortable, reliable, and hassle-free for our customers.</p>
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
                style="background-image: url({{ asset('assets/images/backgrounds/booking-one-bg(1).jpg') }});"></div>
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
                                                        <option>Enter a Location 01</option>
                                                        <option>Enter a Location 02</option>
                                                        <option>Enter a Location 03</option>
                                                        <option>Enter a Location 04</option>
                                                        <option>Enter a Location 05</option>
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
                                                        <option>Enter a Location 01</option>
                                                        <option>Enter a Location 02</option>
                                                        <option>Enter a Location 03</option>
                                                        <option>Enter a Location 04</option>
                                                        <option>Enter a Location 05</option>
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
                    <li data-tab="#tesla" class="p-tab-btn active-btn"><span>Maruti</span></li>
                    <li data-tab="#honda" class="p-tab-btn"><span>Mahindra</span></li>
                    <li data-tab="#audi" class="p-tab-btn"><span>Hyundai</span></li>
                    <li data-tab="#mazda" class="p-tab-btn"><span>Toyota</span></li>
                    <li data-tab="#toyota" class="p-tab-btn"><span>Aura</span></li>
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
                                            <img src="{{ asset('assets/images/listing/listing-1-1(1).jpg') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Maruti</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Maruti Swift VXI (O) CNG</a></h3>
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
                                                            <p>32 KM/Kg</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>CNG</p>
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
                                                            <p>Age 21</p>
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
                                                    <span>2800 INR/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <img src="{{ asset('assets/images/listing/listing-1-2(1).png') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Maruti</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Maruti Ertiga VXI CNG</a></h3>
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
                                                            <p>26 KM/KG</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>CNG</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>MPV</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 21</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>7 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>3500 INR/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <img src="{{ asset('assets/images/listing/listing-3-3(1).png') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Maruti</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Maruti Swift LXI</a></h3>
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
                                                            <p>23 KM/L</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Petrol</p>
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
                                                            <p>Age 21</p>
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
                                                    <span>2500 INR/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <img src="{{ asset('assets/images/listing/listing-3-4(1).png') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Mahindra</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Mahindra Scorpio S11</a></h3>
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
                                                            <p>18 KM/L</p>
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
                                                            <p>SUV</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 21</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>7 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>5500 INR/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <img src="{{ asset('assets/images/listing/listing-1-5(1).png') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Mahindra</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Mahindra Thar 4x4 Diesel</a></h3>
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
                                                            <p>18 KM/L</p>
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
                                                            <p>SUV</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 21</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-in-person"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>4 Persons</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-one__car-rent-box">
                                                <p class="listing-one__car-rent">Starting From
                                                    <span>5000 INR/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <img src="{{ asset('assets/images/listing/listing-3-6(1).png') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Hyundai</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Hyundai Verna Petrol</a></h3>
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
                                                            <p>13 KM/L</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Petrol</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Sedan</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 21</p>
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
                                                    <span>4500 INR/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <img src="{{ asset('assets/images/listing/listing-1-6(1).png') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Hyundai</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Hyundai i20</a></h3>
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
                                                            <p>20 KM/L</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Petrol</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Hatchback</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 21</p>
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
                                                    <span>2800 INR/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-7(1).png') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Hyundai</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Hyundai i10</a></h3>
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
                                                            <p>19 KM/L</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Petrol</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Hatchback</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 21</p>
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
                                                    <span>2500 INR/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-8(1).png') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Maruti</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Maruti Swift Dzire</a></h3>
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
                                                            <p>22 KM/L</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Petrol</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Hatchback</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 21</p>
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
                                                    <span>2700 INR/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 <div class="item">
                                    <div class="listing-one__single">
                                        <div class="listing-one__img">
                                            <img src="{{ asset('assets/images/listing/listing-1-9(1).png') }}" alt="">
                                            <div class="listing-one__brand-name">
                                                <p>Hyundai</p>
                                            </div>
                                        </div>
                                        <div class="listing-one__content">
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Aura CNG</a></h3>
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
                                                            <p>25 KM/L</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-fuel-type"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>CNG</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-test-drive"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Sedan</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-avatar"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Age 21</p>
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
                                                    <span>2500 INR/</span> Day
                                                </p>
                                            </div>
                                            <div class="listing-one__btn-box">
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Acura
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Kia Soul
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Audi A3
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Ferrari
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Audi
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Toyota
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Kia Soul
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Listing One Single End -->
                            </div>
                        </div>
                    </div>
                    <!--tab-->
                    <!--tab-->
                    <div class="p-tab" id="audi">
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Acura
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Kia Soul
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Audi A3
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Ferrari
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Audi
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Toyota
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Kia Soul
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Listing One Single End -->
                            </div>
                        </div>
                    </div>
                    <!--tab-->
                    <!--tab-->
                    <div class="p-tab" id="mazda">
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Acura
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Kia Soul
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Audi A3
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Ferrari
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Audi
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Toyota
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Kia Soul
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Listing One Single End -->
                            </div>
                        </div>
                    </div>
                    <!--tab-->
                    <!--tab-->
                    <div class="p-tab" id="toyota">
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Acura
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Kia Soul
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Audi A3
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Ferrari
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Audi
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Toyota
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Kia Soul
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Listing One Single End -->
                            </div>
                        </div>
                    </div>
                    <!--tab-->
                    <!--tab-->
                    <div class="p-tab" id="acura">
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Acura
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Kia Soul
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Audi A3
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Ferrari
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Audi
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Toyota
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
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
                                            <h3 class="listing-one__title"><a href="{{ route('listing-single') }}">Kia Soul
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
                                                <a href="{{ route('listing-single') }}" class="thm-btn">Details Now<span
                                                        class="fas fa-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Listing One Single End -->
                            </div>
                        </div>
                    </div>
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
                                <img src="{{ asset('assets/images/team/team-3-1.jpg') }}" alt="">
                                <div class="team-three__social">
                                    <a href="{{ route('driver-details') }}"><i class="icon-facebook"></i></a>
                                    <a href="{{ route('driver-details') }}"><i class="icon-twitter"></i></a>
                                    <a href="{{ route('driver-details') }}"><i class="icon-linkedin"></i></a>
                                    <a href="{{ route('driver-details') }}"><i class="icon-instagram-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-three__content">
                            <h3 class="team-three__name"><a href="{{ route('driver-details') }}">Rishabh</a></h3>
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
                                <img src="{{ asset('assets/images/team/team-3-2.jpg') }}" alt="">
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
                                <img src="{{ asset('assets/images/team/team-3-3.jpg') }}" alt="">
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
                                <img src="{{ asset('assets/images/team/team-3-4.jpg') }}" alt="">
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
                    about Quarkcars</h2>
            </div>
            <div class="testimonial-two__carousel owl-carousel owl-theme">
                <!-- Testimonial Two Single Start -->
                <div class="item">
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__quote">
                            <span class="icon-quote"></span>
                        </div>
                        <div class="testimonial-two__img">
                            <img src="{{ asset('assets/images/testimonial/testimonial-2-1.jpg') }}" alt="">
                        </div>
                        <p class="testimonial-two__text">“One of the best car rental in jaipur at good affordable price. Security deposit refund was also hassle free and instant. We rented thar and it was new and in very good condition. And to add to it the owner was very friendly and had good response”</p>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">Basavaraj Raga</a>
                                </h4>
                                <p class="testimonial-two__client-sub-title">Customer</p>
                                <br>
                                <br>
                                <br>
                                <br>
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
                            <img src="{{ asset('assets/images/testimonial/testimonial-2-2.jpg') }}" alt="">
                        </div>
                        <p class="testimonial-two__text">Nice services great hospitality specially Dipak Ji very helping person I’ve rented grand I10 this month the car condition is excellent keep it up 👍🏻 …</p>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">Arshad Khan</a></h4>
                                <p class="testimonial-two__client-sub-title">Customer</p>
                                 <br>
                                 <br>
                                 <br>
                                 <br>
                                 <br>
                                 <br>
                                 
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
                            <img src="{{ asset('assets/images/testimonial/testimonial-2-3.jpg') }}" alt="">
                        </div>
                        <p class="testimonial-two__text">Nice enlightened service both the dealer and car owners were so good. The car was brand new and the price point was also the lowest...Thanks to them and will recommend you guys to get a service from here.</p>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">Mayank Singh</a>
                                </h4>
                                <p class="testimonial-two__client-sub-title">Senior Consultant</p>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                

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
                            <img src="{{ asset('assets/images/testimonial/testimonial-2-4.jpg') }}" alt="">
                        </div>
                        <p class="testimonial-two__text">Had a great experience with a self-drive car rental in Jaipur. The car was clean, well-maintained, and the process was smooth from pickup to drop.
                        Deepak, the contact person, was very kind and helpful throughout. Highly recommended for a hassle-free trip..!</p>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">akshay chauhan</a></h4>
                                <p class="testimonial-two__client-sub-title">Customer</p>
                                <br>
                                <br>
                                <br>
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
                            <img src="{{ asset('assets/images/testimonial/testimonial-2-5.jpg') }}" alt="">
                        </div>
                        <p class="testimonial-two__text">Affordable, reliable, and professional — that’s how I would describe Quarkcars. The team ensures complete customer satisfaction and makes the rental process very simple. Whether you need a short-term or long-term rental, they are the best car rental agency in Jaipur.</p>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">Samyak Jain</a></h4>
                                <p class="testimonial-two__client-sub-title">Customer</p>
                                <br>
                                <br>
                                
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
                            <img src="{{ asset('assets/images/testimonial/testimonial-2-6.jpg') }}" alt="">
                        </div>
                        <p class="testimonial-two__text">I had an amazing experience with Quarkcars – Mobility in Jaipur. The car was super clean, well-maintained, and delivered exactly on time. The booking process was very smooth and transparent with no hidden charges. Their team was professional and polite throughout. If you are looking for a reliable self-drive car rental in Jaipur, this is the best choice. Highly recommended!</p>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">Lakshay Jain</a></h4>
                                <p class="testimonial-two__client-sub-title">Auto Dealer</p>
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
        <!-- <div class="lets-talk__bg"
            style="background-image: url({{ asset('assets/images/backgrounds/lets-talk-bg(1).jpg') }});"></div> -->
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
                            <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Documents required for car
                                    rental services</a></h3>
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
                            <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">One of the most effective car
                                    rental
                                    blog topic</a></h3>
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
                            <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Rental cost of sport and other
                                    cars</a></h3>
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
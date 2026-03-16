@extends('layouts.layout2')
@section('title', 'Home Two || Gorent || Gorent Laravel  Template')

@section('content')

    <!-- Main Slider Two Start -->
    <section class="main-slider-two">
        <div class="main-slider-two__carousel owl-carousel owl-theme">

            <div class="item">
                <div class="main-slider-two__bg"
                    style="background-image: url({{ asset('assets/images/backgrounds/slider-2-1.jpg') }});">
                </div><!-- /.slider-one__bg -->
                <div class="main-slider-two__overly"></div>
                <div class="main-slider-two__img">
                    <img src="{{ asset('assets/images/resources/main-slider-img-1.png') }}" alt="" class="float-bob-y">
                </div>
                <div class="container">
                    <div class="main-slider-two__content">
                        <div class="main-slider-two__sub-title-box">
                            <p class="main-slider-two__sub-title">We make finding the right car simple</p>
                        </div>
                        <h2 class="main-slider-two__title">Your Best Car <br> <span>Rental</span> Experience</h2>
                        <p class="main-slider-two__text">Lorem ipsum is simply ipun txns mane so dummy text of free
                            <br>
                            available in market the printing and typesetting industry
                        </p>
                        <div class="main-slider-two__btn-box">
                            <a href="{{ route('contact') }}">
                                <div class="main-slider-two__btn-icon">
                                    <i class="fab fa-google-play"></i>
                                </div>
                                <div class="main-slider-two__btn-content">
                                    <p>Get It On</p>
                                    <h3>Google Play</h3>
                                </div>
                            </a>
                            <a href="{{ route('contact') }}">
                                <div class="main-slider-two__btn-icon">
                                    <i class="fab fa-apple"></i>
                                </div>
                                <div class="main-slider-two__btn-content">
                                    <p>Download on the</p>
                                    <h3>App Store</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="main-slider-two__bg"
                    style="background-image: url({{ asset('assets/images/backgrounds/slider-2-2.jpg') }});">
                </div><!-- /.slider-one__bg -->
                <div class="main-slider-two__overly"></div>
                <div class="main-slider-two__img">
                    <img src="{{ asset('assets/images/resources/main-slider-img-2.png') }}" alt="" class="float-bob-y">
                </div>
                <div class="container">
                    <div class="main-slider-two__content">
                        <div class="main-slider-two__sub-title-box">
                            <p class="main-slider-two__sub-title">We make finding the right car simple</p>
                        </div>
                        <h2 class="main-slider-two__title">Find What Are You <br> <span>Looking</span> For</h2>
                        <p class="main-slider-two__text">Lorem ipsum is simply ipun txns mane so dummy text of free
                            <br>
                            available in market the printing and typesetting industry
                        </p>
                        <div class="main-slider-two__btn-box">
                            <a href="{{ route('contact') }}">
                                <div class="main-slider-two__btn-icon">
                                    <i class="fab fa-google-play"></i>
                                </div>
                                <div class="main-slider-two__btn-content">
                                    <p>Get It On</p>
                                    <h3>Google Play</h3>
                                </div>
                            </a>
                            <a href="{{ route('contact') }}">
                                <div class="main-slider-two__btn-icon">
                                    <i class="fab fa-apple"></i>
                                </div>
                                <div class="main-slider-two__btn-content">
                                    <p>Download on the</p>
                                    <h3>App Store</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="main-slider-two__bg"
                    style="background-image: url({{ asset('assets/images/backgrounds/slider-2-3.jpg') }});">
                </div><!-- /.slider-one__bg -->
                <div class="main-slider-two__overly"></div>
                <div class="main-slider-two__img">
                    <img src="{{ asset('assets/images/resources/main-slider-img-3.png') }}" alt="" class="float-bob-y">
                </div>
                <div class="container">
                    <div class="main-slider-two__content">
                        <div class="main-slider-two__sub-title-box">
                            <p class="main-slider-two__sub-title">We make finding the right car simple</p>
                        </div>
                        <h2 class="main-slider-two__title">Your Best Car <br> <span>Booking</span> Experience</h2>
                        <p class="main-slider-two__text">Lorem ipsum is simply ipun txns mane so dummy text of free
                            <br>
                            available in market the printing and typesetting industry
                        </p>
                        <div class="main-slider-two__btn-box">
                            <a href="{{ route('contact') }}">
                                <div class="main-slider-two__btn-icon">
                                    <i class="fab fa-google-play"></i>
                                </div>
                                <div class="main-slider-two__btn-content">
                                    <p>Get It On</p>
                                    <h3>Google Play</h3>
                                </div>
                            </a>
                            <a href="{{ route('contact') }}">
                                <div class="main-slider-two__btn-icon">
                                    <i class="fab fa-apple"></i>
                                </div>
                                <div class="main-slider-two__btn-content">
                                    <p>Download on the</p>
                                    <h3>App Store</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!--Main Slider Two Start -->

    <!--Booking Two Start -->
    <section class="booking-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="booking-two__left">
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
                                            <p class="booking-one__input-title"> <span class="icon-pin-2"></span>
                                                Pickup</p>
                                            <div class="select-box">
                                                <select class="selectmenu wide">
                                                    <option selected>Enter a Location</option>
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
                                            <p class="booking-one__input-title"> <span class="icon-pin-2"></span>
                                                Drop of</p>
                                            <div class="select-box">
                                                <select class="selectmenu wide">
                                                    <option selected>Enter a Location</option>
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
                                                    <option selected>Your Car Type
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
                <div class="col-xl-5 col-lg-6">
                    <div class="booking-two__right">
                        <div class="booking-two__img reveal">
                            <img src="{{ asset('assets/images/resources/booking-two-img-1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Booking Two Start -->

    <!--About Two Start -->
    <section class="about-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-two__left">
                        <div class="section-title text-left sec-title-animation animation-style1">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape">
                                    <img src="{{ asset('assets/images/shapes/section-title-tagline-shape-1.png') }}" alt="">
                                </div>
                                <span class="section-title__tagline">About Gorent</span>
                            </div>
                            <h2 class="section-title__title title-animation">Welcome to Gorent
                                car booking company</h2>
                        </div>
                        <p class="about-two__text-1">Lorem ipsum is simply ipun txns mane so dummy text of free
                            available in market the printing and typesetting industry has been the industry's
                            standard dummy text ever.</p>
                        <ul class="about-two__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-checked"></span>
                                </div>
                                <p>Sports and Luxury Cars</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-checked"></span>
                                </div>
                                <p>Economy Cars</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-checked"></span>
                                </div>
                                <p>Best Car Rental Services</p>
                            </li>
                        </ul>
                        <div class="about-two__progress-box">
                            <div class="about-two__progress-single">
                                <div class="graph-outer">
                                    <input type="text" class="dial" data-fgcolor="#FFB51D" data-bgcolor="#131222"
                                        data-width="90" data-height="90" data-linecap="normal" value="95">
                                    <div class="inner-text count-box"><span class="count-text" data-stop="95"
                                            data-speed="2000"></span><span class="count-Parsent">%</span>
                                    </div>
                                </div>
                                <div class="about-two__progress-text-box">
                                    <h4>Saticfied Clients</h4>
                                </div>
                            </div>
                            <div class="about-two__progress-single">
                                <div class="graph-outer">
                                    <input type="text" class="dial" data-fgcolor="#FFB51D" data-bgcolor="#131222"
                                        data-width="90" data-height="90" data-linecap="normal" value="98">
                                    <div class="inner-text count-box"><span class="count-text" data-stop="98"
                                            data-speed="2000"></span><span class="count-Parsent">%</span>
                                    </div>
                                </div>
                                <div class="about-two__progress-text-box">
                                    <h4>Success Rate</h4>
                                </div>
                            </div>
                        </div>
                        <div class="about-two__btn-box-and-call-box">
                            <div class="about-two__btn-box">
                                <a href="{{ route('about') }}" class="about-two__btn thm-btn">Read More<span
                                        class="fas fa-arrow-right"></span></a>
                            </div>
                            <div class="about-two__call-box">
                                <div class="about-two__call-box-icon">
                                    <span class="icon-call-2"></span>
                                </div>
                                <div class="about-two__call-box-content">
                                    <p>Call to Anytime</p>
                                    <h4><a href="tel:15502505260"> 1 (550) 250 5260</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-two__right wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-two__img-box">
                            <div class="about-two__img">
                                <img src="{{ asset('assets/images/resources/about-two-img-1.jpg') }}" alt="">
                            </div>
                            <div class="about-two__img-two">
                                <img src="{{ asset('assets/images/resources/about-two-img-2.jpg') }}" alt="">
                            </div>
                            <div class="about-two__video-link">
                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                    <div class="about-two__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="about-two__experience">
                                <div class="about-two__experience-count">
                                    <h3 class="odometer" data-count="50">00</h3>
                                    <span> </span>
                                </div>
                                <p class="about-two__experience-text">Years of <br>Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Two End -->

    <!-- Services Two Start -->
    <section class="services-two">
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
            <div class="row">
                <!--Services Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
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
                </div>
                <!--Services Two Single End-->
                <!--Services Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
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
                </div>
                <!--Services Two Single End-->
                <!--Services Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
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
                </div>
                <!--Services Two Single End-->
                <!--Services Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
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
                </div>
                <!--Services Two Single End-->
            </div>
        </div>
    </section>
    <!-- Services Two End -->

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
                <li>
                    <h2 data-hover="Worldwide" class="sliding-text__title">Worldwide
                        <span class="icon-jeep"></span>
                    </h2>
                </li>
                <li>
                    <h2 data-hover="Affordable" class="sliding-text__title">Affordable
                        <span class="icon-cuv"></span>
                    </h2>
                </li>
            </ul>
        </div>
    </section>
    <!-- Sliding Text One End -->

    <!-- Process One Start -->
    <section class="process-one process-two">
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
                        <div class="process-one__single-bg"
                            style="background-image: url({{ asset('assets/images/backgrounds/process-one-single-bg-1.jpg') }});">
                        </div>
                        <div class="process-one__icon-box">
                            <div class="process-one__icon-shape"></div>
                            <div class="process-one__icon">
                                <span class="icon-car-wash"></span>
                            </div>
                            <div class="process-one__count"></div>
                        </div>
                        <h3 class="process-one__title">Choose A Car</h3>
                        <p class="process-one__text">Open multipy a green form lesser their from in made herb
                            multiply</p>
                    </div>
                </div>
                <!-- Process One Single End -->
                <!-- Process One Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="process-one__single">
                        <div class="process-one__single-bg"
                            style="background-image: url({{ asset('assets/images/backgrounds/process-one-single-bg-2.jpg') }});">
                        </div>
                        <div class="process-one__icon-box">
                            <div class="process-one__icon-shape"></div>
                            <div class="process-one__icon">
                                <span class="icon-in-person"></span>
                            </div>
                            <div class="process-one__count"></div>
                        </div>
                        <h3 class="process-one__title">Come In Contact</h3>
                        <p class="process-one__text">Open multipy a green form lesser their from in made herb
                            multiply</p>
                    </div>
                </div>
                <!-- Process One Single End -->
                <!-- Process One Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
                    <div class="process-one__single">
                        <div class="process-one__single-bg"
                            style="background-image: url({{ asset('assets/images/backgrounds/process-one-single-bg-3.jpg') }});">
                        </div>
                        <div class="process-one__icon-box">
                            <div class="process-one__icon-shape"></div>
                            <div class="process-one__icon">
                                <span class="icon-car-insurance"></span>
                            </div>
                            <div class="process-one__count"></div>
                        </div>
                        <h3 class="process-one__title">Pick-Up Locations</h3>
                        <p class="process-one__text">Open multipy a green form lesser their from in made herb
                            multiply</p>
                    </div>
                </div>
                <!-- Process One Single End -->
                <!-- Process One Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="700ms" data-wow-duration="1500ms">
                    <div class="process-one__single">
                        <div class="process-one__single-bg"
                            style="background-image: url({{ asset('assets/images/backgrounds/process-one-single-bg-4.jpg') }});">
                        </div>
                        <div class="process-one__icon-box">
                            <div class="process-one__icon-shape"></div>
                            <div class="process-one__icon">
                                <span class="icon-steering-wheel"></span>
                            </div>
                            <div class="process-one__count"></div>
                        </div>
                        <h3 class="process-one__title">Enjoy Driving</h3>
                        <p class="process-one__text">Open multipy a green form lesser their from in made herb
                            multiply</p>
                    </div>
                </div>
                <!-- Process One Single End -->
            </div>
        </div>
    </section>
    <!-- Process One End -->

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

    <!-- Counter Two Start -->
    <section class="counter-two">
        <div class="container">
            <div class="counter-two__inner">
                <ul class="list-unstyled counter-two__list">
                    <li class="wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="counter-two__single">
                            <div class="counter-two__shape-1"></div>
                            <div class="counter-two__shape-2"></div>
                            <div class="counter-two__single-inner">
                                <div class="counter-two__icon">
                                    <span class="icon-car"></span>
                                </div>
                                <div class="counter-two__count-box">
                                    <h3 class="odometer" data-count="1000">00</h3>
                                    <span> </span>
                                </div>
                                <p class="counter-two__count-text">Vehicle fleet</p>
                            </div>
                        </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="counter-two__single">
                            <div class="counter-two__shape-1"></div>
                            <div class="counter-two__shape-2"></div>
                            <div class="counter-two__single-inner">
                                <div class="counter-two__icon">
                                    <span class="icon-mileage"></span>
                                </div>
                                <div class="counter-two__count-box">
                                    <h3 class="odometer" data-count="10">00</h3>
                                    <span>M </span>
                                </div>
                                <p class="counter-two__count-text">Miles of drive</p>
                            </div>
                        </div>
                    </li>
                    <li class="wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="counter-two__single">
                            <div class="counter-two__shape-1"></div>
                            <div class="counter-two__shape-2"></div>
                            <div class="counter-two__single-inner">
                                <div class="counter-two__icon">
                                    <span class="icon-range"></span>
                                </div>
                                <div class="counter-two__count-box">
                                    <h3 class="odometer" data-count="15">00</h3>
                                    <span>K </span>
                                </div>
                                <p class="counter-two__count-text">Booking reserved</p>
                            </div>
                        </div>
                    </li>
                    <li class="wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="counter-two__single">
                            <div class="counter-two__shape-1"></div>
                            <div class="counter-two__shape-2"></div>
                            <div class="counter-two__single-inner">
                                <div class="counter-two__icon">
                                    <span class="icon-pin-2"></span>
                                </div>
                                <div class="counter-two__count-box">
                                    <h3 class="odometer" data-count="50">00</h3>
                                    <span>K </span>
                                </div>
                                <p class="counter-two__count-text">Pickup & drop</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Counter Two End -->

    <!-- Listing Two Start -->
    <section class="listing-two">
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
            <div class="listing-two__carousel owl-theme owl-carousel">
                <!-- Listing Two Single Start -->
                <div class="item">
                    <div class="listing-two__single">
                        <div class="listing-two__img-box">
                            <div class="listing-two__img">
                                <img src="{{ asset('assets/images/listing/listing-2-1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="listing-two__content">
                            <p class="listing-two__sub-title">economy</p>
                            <h3 class="listing-two__title"><a href="{{ route('listing-single') }}">Tesla S-Line Upon</a>
                            </h3>
                            <div class="listing-two__price-and-btn">
                                <div class="listing-two__price-box">
                                    <span>From</span>
                                    <p>$180,00 /day</p>
                                </div>
                                <div class="listing-two__btn-box">
                                    <a href="{{ route('listing-single') }}" class="thm-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing Two Single End -->
                <!-- Listing Two Single Start -->
                <div class="item">
                    <div class="listing-two__single">
                        <div class="listing-two__img-box">
                            <div class="listing-two__img">
                                <img src="{{ asset('assets/images/listing/listing-2-2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="listing-two__content">
                            <p class="listing-two__sub-title">economy</p>
                            <h3 class="listing-two__title"><a href="{{ route('listing-single') }}">Tesla S-Line Upon</a>
                            </h3>
                            <div class="listing-two__price-and-btn">
                                <div class="listing-two__price-box">
                                    <span>From</span>
                                    <p>$180,00 /day</p>
                                </div>
                                <div class="listing-two__btn-box">
                                    <a href="{{ route('listing-single') }}" class="thm-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing Two Single End -->
                <!-- Listing Two Single Start -->
                <div class="item">
                    <div class="listing-two__single">
                        <div class="listing-two__img-box">
                            <div class="listing-two__img">
                                <img src="{{ asset('assets/images/listing/listing-2-3.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="listing-two__content">
                            <p class="listing-two__sub-title">economy</p>
                            <h3 class="listing-two__title"><a href="{{ route('listing-single') }}">BMW 640 XI Gran</a>
                            </h3>
                            <div class="listing-two__price-and-btn">
                                <div class="listing-two__price-box">
                                    <span>From</span>
                                    <p>$180,00 /day</p>
                                </div>
                                <div class="listing-two__btn-box">
                                    <a href="{{ route('listing-single') }}" class="thm-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing Two Single End -->
                <!-- Listing Two Single Start -->
                <div class="item">
                    <div class="listing-two__single">
                        <div class="listing-two__img-box">
                            <div class="listing-two__img">
                                <img src="{{ asset('assets/images/listing/listing-2-4.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="listing-two__content">
                            <p class="listing-two__sub-title">economy</p>
                            <h3 class="listing-two__title"><a href="{{ route('listing-single') }}">Maserati Ghibli SQ4</a>
                            </h3>
                            <div class="listing-two__price-and-btn">
                                <div class="listing-two__price-box">
                                    <span>From</span>
                                    <p>$180,00 /day</p>
                                </div>
                                <div class="listing-two__btn-box">
                                    <a href="{{ route('listing-single') }}" class="thm-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing Two Single End -->
                <!-- Listing Two Single Start -->
                <div class="item">
                    <div class="listing-two__single">
                        <div class="listing-two__img-box">
                            <div class="listing-two__img">
                                <img src="{{ asset('assets/images/listing/listing-2-5.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="listing-two__content">
                            <p class="listing-two__sub-title">economy</p>
                            <h3 class="listing-two__title"><a href="{{ route('listing-single') }}">Audi A4 1.8 TFSI</a>
                            </h3>
                            <div class="listing-two__price-and-btn">
                                <div class="listing-two__price-box">
                                    <span>From</span>
                                    <p>$180,00 /day</p>
                                </div>
                                <div class="listing-two__btn-box">
                                    <a href="{{ route('listing-single') }}" class="thm-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing Two Single End -->
                <!-- Listing Two Single Start -->
                <div class="item">
                    <div class="listing-two__single">
                        <div class="listing-two__img-box">
                            <div class="listing-two__img">
                                <img src="{{ asset('assets/images/listing/listing-2-6.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="listing-two__content">
                            <p class="listing-two__sub-title">economy</p>
                            <h3 class="listing-two__title"><a href="{{ route('listing-single') }}">BMW Sports Car</a>
                            </h3>
                            <div class="listing-two__price-and-btn">
                                <div class="listing-two__price-box">
                                    <span>From</span>
                                    <p>$180,00 /day</p>
                                </div>
                                <div class="listing-two__btn-box">
                                    <a href="{{ route('listing-single') }}" class="thm-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing Two Single End -->
                <!-- Listing Two Single Start -->
                <div class="item">
                    <div class="listing-two__single">
                        <div class="listing-two__img-box">
                            <div class="listing-two__img">
                                <img src="{{ asset('assets/images/listing/listing-2-7.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="listing-two__content">
                            <p class="listing-two__sub-title">economy</p>
                            <h3 class="listing-two__title"><a href="{{ route('listing-single') }}">Yellow Ferrari 458</a>
                            </h3>
                            <div class="listing-two__price-and-btn">
                                <div class="listing-two__price-box">
                                    <span>From</span>
                                    <p>$180,00 /day</p>
                                </div>
                                <div class="listing-two__btn-box">
                                    <a href="{{ route('listing-single') }}" class="thm-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing Two Single End -->
                <!-- Listing Two Single Start -->
                <div class="item">
                    <div class="listing-two__single">
                        <div class="listing-two__img-box">
                            <div class="listing-two__img">
                                <img src="{{ asset('assets/images/listing/listing-2-8.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="listing-two__content">
                            <p class="listing-two__sub-title">economy</p>
                            <h3 class="listing-two__title"><a href="{{ route('listing-single') }}">toyota innova crysta</a>
                            </h3>
                            <div class="listing-two__price-and-btn">
                                <div class="listing-two__price-box">
                                    <span>From</span>
                                    <p>$180,00 /day</p>
                                </div>
                                <div class="listing-two__btn-box">
                                    <a href="{{ route('listing-single') }}" class="thm-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing Two Single End -->
                <!-- Listing Two Single Start -->
                <div class="item">
                    <div class="listing-two__single">
                        <div class="listing-two__img-box">
                            <div class="listing-two__img">
                                <img src="{{ asset('assets/images/listing/listing-2-6.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="listing-two__content">
                            <p class="listing-two__sub-title">economy</p>
                            <h3 class="listing-two__title"><a href="{{ route('listing-single') }}">BMW Sports Car</a>
                            </h3>
                            <div class="listing-two__price-and-btn">
                                <div class="listing-two__price-box">
                                    <span>From</span>
                                    <p>$180,00 /day</p>
                                </div>
                                <div class="listing-two__btn-box">
                                    <a href="{{ route('listing-single') }}" class="thm-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing Two Single End -->
            </div>
        </div>
    </section>
    <!-- Listing Two End -->

    <!-- Video Two Start -->
    <section class="video-two">
        <div class="container">
            <div class="video-two__inner">
                <div class="video-two__bg jarallax" data-jarallax data-speed="0.2" data-imgposition="50% 0%"
                    style="background-image: url({{ asset('assets/images/backgrounds/video-two-bg.jpg') }});"></div>
                <div class="video-two__video-link">
                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                        <div class="video-two__video-icon">
                            <span class="icon-play"></span>
                            <i class="ripple"></i>
                        </div>
                    </a>
                </div>
                <h2 class="video-two__title">Want To Know More About? <br> Play Our Promotional Video Now!</h2>
            </div>
        </div>
    </section>
    <!-- Video Two End -->

    <!-- Faq Two Start -->
    <section class="faq-two">
        <div class="faq-two__shape-1"></div>
        <div class="faq-two__shape-2"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box justify-content-center">
                    <div class="section-title__tagline-shape">
                        <img src="{{ asset('assets/images/shapes/section-title-tagline-shape-1.png') }}" alt="">
                    </div>
                    <span class="section-title__tagline">Our Faqs</span>
                </div>
                <h2 class="section-title__title title-animation">Frequently Asking Any Question</h2>
            </div>
            <div class="faq-two__inner-content">
                <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                    <div class="accrodion wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="accrodion-title">
                            <h4>How old do I need to be to rent a car?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>From personalized solutions to expert execution, we prioritize quality,
                                    reliability, and customer satisfaction in everything we do. Let us be
                                    your trusted partner in achieving success. From personalized solutions to expert
                                    execution, we prioritize quality, reliability, and customer satisfaction in
                                    everything we do.
                                </p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion active wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="accrodion-title">
                            <h4>What documents do I need to rent a car?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>From personalized solutions to expert execution, we prioritize quality,
                                    reliability, and customer satisfaction in everything we do. Let us be
                                    your trusted partner in achieving success. From personalized solutions to expert
                                    execution, we prioritize quality, reliability, and customer satisfaction in
                                    everything we do.
                                </p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="accrodion-title">
                            <h4>What types of vehicles are available for rent?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>From personalized solutions to expert execution, we prioritize quality,
                                    reliability, and customer satisfaction in everything we do. Let us be
                                    your trusted partner in achieving success. From personalized solutions to expert
                                    execution, we prioritize quality, reliability, and customer satisfaction in
                                    everything we do.
                                </p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="accrodion-title">
                            <h4>Can I rent a car with a debit card?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>From personalized solutions to expert execution, we prioritize quality,
                                    reliability, and customer satisfaction in everything we do. Let us be
                                    your trusted partner in achieving success. From personalized solutions to expert
                                    execution, we prioritize quality, reliability, and customer satisfaction in
                                    everything we do.
                                </p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="accrodion-title">
                            <h4>What is your fuel policy?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>From personalized solutions to expert execution, we prioritize quality,
                                    reliability, and customer satisfaction in everything we do. Let us be
                                    your trusted partner in achieving success. From personalized solutions to expert
                                    execution, we prioritize quality, reliability, and customer satisfaction in
                                    everything we do.
                                </p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="accrodion-title">
                            <h4>Can I add additional drivers to my rental agreement?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>From personalized solutions to expert execution, we prioritize quality,
                                    reliability, and customer satisfaction in everything we do. Let us be
                                    your trusted partner in achieving success. From personalized solutions to expert
                                    execution, we prioritize quality, reliability, and customer satisfaction in
                                    everything we do.
                                </p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq Two End -->

    <!--Contact One Start-->
    <section class="contact-one">
        <div class="contact-one__bg jarallax" data-jarallax data-speed="0.2" data-imgposition="50% 0%"
            style="background-image: url({{ asset('assets/images/backgrounds/contact-one-bg.jpg') }});">
        </div>
        <div class="contact-one__img wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
            <img src="{{ asset('assets/images/resources/contact-one-img-1.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="contact-one__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape">
                                    <img src="{{ asset('assets/images/shapes/section-title-tagline-shape-2.png') }}" alt="">
                                </div>
                                <span class="section-title__tagline">contact us</span>
                            </div>
                            <h2 class="section-title__title title-animation">We create online success Together
                                with you.</h2>
                        </div>
                        <form class="contact-form-validated contact-one__form" action="assets/inc/sendemail.php"
                            method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-one__input-box">
                                        <input type="text" name="name" placeholder="Your Name" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-one__input-box">
                                        <input type="email" name="Email" placeholder="Email Address" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-one__input-box">
                                        <input type="text" name="Phone" placeholder="Phone Number" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-one__input-box">
                                        <div class="select-box">
                                            <select class="selectmenu wide">
                                                <option selected>Service Type
                                                </option>
                                                <option>Type Of Service 01</option>
                                                <option>Type Of Service 02</option>
                                                <option>Type Of Service 03</option>
                                                <option>Type Of Service 04</option>
                                                <option>Type Of Service 05</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-one__input-box text-message-box">
                                        <textarea name="message" placeholder="Messege"></textarea>
                                    </div>
                                    <div class="contact-one__btn-box">
                                        <button type="submit" class="thm-btn">send a
                                            message <span class="fas fa-arrow-right"></span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="result"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact One End-->

    <!--Team Two Start -->
    <section class="team-two">
        <div class="team-two__shape-1"></div>
        <div class="team-two__shape-2"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box justify-content-center">
                    <div class="section-title__tagline-shape">
                        <img src="{{ asset('assets/images/shapes/section-title-tagline-shape-1.png') }}" alt="">
                    </div>
                    <span class="section-title__tagline">Expert Drivers</span>
                </div>
                <h2 class="section-title__title title-animation">Meet The Expert Drivers</h2>
            </div>
            <div class="row">
                <!--Team Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/team/team-2-1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="team-two__content">
                            <div class="team-two__title-box">
                                <h3 class="team-two__title"><a href="{{ route('driver-details') }}">Adam Smith</a></h3>
                                <div class="team-two__sub-title">SR. Driver</div>
                            </div>
                            <div class="team-two__share-and-social">
                                <div class="team-two__share">
                                    <span class="fas fa-share-alt"></span>
                                </div>
                                <div class="team-two__social">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                    <a href="#"><span class="icon-instagram-1"></span></a>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End-->
                <!--Team Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="300ms">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/team/team-2-2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="team-two__content">
                            <div class="team-two__title-box">
                                <h3 class="team-two__title"><a href="{{ route('driver-details') }}">Harbert Spin</a></h3>
                                <div class="team-two__sub-title">Premium Driver</div>
                            </div>
                            <div class="team-two__share-and-social">
                                <div class="team-two__share">
                                    <span class="fas fa-share-alt"></span>
                                </div>
                                <div class="team-two__social">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                    <a href="#"><span class="icon-instagram-1"></span></a>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End-->
                <!--Team Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="500ms">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/team/team-2-3.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="team-two__content">
                            <div class="team-two__title-box">
                                <h3 class="team-two__title"><a href="{{ route('driver-details') }}">Robert Son</a></h3>
                                <div class="team-two__sub-title">JR. Driver</div>
                            </div>
                            <div class="team-two__share-and-social">
                                <div class="team-two__share">
                                    <span class="fas fa-share-alt"></span>
                                </div>
                                <div class="team-two__social">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                    <a href="#"><span class="icon-instagram-1"></span></a>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End-->
                <!--Team Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="700ms">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset('assets/images/team/team-2-4.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="team-two__content">
                            <div class="team-two__title-box">
                                <h3 class="team-two__title"><a href="{{ route('driver-details') }}">Alisha Martin</a></h3>
                                <div class="team-two__sub-title">SR. Driver</div>
                            </div>
                            <div class="team-two__share-and-social">
                                <div class="team-two__share">
                                    <span class="fas fa-share-alt"></span>
                                </div>
                                <div class="team-two__social">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                    <a href="#"><span class="icon-instagram-1"></span></a>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End-->
            </div>
        </div>
    </section>
    <!--Team Two End -->

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
                            <img src="{{ asset('assets/images/testimonial/testimonial-2-1.jpg') }}" alt="">
                        </div>
                        <p class="testimonial-two__text">A logistic service provider company plays a
                            pivotal role in the global
                            supply chain A logistic service provider companyA logistic service
                            provider company plays a pivotal role.</p>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">Alisa Fox</a>
                                </h4>
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
                <!-- Testimonial Two Single Start -->
                <div class="item">
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__quote">
                            <span class="icon-quote"></span>
                        </div>
                        <div class="testimonial-two__img">
                            <img src="{{ asset('assets/images/testimonial/testimonial-2-2.jpg') }}" alt="">
                        </div>
                        <p class="testimonial-two__text">A logistic service provider company plays a
                            pivotal role in the global
                            supply chain A logistic service provider companyA logistic service
                            provider company plays a pivotal role.</p>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">Creas
                                        Jordan</a></h4>
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
                            <img src="{{ asset('assets/images/testimonial/testimonial-2-3.jpg') }}" alt="">
                        </div>
                        <p class="testimonial-two__text">A logistic service provider company plays a
                            pivotal role in the global
                            supply chain A logistic service provider companyA logistic service
                            provider company plays a pivotal role.</p>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">Ass Lee</a>
                                </h4>
                                <p class="testimonial-two__client-sub-title">Senior Consultant</p>
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
                        <p class="testimonial-two__text">A logistic service provider company plays a
                            pivotal role in the global
                            supply chain A logistic service provider companyA logistic service
                            provider company plays a pivotal role.</p>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">Creas
                                        Wokes</a></h4>
                                <p class="testimonial-two__client-sub-title">Managing Director</p>
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
                        <p class="testimonial-two__text">A logistic service provider company plays a
                            pivotal role in the global
                            supply chain A logistic service provider companyA logistic service
                            provider company plays a pivotal role.</p>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">Alex
                                        Jordan</a></h4>
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
                            <img src="{{ asset('assets/images/testimonial/testimonial-2-6.jpg') }}" alt="">
                        </div>
                        <p class="testimonial-two__text">A logistic service provider company plays a
                            pivotal role in the global
                            supply chain A logistic service provider companyA logistic service
                            provider company plays a pivotal role.</p>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name"><a href="{{ route('testimonials') }}">Janaton
                                        Trot</a></h4>
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

    <!--Download App One Start -->
    <section class="download-app-one">
        <div class="download-app-one__bg jarallax" data-jarallax data-speed="0.2" data-imgposition="50% 0%"
            style="background-image: url({{ asset('assets/images/backgrounds/download-app-one-bg.jpg') }});"></div>
        <div class="container">
            <div class="download-app-one__inner">
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="download-app-one__content sec-title-animation animation-style2">
                            <p class="download-app-one__sub-title">Download Our App</p>
                            <h2 class="download-app-one__title title-animation">Gorent User Friendly <br> App
                                Available</h2>
                            <p class="download-app-one__text">Get our mobile app for easy and convenient usage</p>
                            <div class="download-app-one__google-and-app-store">
                                <a href="{{ route('contact') }}"><img
                                        src="{{ asset('assets/images/icon/download-app-img1.png') }}" alt=""></a>
                                <a href="{{ route('contact') }}"><img
                                        src="{{ asset('assets/images/icon/download-app-img2.png') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="download-app-one__right">
                            <div class="download-app-one__img">
                                <div class="download-app-one__img1 reveal">
                                    <img src="{{ asset('assets/images/resources/download-app-img-1.png') }}" alt="">
                                </div>
                            </div>
                            <div class="download-app-one-car__img float-bob-x">
                                <img src="{{ asset('assets/images/resources/download-app-car-img-1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Download App One End -->

    <!-- Feature One Start -->
    <section class="feature-one">
        <div class="container">
            <div class="feature-one__inner">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="feature-one__inner-single wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="feature-one__inner-single-bg"
                                style="background-image: url({{ asset('assets/images/backgrounds/feature-one-bg-1.jpg') }});">
                            </div>
                            <h3 class="feature-one__inner-title">Are You Looking <br>For a Car ?</h3>
                            <p class="feature-one__inner-text">Lorem ipsum is simply ipun txns mane so dummy text of
                                free available in market the printing and typesetting industry</p>
                            <div class="feature-one__inner-btn-box">
                                <a href="{{ route('contact') }}" class="thm-btn">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="feature-one__inner-single feature-one__inner-single--two wow slideInRight"
                            data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="feature-one__inner-single-bg"
                                style="background-image: url({{ asset('assets/images/backgrounds/feature-one-bg-2.jpg') }});">
                            </div>
                            <h3 class="feature-one__inner-title">Do You Want to <br> Rent a Car ?</h3>
                            <p class="feature-one__inner-text">Lorem ipsum is simply ipun txns mane so dummy text of
                                free available in market the printing and typesetting industry</p>
                            <div class="feature-one__inner-btn-box">
                                <a href="{{ route('self-drive-car') }}" class="thm-btn">Rent Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature One End -->

    <!-- Popular Car Two Start -->
    <section class="popular-car-two">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box justify-content-center">
                    <div class="section-title__tagline-shape">
                        <img src="{{ asset('assets/images/shapes/section-title-tagline-shape-1.png') }}" alt="">
                    </div>
                    <span class="section-title__tagline">Popular Car</span>
                </div>
                <h2 class="section-title__title title-animation">Most Popular Cartypes</h2>
            </div>
            <div class="popular-car-two__carousel owl-carousel owl-theme">
                <!-- Popular Car Two Single Start -->
                <div class="item">
                    <div class="popular-car-two__single">
                        <div class="popular-car-two__icon">
                            <span class="icon-sedan"></span>
                        </div>
                        <div class="popular-car-two__single-inner">
                            <h4 class="popular-car-two__title"><a href="{{ route('self-drive-car') }}">Sedan</a></h4>
                            <p class="popular-car-two__count">9 Cars</p>
                        </div>
                    </div>
                </div>
                <!-- Popular Car Two Single End -->
                <!-- Popular Car Two Single Start -->
                <div class="item">
                    <div class="popular-car-two__single">
                        <div class="popular-car-two__icon">
                            <span class="icon-sports-car"></span>
                        </div>
                        <div class="popular-car-two__single-inner">
                            <h4 class="popular-car-two__title"><a href="{{ route('car-list-v-2') }}">Sports Coupe</a></h4>
                            <p class="popular-car-two__count">3 Cars</p>
                        </div>
                    </div>
                </div>
                <!-- Popular Car Two Single End -->
                <!-- Popular Car Two Single Start -->
                <div class="item">
                    <div class="popular-car-two__single">
                        <div class="popular-car-two__icon">
                            <span class="icon-car-2"></span>
                        </div>
                        <div class="popular-car-two__single-inner">
                            <h4 class="popular-car-two__title"><a href="{{ route('car-list-v-3') }}">Crossover</a></h4>
                            <p class="popular-car-two__count">5 Cars</p>
                        </div>
                    </div>
                </div>
                <!-- Popular Car Two Single End -->
                <!-- Popular Car Two Single Start -->
                <div class="item">
                    <div class="popular-car-two__single">
                        <div class="popular-car-two__icon">
                            <span class="icon-car-1"></span>
                        </div>
                        <div class="popular-car-two__single-inner">
                            <h4 class="popular-car-two__title"><a href="{{ route('cars') }}">Pickup</a></h4>
                            <p class="popular-car-two__count">8 Cars</p>
                        </div>
                    </div>
                </div>
                <!-- Popular Car Two Single End -->
                <!-- Popular Car Two Single Start -->
                <div class="item">
                    <div class="popular-car-two__single">
                        <div class="popular-car-two__icon">
                            <span class="icon-cuv"></span>
                        </div>
                        <div class="popular-car-two__single-inner">
                            <h4 class="popular-car-two__title"><a href="{{ route('cars') }}">Family MPV</a></h4>
                            <p class="popular-car-two__count">6 Cars</p>
                        </div>
                    </div>
                </div>
                <!-- Popular Car Two Single End -->
                <!-- Popular Car Two Single Start -->
                <div class="item">
                    <div class="popular-car-two__single">
                        <div class="popular-car-two__icon">
                            <span class="icon-cuv"></span>
                        </div>
                        <div class="popular-car-two__single-inner">
                            <h4 class="popular-car-two__title"><a href="{{ route('cars') }}">Pickup</a></h4>
                            <p class="popular-car-two__count">7 Cars</p>
                        </div>
                    </div>
                </div>
                <!-- Popular Car Two Single End -->
            </div>
        </div>
    </section>
    <!-- Popular Car Two End -->

    <!--Brand Two Start -->
    <section class="brand-two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4 col-md-5">
                    <div class="brand-two__left">
                        <p class="brand-two__text">We have <span>over 250 trusted</span> <br> brands worldwide</p>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7">
                    <div class="brand-two__right">
                        <div class="brand-two__carousel owl-theme owl-carousel">
                            <div class="item">
                                <div class="brand-two__single">
                                    <div class="brand-two__img">
                                        <a href="#"><img src="{{ asset('assets/images/brand/brand-2-1.png') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="brand-two__single">
                                    <div class="brand-two__img">
                                        <a href="#"> <img src="{{ asset('assets/images/brand/brand-2-2.png') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="brand-two__single">
                                    <div class="brand-two__img">
                                        <a href="#"><img src="{{ asset('assets/images/brand/brand-2-3.png') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="brand-two__single">
                                    <div class="brand-two__img">
                                        <a href="#"><img src="{{ asset('assets/images/brand/brand-2-4.png') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="brand-two__single">
                                    <div class="brand-two__img">
                                        <a href="#"><img src="{{ asset('assets/images/brand/brand-2-5.png') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Brand Two End -->

    <!--Blog Two Start -->
    <section class="blog-two">
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
            <div class="blog-two__carousel owl-carousel owl-theme">
                <!--Blog Two Single Start -->
                <div class="item">
                    <div class="blog-two__single">
                        <div class="blog-two__img-box">
                            <div class="blog-two__img">
                                <img src="{{ asset('assets/images/blog/blog-2-1.jpg') }}" alt="">
                                <div class="blog-two__tags">
                                    <span>Car Showcase</span>
                                </div>
                            </div>
                            <div class="blog-two__date">
                                <p>10</p>
                                <span>Nov</span>
                            </div>
                        </div>
                        <div class="blog-two__content">
                            <div class="blog-two__user">
                                <div class="blog-two__user-img">
                                    <img src="{{ asset('assets/images/blog/blog-two-user-1-1.jpg') }}" alt="">
                                </div>
                                <div class="blog-two__user-content">
                                    <h5 class="blog-two__user-name"><a href="{{ route('blog-details') }}">Michael Jara</a>
                                    </h5>
                                    <p class="blog-two__sub-title">CEO & Founder</p>
                                </div>
                            </div>
                            <h3 class="blog-two__title"><a href="{{ route('blog-details') }}">Documents required for car
                                    rental services</a></h3>
                            <p class="blog-two__text">Car Is Where Early Adopters And Innovation Seekers Find Lively
                                Imaginative Tech.</p>
                            <a href="{{ route('blog-details') }}" class="blog-two__read-more">Read More <span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Blog Two Single End -->
                <!--Blog Two Single Start -->
                <div class="item">
                    <div class="blog-two__single">
                        <div class="blog-two__img-box">
                            <div class="blog-two__img">
                                <img src="{{ asset('assets/images/blog/blog-2-2.jpg') }}" alt="">
                                <div class="blog-two__tags">
                                    <span>Car Showcase</span>
                                </div>
                            </div>
                            <div class="blog-two__date">
                                <p>10</p>
                                <span>Nov</span>
                            </div>
                        </div>
                        <div class="blog-two__content">
                            <div class="blog-two__user">
                                <div class="blog-two__user-img">
                                    <img src="{{ asset('assets/images/blog/blog-two-user-1-2.jpg') }}" alt="">
                                </div>
                                <div class="blog-two__user-content">
                                    <h5 class="blog-two__user-name"><a href="{{ route('blog-details') }}">Jassica Jara</a>
                                    </h5>
                                    <p class="blog-two__sub-title">CEO & Founder</p>
                                </div>
                            </div>
                            <h3 class="blog-two__title"><a href="{{ route('blog-details') }}">One of the most effective car
                                    rental
                                    blog topic</a></h3>
                            <p class="blog-two__text">Car Is Where Early Adopters And Innovation Seekers Find Lively
                                Imaginative Tech.</p>
                            <a href="{{ route('blog-details') }}" class="blog-two__read-more">Read More <span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Blog Two Single End -->
                <!--Blog Two Single Start -->
                <div class="item">
                    <div class="blog-two__single">
                        <div class="blog-two__img-box">
                            <div class="blog-two__img">
                                <img src="{{ asset('assets/images/blog/blog-2-3.jpg') }}" alt="">
                                <div class="blog-two__tags">
                                    <span>Car Showcase</span>
                                </div>
                            </div>
                            <div class="blog-two__date">
                                <p>10</p>
                                <span>Nov</span>
                            </div>
                        </div>
                        <div class="blog-two__content">
                            <div class="blog-two__user">
                                <div class="blog-two__user-img">
                                    <img src="{{ asset('assets/images/blog/blog-two-user-1-3.jpg') }}" alt="">
                                </div>
                                <div class="blog-two__user-content">
                                    <h5 class="blog-two__user-name"><a href="{{ route('blog-details') }}">Michael Jahon</a>
                                    </h5>
                                    <p class="blog-two__sub-title">CEO & Founder</p>
                                </div>
                            </div>
                            <h3 class="blog-two__title"><a href="{{ route('blog-details') }}">Rental cost of sport and other
                                    cars</a></h3>
                            <p class="blog-two__text">Car Is Where Early Adopters And Innovation Seekers Find Lively
                                Imaginative Tech.</p>
                            <a href="{{ route('blog-details') }}" class="blog-two__read-more">Read More <span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Blog Two Single End -->
                <!--Blog Two Single Start -->
                <div class="item">
                    <div class="blog-two__single">
                        <div class="blog-two__img-box">
                            <div class="blog-two__img">
                                <img src="{{ asset('assets/images/blog/blog-2-4.jpg') }}" alt="">
                                <div class="blog-two__tags">
                                    <span>Car Showcase</span>
                                </div>
                            </div>
                            <div class="blog-two__date">
                                <p>10</p>
                                <span>Nov</span>
                            </div>
                        </div>
                        <div class="blog-two__content">
                            <div class="blog-two__user">
                                <div class="blog-two__user-img">
                                    <img src="{{ asset('assets/images/blog/blog-two-user-1-4.jpg') }}" alt="">
                                </div>
                                <div class="blog-two__user-content">
                                    <h5 class="blog-two__user-name"><a href="{{ route('blog-details') }}">Michael Bough</a>
                                    </h5>
                                    <p class="blog-two__sub-title">CEO & Founder</p>
                                </div>
                            </div>
                            <h3 class="blog-two__title"><a href="{{ route('blog-details') }}">Rental cars how to check
                                    driving
                                    fines?</a></h3>
                            <p class="blog-two__text">Car Is Where Early Adopters And Innovation Seekers Find Lively
                                Imaginative Tech.</p>
                            <a href="{{ route('blog-details') }}" class="blog-two__read-more">Read More <span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Blog Two Single End -->
                <!--Blog Two Single Start -->
                <div class="item">
                    <div class="blog-two__single">
                        <div class="blog-two__img-box">
                            <div class="blog-two__img">
                                <img src="{{ asset('assets/images/blog/blog-2-5.jpg') }}" alt="">
                                <div class="blog-two__tags">
                                    <span>Car Showcase</span>
                                </div>
                            </div>
                            <div class="blog-two__date">
                                <p>10</p>
                                <span>Nov</span>
                            </div>
                        </div>
                        <div class="blog-two__content">
                            <div class="blog-two__user">
                                <div class="blog-two__user-img">
                                    <img src="{{ asset('assets/images/blog/blog-two-user-1-1.jpg') }}" alt="">
                                </div>
                                <div class="blog-two__user-content">
                                    <h5 class="blog-two__user-name"><a href="{{ route('blog-details') }}">Michael Jara</a>
                                    </h5>
                                    <p class="blog-two__sub-title">CEO & Founder</p>
                                </div>
                            </div>
                            <h3 class="blog-two__title"><a href="{{ route('blog-details') }}">How to Rent a Car at the
                                    Airport
                                    Terminal?</a></h3>
                            <p class="blog-two__text">Car Is Where Early Adopters And Innovation Seekers Find Lively
                                Imaginative Tech.</p>
                            <a href="{{ route('blog-details') }}" class="blog-two__read-more">Read More <span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Blog Two Single End -->
                <!--Blog Two Single Start -->
                <div class="item">
                    <div class="blog-two__single">
                        <div class="blog-two__img-box">
                            <div class="blog-two__img">
                                <img src="{{ asset('assets/images/blog/blog-2-6.jpg') }}" alt="">
                                <div class="blog-two__tags">
                                    <span>Car Showcase</span>
                                </div>
                            </div>
                            <div class="blog-two__date">
                                <p>10</p>
                                <span>Nov</span>
                            </div>
                        </div>
                        <div class="blog-two__content">
                            <div class="blog-two__user">
                                <div class="blog-two__user-img">
                                    <img src="{{ asset('assets/images/blog/blog-two-user-1-2.jpg') }}" alt="">
                                </div>
                                <div class="blog-two__user-content">
                                    <h5 class="blog-two__user-name"><a href="{{ route('blog-details') }}">Michael Jhon</a>
                                    </h5>
                                    <p class="blog-two__sub-title">CEO & Founder</p>
                                </div>
                            </div>
                            <h3 class="blog-two__title"><a href="{{ route('blog-details') }}">Penalties for violating the
                                    rules in rental cars</a></h3>
                            <p class="blog-two__text">Car Is Where Early Adopters And Innovation Seekers Find Lively
                                Imaginative Tech.</p>
                            <a href="{{ route('blog-details') }}" class="blog-two__read-more">Read More <span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Blog Two Single End -->
            </div>
        </div>
    </section>
    <!--Blog Two End -->

    <!--Gallery One Start -->
    <section class="gallery-one">
        <div class="gallery-one__carousel owl-theme owl-carousel">
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-1.jpg') }}" alt="">
                        <a href="{{ route('cars') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-2.jpg') }}" alt="">
                        <a href="{{ route('cars') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-3.jpg') }}" alt="">
                        <a href="{{ route('cart') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-4.jpg') }}" alt="">
                        <a href="{{ route('cart') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-5.jpg') }}" alt="">
                        <a href="{{ route('cart') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-6.jpg') }}" alt="">
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
@extends('layouts.layoutCommon')
@section('title', 'Home')

@section('content')

    <!-- Banner One Start -->
    <section class="banner-one" id="home">
        <div class="banner-one__shape-bg"
            style="background-image: url({{ asset('assets/images/shapes/banner-one-shape-bg.png') }});"></div>
        <div class="banner-one__shape-1">
            <div class="banner-one__shape-1-bg"
                style="background-image: url({{ asset('assets/images/backgrounds/banner-one-shape-1-bg.jpg') }});"></div>
        </div>
        <div class="banner-one__shape-2"></div>
        <div class="container">
            <div class="banner-one__inner">
                <div class="banner-one__content">
                    <p class="banner-one__sub-title">100% Trusted car rental platform in the World</p>
                    <h2 class="banner-one__title">Find Your Best Dream <br> <span> Car
                            for</span> <span class="typed-effect" id="type-1" data-strings="Rental, Booking"></span>
                    </h2>
                    <p class="banner-one__text">Drive your journey with Quarkcars — simple, reliable, and affordable. Choose from a<br>  wide range of well-maintained self-drive vehicles.
Book easily, drive freely, and enjoy a <br>  smooth rental experience.
Travel with comfort, flexibility, and complete control of your trip.</p>
                    <div class="banner-one__btn-box">
                        <a href="{{ route('about') }}" class="thm-btn">Read More<span class="fas fa-arrow-right"></span></a>
                    </div>
                </div>
                <div class="banner-one__img-one" data-aos="slide-left" data-aos-duration="2000">
                    <img src="{{ asset('assets/images/resources/banner-one-img-1(1).png') }}" alt="" class="float-bob-y">
                </div>
            </div>
        </div>
    </section>
    <!--Banner One End -->

    <!--Search Car Start -->
    <section class="search-car">
        <div class="search-car__shape-1"></div>
        <div class="search-car__shape-2"></div>
        <div class="container">
            <div class="search-car__inner">
                <div class="search-car__tab-box tabs-box">
                    <ul class="tab-buttons clearfix list-unstyled">
                        <li data-tab="#usedcar" class="tab-btn active-btn"><span>Rent car</span></li>
                        <li data-tab="#newcars" class="tab-btn"><span>Car Sharing</span></li>
                        <li data-tab="#sportscars" class="tab-btn"><span>Car Subscription</span></li>
                        <li data-tab="#luxurycars" class="tab-btn"><span>Taxi Service</span></li>
                    </ul>
                    <div class="tabs-content">
                        <!--tab-->
                        <div class="tab active-tab" id="usedcar">
                            <div class="tabs-content__inner">
                                <form class="contact-form-validated search-car__form" action="assets/inc/sendemail.php"
                                    method="post" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span class="icon-pin-2"></span>
                                                    Pickup</p>
                                                <div class="select-box">
                                                    <select class="selectmenu wide">
                                                        <option selected>Enter a Location</option>
                                                        <option>Jaipur</option>
                                                        <option>Sawai Madhopur</option>
                                                        <option>Kota</option>
                                                        <option>Dausa</option>
                                                        <option>Sikar</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span class="icon-date"></span>Pickup
                                                    Date</p>
                                                <input type="text" placeholder="mm/dd/yyy" name="date" id="datepicker">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span class="icon-clock"></span>Pickup
                                                    Time</p>
                                                <input type="text" name="time" placeholder="Chose A Time">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span class="icon-pin-2"></span>
                                                    Drop of</p>
                                                <div class="select-box">
                                                    <select class="selectmenu wide">
                                                        <option selected>Enter a Location</option>
                                                       <option>Jaipur</option>
                                                        <option>Sawai Madhopur</option>
                                                        <option>Kota</option>
                                                        <option>Dausa</option>
                                                        <option>Sikar</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span class="icon-date"></span>Drop of
                                                    Date</p>
                                                <input type="text" placeholder="mm/dd/yyy" name="date" id="datepicker-2">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span class="icon-clock"></span>Drop of
                                                    Time</p>
                                                <input type="text" name="time" placeholder="Chose A Time">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="search-car__btn-box">
                                                <button type="submit" class="thm-btn">Find a Vehicle
                                                    <span class="fas fa-search"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
                        </div>
                        <!--tab-->
                        <!--tab-->
                        <div class="tab" id="newcars">
                            <div class="tabs-content__inner">
                                <form class="contact-form-validated search-car__form" action="assets/inc/sendemail.php"
                                    method="post" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span class="icon-pin-2"></span>
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
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span class="icon-date"></span>Pickup
                                                    Date</p>
                                                <input type="text" placeholder="mm/dd/yyy" name="date" id="datepicker-3">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span class="icon-clock"></span>Pickup
                                                    Time</p>
                                                <input type="text" name="time" placeholder="Chose A Time">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span class="icon-pin-2"></span>
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
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span class="icon-date"></span>Drop of
                                                    Date</p>
                                                <input type="text" placeholder="mm/dd/yyy" name="date" id="datepicker-4">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span class="icon-clock"></span>Drop of
                                                    Time</p>
                                                <input type="text" name="time" placeholder="Chose A Time">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="search-car__btn-box">
                                                <button type="submit" class="thm-btn">Find a Vehicle
                                                    <span class="fas fa-search"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
                        </div>
                        <!--tab-->
                        <!--tab-->
                        <div class="tab" id="sportscars">
                            <div class="tabs-content__inner">
                                <form class="contact-form-validated search-car__form" action="assets/inc/sendemail.php"
                                    method="post" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span class="icon-pin-2"></span>
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
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span class="icon-date"></span>Pickup
                                                    Date</p>
                                                <input type="text" placeholder="mm/dd/yyy" name="date" id="datepicker-5">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span class="icon-clock"></span>Pickup
                                                    Time</p>
                                                <input type="text" name="time" placeholder="Chose A Time">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span class="icon-pin-2"></span>
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
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span class="icon-date"></span>Drop of
                                                    Date</p>
                                                <input type="text" placeholder="mm/dd/yyy" name="date" id="datepicker-6">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span class="icon-clock"></span>Drop of
                                                    Time</p>
                                                <input type="text" name="time" placeholder="Chose A Time">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="search-car__btn-box">
                                                <button type="submit" class="thm-btn">Find a Vehicle
                                                    <span class="fas fa-search"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
                        </div>
                        <!--tab-->
                        <!--tab-->
                        <div class="tab" id="luxurycars">
                            <div class="tabs-content__inner">
                                <form class="contact-form-validated search-car__form" action="assets/inc/sendemail.php"
                                    method="post" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span class="icon-pin-2"></span>
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
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span class="icon-date"></span>Pickup
                                                    Date</p>
                                                <input type="text" placeholder="mm/dd/yyy" name="date" id="datepicker-7">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span class="icon-clock"></span>Pickup
                                                    Time</p>
                                                <input type="text" name="time" placeholder="Chose A Time">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span class="icon-pin-2"></span>
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
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span class="icon-date"></span>Drop of
                                                    Date</p>
                                                <input type="text" placeholder="mm/dd/yyy" name="date" id="datepicker-8">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="search-car__input-box">
                                                <p class="search-car__input-title"> <span class="icon-clock"></span>Drop of
                                                    Time</p>
                                                <input type="text" name="time" placeholder="Chose A Time">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="search-car__btn-box">
                                                <button type="submit" class="thm-btn">Find a Vehicle
                                                    <span class="fas fa-search"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
                        </div>
                        <!--tab-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Search Car End -->

    <!--About Three Start -->
    <section class="about-three" id="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-three__left">
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
                        <p class="about-three__text-1">Quarkcars operates across multiple cities, offering reliable and accessible self-drive car rental services.
With a strong focus on customer satisfaction and seamless booking, it ensures a convenient travel experience.</p>
                        <div class="about-three__points-box">
                            <ul class="list-unstyled about-three__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-car-insurance"></span>
                                    </div>
                                    <div class="content">
                                        <h3>Best Car Rental Services</h3>
                                        <p>Experience reliable and affordable car rental services tailored to your travel needs.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-range"></span>
                                    </div>
                                    <div class="content">
                                        <h3>Easy & Fast Booking</h3>
                                        <p>Book your car quickly and effortlessly with our simple and user-friendly process.</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="about-three__btn-box-and-call-box">
                                <div class="about-three__btn-box">
                                    <a href="{{ route('about') }}" class="about-three__btn thm-btn">Read More<span
                                            class="fas fa-arrow-right"></span></a>
                                </div>
                                <div class="about-three__call-box">
                                    <div class="about-three__call-box-icon">
                                        <span class="icon-call-2"></span>
                                    </div>
                                    <div class="about-three__call-box-content">
                                        <p>Call to Anytime</p>
                                        <h4><a href="tel:918769639911">+91 8769639911</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-three__right wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="about-three__img-box">
                                    <div class="about-three__img-1">
                                        <img src="{{ asset('assets/images/resources/about-three-img-1(1).jpg') }}" alt="">
                                    </div>
                                    <div class="about-three__img-2">
                                        <img src="{{ asset('assets/images/resources/about-three-img-2(1).jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="about-three__satisfied-and-img">
                                    <div class="about-three__satisfied-box">
                                        <div class="icon">
                                            <span class="icon-reviews"></span>
                                        </div>
                                        <div class="about-three__count-box">
                                            <div class="about-three__count count-box">
                                                <h3 class="count-text" data-stop="2500" data-speed="1500">00</h3>
                                            </div>
                                            <p class="about-three__count-text">Satisfied Client</p>
                                        </div>
                                    </div>
                                    <div class="about-three__img-3">
                                        <img src="{{ asset('assets/images/resources/about-three-img-3(1).jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Three End -->

    <!--Services Three Start -->
    <section class="services-three" id="services">
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

    <!-- Process One Start -->
    <section class="process-one process-three">
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
                            style="background-image: url({{ asset('assets/images/backgrounds/process-one-single-bg-1(1).jpg') }});">
                        </div>
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
                        <div class="process-one__single-bg"
                            style="background-image: url({{ asset('assets/images/backgrounds/process-one-single-bg-2(1).jpg') }});">
                        </div>
                        <div class="process-one__icon-box">
                            <div class="process-one__icon-shape"></div>
                            <div class="process-one__icon">
                                <span class="icon-in-person"></span>
                            </div>
                            <div class="process-one__count"></div>
                        </div>
                        <h3 class="process-one__title">Come In Contact</h3>
                        <p class="process-one__text">Get in touch with our team for quick support and booking assistance. </p>
                    </div>
                </div>
                <!-- Process One Single End -->
                <!-- Process One Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
                    <div class="process-one__single">
                        <div class="process-one__single-bg"
                            style="background-image: url({{ asset('assets/images/backgrounds/process-one-single-bg-3(1).jpg') }});">
                        </div>
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
                        <div class="process-one__single-bg"
                            style="background-image: url({{ asset('assets/images/backgrounds/process-one-single-bg-4(1).jpg') }});">
                          
                            
                        </div>
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

    <!--Counter Three Start-->
    <section class="counter-three">
        <!-- <div class="counter-three__bg jarallax" data-jarallax data-speed="0.2" data-imgposition="50% 0%"
            style="background-image: url({{ asset('assets/images/backgrounds/counter-three-bg.jpg') }});">
        </div> -->
        <div class="container">
            <ul class="row list-unstyled">
                <!--Counter Three Single Start-->
                <li class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="counter-three__single">
                        <div class="counter-three__icon">
                            <span class="icon-car"></span>
                        </div>
                        <div class="counter-three__count-box">
                            <h3 class="odometer" data-count="1050">00</h3>
                            <span>K</span>
                        </div>
                        <p class="counter-three__count-text">Vehicle fleet</p>
                    </div>
                </li>
                <!--Counter Three Single End-->
                <!--Counter Three Single Start-->
                <li class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="counter-three__single">
                        <div class="counter-three__icon">
                            <span class="icon-mileage"></span>
                        </div>
                        <div class="counter-three__count-box">
                            <h3 class="odometer" data-count="5000">00</h3>
                            <span> </span>
                        </div>
                        <p class="counter-three__count-text">Miles of drive
                        </p>
                    </div>
                </li>
                <!--Counter Three Single End-->
                <!--Counter Three Single Start-->
                <li class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="counter-three__single">
                        <div class="counter-three__icon">
                            <span class="icon-reviews"></span>
                        </div>
                        <div class="counter-three__count-box">
                            <h3 class="odometer" data-count="140">00</h3>
                            <span>K</span>
                        </div>
                        <p class="counter-three__count-text">Happy customer</p>
                    </div>
                </li>
                <!--Counter Three Single End-->
                <!--Counter Three Single Start-->
                <li class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="counter-three__single">
                        <div class="counter-three__icon">
                            <span class="icon-pin-2"></span>
                        </div>
                        <div class="counter-three__count-box">
                            <h3 class="odometer" data-count="1000">00</h3>
                            <span> </span>
                        </div>
                        <p class="counter-three__count-text">Pickup & drop</p>
                    </div>
                </li>
                <!--Counter Three Single End-->
            </ul>
        </div>
    </section>
    <!--Counter Three End -->

    <!-- Listing Three Start -->
    <section class="listing-three" id="cars">
        <div class="container">
            <div class="section-title text-left sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape">
                        <img src="{{ asset('assets/images/shapes/section-title-tagline-shape-1.png') }}" alt="">
                    </div>
                    <span class="section-title__tagline">Checkout our new cars</span>
                </div>
                <h2 class="section-title__title title-animation">Explore Most Popular Cars</h2>
            </div>
            <div class="listing-three__carousel owl-carousel owl-theme">
                <!-- Listing One Single Start -->
                <div class="item">
                    <div class="listing-three__single">
                        <div class="listing-three__img">
                            <img src="{{ asset('assets/images/listing/listing-3-1(1).jpg') }}" alt="">
                            <div class="listing-three__brand-name">
                                <p>Maruti</p>
                            </div>
                        </div>
                        <div class="listing-three__content">
                            <h3 class="listing-three__title"><a href="{{ route('swift-vxi-details') }}">Maruti Swift VXI (O) CNG</a></h3>
                            <div class="listing-three__meta-box-info">
                                <ul class="list-unstyled listing-three__meta">
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
                                            <p>32 KM/L</p>
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
                                <ul class="list-unstyled listing-three__meta listing-three__meta--two">
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
                            <div class="listing-three__car-rent-and-btn-box">
                                <p class="listing-three__car-rent"><span>2800 INR/</span> Day</p>
                                <div class="listing-three__btn-box">
                                    <a href="{{ route('swift-vxi-details') }}" class="listing-three__btn"><span
                                            class="icon-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing One Single End -->
                <!-- Listing One Single Start -->
                <div class="item">
                    <div class="listing-three__single">
                        <div class="listing-three__img">
                            <img src="{{ asset('assets/images/listing/listing-3-2(1).png') }}" alt="">
                            <div class="listing-three__brand-name">
                                <p>Maruti</p>
                            </div>
                        </div>
                        <div class="listing-three__content">
                            <h3 class="listing-three__title"><a href="{{ route('ertiga-vxi-details') }}">Maruti Ertiga VXI CNG</a></h3>
                            <div class="listing-three__meta-box-info">
                                <ul class="list-unstyled listing-three__meta">
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
                                <ul class="list-unstyled listing-three__meta listing-three__meta--two">
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
                            <div class="listing-three__car-rent-and-btn-box">
                                <p class="listing-three__car-rent"><span>3500 INR/</span> Day</p>
                                <div class="listing-three__btn-box">
                                    <a href="{{ route('ertiga-vxi-details') }}" class="listing-three__btn"><span
                                            class="icon-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing One Single End -->
                <!-- Listing One Single Start -->
                <div class="item">
                    <div class="listing-three__single">
                        <div class="listing-three__img">
                            <img src="{{ asset('assets/images/listing/listing-3-3(1).png') }}" alt="">
                            <div class="listing-three__brand-name">
                                <p>Maruti</p>
                            </div>
                        </div>
                        <div class="listing-three__content">
                            <h3 class="listing-three__title"><a href="{{ route('swift-lxi-details') }}">Maruti Swift LXI</a></h3>
                            <div class="listing-three__meta-box-info">
                                <ul class="list-unstyled listing-three__meta">
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
                                <ul class="list-unstyled listing-three__meta listing-three__meta--two">
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
                            <div class="listing-three__car-rent-and-btn-box">
                                <p class="listing-three__car-rent"><span>2500 INR/</span> Day</p>
                                <div class="listing-three__btn-box">
                                    <a href="{{ route('swift-lxi-details') }}" class="listing-three__btn"><span
                                            class="icon-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing One Single End -->
                <!-- Listing One Single Start -->
                <div class="item">
                    <div class="listing-three__single">
                        <div class="listing-three__img">
                            <img src="{{ asset('assets/images/listing/listing-3-4(1).png') }}" alt="">
                            <div class="listing-three__brand-name">
                                <p>Mahindra</p>
                            </div>
                        </div>
                        <div class="listing-three__content">
                            <h3 class="listing-three__title"><a href="{{ route('mahindra-scorpio-s11-details') }}">Mahindra Scorpio S11</a></h3>
                            <div class="listing-three__meta-box-info">
                                <ul class="list-unstyled listing-three__meta">
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
                                <ul class="list-unstyled listing-three__meta listing-three__meta--two">
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
                            <div class="listing-three__car-rent-and-btn-box">
                                <p class="listing-three__car-rent"><span>5500 INR/</span> Day</p>
                                <div class="listing-three__btn-box">
                                    <a href="{{ route('mahindra-scorpio-s11-details') }}" class="listing-three__btn"><span
                                            class="icon-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing One Single End -->
                <!-- Listing One Single Start -->
                <div class="item">
                    <div class="listing-three__single">
                        <div class="listing-three__img">
                            <img src="{{ asset('assets/images/listing/listing-3-5(1).png') }}" alt="">
                            <div class="listing-three__brand-name">
                                <p>Mahindra</p>
                            </div>
                        </div>
                        <div class="listing-three__content">
                            <h3 class="listing-three__title"><a href="{{ route('mahindra-thar-4x4-details') }}">Mahindra Thar 4x4 Diesel</a></h3>
                            <div class="listing-three__meta-box-info">
                                <ul class="list-unstyled listing-three__meta">
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
                                <ul class="list-unstyled listing-three__meta listing-three__meta--two">
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
                            <div class="listing-three__car-rent-and-btn-box">
                                <p class="listing-three__car-rent"><span>5000 INR/</span> Day</p>
                                <div class="listing-three__btn-box">
                                    <a href="{{ route('mahindra-thar-4x4-details') }}" class="listing-three__btn"><span
                                            class="icon-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing One Single End -->
                <!-- Listing One Single Start -->
                <div class="item">
                    <div class="listing-three__single">
                        <div class="listing-three__img">
                            <img src="{{ asset('assets/images/listing/listing-3-6(1).png') }}" alt="">
                            <div class="listing-three__brand-name">
                                <p>Hyundai</p>
                            </div>
                        </div>
                        <div class="listing-three__content">
                            <h3 class="listing-three__title"><a href="{{ route('hyundai-verna-petrol-details') }}">Hyundai Verna Petrol</a></h3>
                            <div class="listing-three__meta-box-info">
                                <ul class="list-unstyled listing-three__meta">
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
                                <ul class="list-unstyled listing-three__meta listing-three__meta--two">
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
                            <div class="listing-three__car-rent-and-btn-box">
                                <p class="listing-three__car-rent"><span>4500 INR/</span> Day</p>
                                <div class="listing-three__btn-box">
                                    <a href="{{ route('hyundai-verna-petrol-details') }}" class="listing-three__btn"><span
                                            class="icon-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="listing-three__single">
                        <div class="listing-three__img">
                            <img src="{{ asset('assets/images/listing/listing-1-6(1).png') }}" alt="">
                            <div class="listing-three__brand-name">
                                <p>Hyundai</p>
                            </div>
                        </div>
                        <div class="listing-three__content">
                            <h3 class="listing-three__title"><a href="{{ route('hyundai-i20-details') }}">Hyundai i20</a></h3>
                            <div class="listing-three__meta-box-info">
                                <ul class="list-unstyled listing-three__meta">
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
                                <ul class="list-unstyled listing-three__meta listing-three__meta--two">
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
                            <div class="listing-three__car-rent-and-btn-box">
                                <p class="listing-three__car-rent"><span>2800 INR/</span> Day</p>
                                <div class="listing-three__btn-box">
                                    <a href="{{ route('hyundai-i20-details') }}" class="listing-three__btn"><span
                                            class="icon-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="item">
                    <div class="listing-three__single">
                        <div class="listing-three__img">
                            <img src="{{ asset('assets/images/listing/listing-1-7(1).png') }}" alt="">
                            <div class="listing-three__brand-name">
                                <p>Hyundai</p>
                            </div>
                        </div>
                        <div class="listing-three__content">
                            <h3 class="listing-three__title"><a href="{{ route('hyundai-i10-details') }}">Hyundai i10</a></h3>
                            <div class="listing-three__meta-box-info">
                                <ul class="list-unstyled listing-three__meta">
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
                                <ul class="list-unstyled listing-three__meta listing-three__meta--two">
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
                            <div class="listing-three__car-rent-and-btn-box">
                                <p class="listing-three__car-rent"><span>2500 INR/</span> Day</p>
                                <div class="listing-three__btn-box">
                                    <a href="{{ route('hyundai-i10-details') }}" class="listing-three__btn"><span
                                            class="icon-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="listing-three__single">
                        <div class="listing-three__img">
                            <img src="{{ asset('assets/images/listing/listing-1-8(1).png') }}" alt="">
                            <div class="listing-three__brand-name">
                                <p>Maruti</p>
                            </div>
                        </div>
                        <div class="listing-three__content">
                            <h3 class="listing-three__title"><a href="{{ route('maruti-swift-dzire-details') }}">Maruti Swift Dzire</a></h3>
                            <div class="listing-three__meta-box-info">
                                <ul class="list-unstyled listing-three__meta">
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
                                <ul class="list-unstyled listing-three__meta listing-three__meta--two">
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
                            <div class="listing-three__car-rent-and-btn-box">
                                <p class="listing-three__car-rent"><span>2700 INR/</span> Day</p>
                                <div class="listing-three__btn-box">
                                    <a href="{{ route('maruti-swift-dzire-details') }}" class="listing-three__btn"><span
                                            class="icon-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="listing-three__single">
                        <div class="listing-three__img">
                            <img src="{{ asset('assets/images/listing/listing-1-9(1).png') }}" alt="">
                            <div class="listing-three__brand-name">
                                <p>Hyundai</p>
                            </div>
                        </div>
                        <div class="listing-three__content">
                            <h3 class="listing-three__title"><a href="{{ route('aura-cng-details') }}">Aura CNG</a></h3>
                            <div class="listing-three__meta-box-info">
                                <ul class="list-unstyled listing-three__meta">
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
                                <ul class="list-unstyled listing-three__meta listing-three__meta--two">
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
                            <div class="listing-three__car-rent-and-btn-box">
                                <p class="listing-three__car-rent"><span>2500 INR/</span> Day</p>
                                <div class="listing-three__btn-box">
                                    <a href="{{ route('aura-cng-details') }}" class="listing-three__btn"><span
                                            class="icon-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing One Single End -->
            </div>
        </div>
    </section>
    <!-- Listing Three End -->

    <!-- Video One Start -->
    <section class="video-one">
        <div class="video-one__bg jarallax" data-jarallax data-speed="0.2" data-imgposition="50% 0%"
            style="background-image: url({{ asset('assets/images/backgrounds/video-one-bg (2).jpg') }});"></div>
        <div class="container">
            <div class="video-one__inner">
                <h2 class="video-one__title">Want To Know More About? <br> Play Our Promotional Video Now!</h2>
                <div class="video-one__video-link">
                    <a href="https://www.youtube.com/watch?v=_TPq1QWQy48" class="video-popup">
                        <div class="video-one__video-icon">
                            <span class="icon-play"></span>
                            <i class="ripple"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Video One End -->

    <!-- Pricing Two Start -->
    <section class="pricing-two">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box justify-content-center">
                    <div class="section-title__tagline-shape">
                        <img src="{{ asset('assets/images/shapes/section-title-tagline-shape-1.png') }}" alt="">
                    </div>
                    <span class="section-title__tagline">Pricing & Plan</span>
                </div>
                <h2 class="section-title__title title-animation">Time Quick and Easy to <br> Transportation</h2>
            </div>
            <ul class="list-unstyled pricing-two__list">
                <li class="wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="pricing-two__single">
                        <div class="pricing-two__left-content">
                            <div class="pricing-two__img reveal">
                                <img src="{{ asset('assets/images/resources/pricing-2-1.jpeg') }}" alt="">
                            </div>
                            <div class="pricing-two__img-content">
                                <h3 class="pricing-two__title">Gold Pack</h3>
                                <h2 class="pricing-two__price-box">4999 INR <span>/year</span></h2>
                            </div>
                        </div>
                        <div class="pricing-two__right-content">
                            <ul class="list-unstyled pricing-two__points">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>5 Coupons per year.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Valid for 12 months.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>1 coupon redeem after purchase.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Remaining coupons available every 3 months.</p>
                                    </div>
                                </li>
                                 <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Per Coupon Value is: 2500 INR/Day.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>1500 discount per coupon.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>24/7 customer support.</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="pricing-two__btn-box">
                                <a href="https://wa.me/message/ZS5QNMAR2NSCO1" class="thm-btn">Rent Now<span
                                        class="fas fa-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="pricing-two__single">
                        <div class="pricing-two__left-content">
                            <div class="pricing-two__img reveal">
                                <img src="{{ asset('assets/images/resources/pricing-2-2.jpeg') }}" alt="">
                            </div>
                            <div class="pricing-two__img-content">
                                <h3 class="pricing-two__title">Smart Pack</h3>
                                <h2 class="pricing-two__price-box">9999 INR <span>/year</span></h2>
                            </div>
                        </div>
                        <div class="pricing-two__right-content">
                            <ul class="list-unstyled pricing-two__points">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>5 Coupons per year.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Valid for 12 months.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>1 coupon redeem after purchase.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Remaining coupons available every 3 months.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Per Coupon Value is: 2500 INR/Day.</p>
                                    </div>
                                     
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>1500 discount per coupon.</p>
                                    </div>
                                     
                                </li>
                                 <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>24/7 customer support.</p>
                                    </div>
                                     
                                </li>
                            </ul>
                            <div class="pricing-two__btn-box">
                                <a href="https://wa.me/message/ZS5QNMAR2NSCO1" class="thm-btn">Rent Now<span
                                        class="fas fa-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="pricing-two__single">
                        <div class="pricing-two__left-content">
                            <div class="pricing-two__img reveal">
                                <img src="{{ asset('assets/images/resources/pricing-2-3.jpeg') }}" alt="">
                            </div>
                            <div class="pricing-two__img-content">
                                <h3 class="pricing-two__title">Premium Pack</h3>
                                <h2 class="pricing-two__price-box">14999 INR <span>/year</span></h2>
                            </div>
                        </div>
                        <div class="pricing-two__right-content">
                            <ul class="list-unstyled pricing-two__points">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>5 Coupons per year.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Valid for 12 months.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>1 coupon redeem after purchase.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Remaining coupons available every 3 months.</p>
                                    </div>
                                </li>
                                 <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Per Coupon Value is: 5500 INR/Day.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>2500 discount per coupon.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>24/7 customer support</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="pricing-two__btn-box">
                                <a href="https://wa.me/message/ZS5QNMAR2NSCO1" class="thm-btn">Rent Now<span
                                        class="fas fa-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- <li class="wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="pricing-two__single">
                        <div class="pricing-two__left-content">
                            <div class="pricing-two__img reveal">
                                <img src="{{ asset('assets/images/resources/pricing-2-4.png') }}" alt="">
                            </div>
                            <div class="pricing-two__img-content">
                                <h3 class="pricing-two__title">Vip</h3>
                                <h2 class="pricing-two__price-box">$900 <span>/Mon</span></h2>
                            </div>
                        </div>
                        <div class="pricing-two__right-content">
                            <ul class="list-unstyled pricing-two__points">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Car service is essential for maintaining.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Performance and longevity of vehicle.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Per minutes stopped traffic</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Online booking</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>24/7 customer support</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="pricing-two__btn-box">
                                <a href="https://wa.me/message/ZS5QNMAR2NSCO1" class="thm-btn">Rent Now<span
                                        class="fas fa-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </li> -->
            </ul>
        </div>
    </section>
    <!-- Pricing Two End -->

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
                        <a href="https://wa.me/message/ZS5QNMAR2NSCO1" class="thm-btn">Rent Now<span
                                class="fas fa-arrow-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Lets Talk End -->

    <!--Testimonial Three Start -->
    <section class="testimonial-three">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="testimonial-three__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape">
                                    <img src="{{ asset('assets/images/shapes/section-title-tagline-shape-1.png') }}" alt="">
                                </div>
                                <span class="section-title__tagline">Our Testimonial</span>
                            </div>
                            <h2 class="section-title__title title-animation">What Peoples Say <br> about Quarkcars</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="testimonial-three__right">
                        <div class="testimonial-three__carousel owl-theme owl-carousel">
                            <!--Testimonial Three Single Start -->
                            <div class="item">
                                <div class="testimonial-three__single">
                                    <div class="testimonial-three__img">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-3-1(1).png') }}" alt="">
                                        <div class="testimonial-three__rating">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                        </div>
                                    </div>
                                    <div class="testimonial-three__client-info">
                                        <div class="testimonial-three__client-content">
                                            <h4 class="testimonial-three__client-name"><a
                                                    href="{{ route('testimonials') }}">Basavaraj Raga</a></h4>
                                            <p class="testimonial-three__client-sub-title">Customer</p>
                                        </div>
                                    </div>
                                    <p class="testimonial-three__text">“One of the best car rental in jaipur at good affordable price. Security deposit refund was also hassle free and instant. We rented thar and it was new and in very good condition. And to add to it the owner was very friendly and had good response”</p>
                                </div>
                                <div class="testimonial-three__quote">
                                    <span class="icon-quote"></span>
                                </div>
                            </div>
                            <!--Testimonial Three Single End -->
                            <!--Testimonial Three Single Start -->
                            <div class="item">
                                <div class="testimonial-three__single">
                                    <div class="testimonial-three__img">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-3-2(1).png') }}" alt="">
                                        <div class="testimonial-three__rating">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                        </div>
                                    </div>
                                    <div class="testimonial-three__client-info">
                                        <div class="testimonial-three__client-content">
                                            <h4 class="testimonial-three__client-name"><a
                                                    href="{{ route('testimonials') }}">Arshad Khan</a></h4>
                                            <p class="testimonial-three__client-sub-title">Customer</p>
                                        </div>
                                    </div>
                                    <p class="testimonial-three__text">Nice services great hospitality specially Dipak Ji very helping person I’ve rented grand I10 this month the car condition is excellent keep it up 👍🏻 …</p>
                                </div>
                                <div class="testimonial-three__quote">
                                    <span class="icon-quote"></span>
                                </div>
                            </div>
                            <!--Testimonial Three Single End -->
                            <!--Testimonial Three Single Start -->
                            <div class="item">
                                <div class="testimonial-three__single">
                                    <div class="testimonial-three__img">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-3-3(1).png') }}" alt="">
                                        <div class="testimonial-three__rating">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                        </div>
                                    </div>
                                    <div class="testimonial-three__client-info">
                                        <div class="testimonial-three__client-content">
                                            <h4 class="testimonial-three__client-name"><a
                                                    href="{{ route('testimonials') }}">Mayank Singh</a></h4>
                                            <p class="testimonial-three__client-sub-title">Customer</p>
                                        </div>
                                    </div>
                                    <p class="testimonial-three__text">Nice enlightened service both the dealer and car owners were so good. The car was brand new and the price point was also the lowest...Thanks to them and will recommend you guys to get a service from here.</p>
                                </div>
                                <div class="testimonial-three__quote">
                                    <span class="icon-quote"></span>
                                </div>
                            </div>
                            <!--Testimonial Three Single End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial Three End -->

    <!-- Team Three Start -->
    <section class="team-three" id="driver">
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

    <!--Contact One Start-->
    <section class="contact-one" id="contact">
        <!-- <div class="contact-one__bg jarallax" data-jarallax data-speed="0.2" data-imgposition="50% 0%"
            style="background-image: url({{ asset('assets/images/backgrounds/contact-one-bg.jpg') }});">
        </div> -->
        <div class="contact-one__img wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
            <img src="{{ asset('assets/images/resources/contact-one-img-1(1).png') }}" alt="">
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

    <!-- Feature One Start -->
    <section class="feature-one feature-two">
        <div class="container">
            <div class="feature-one__inner">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="feature-one__inner-single wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <!-- <div class="feature-one__inner-single-bg"
                                style="background-image: url({{ asset('assets/images/backgrounds/feature-one-bg-1.jpg') }});">
                            </div> -->
                            <h3 class="feature-one__inner-title">Are You Looking <br>For a Car ?</h3>
                            <p class="feature-one__inner-text">Find the perfect ride for your journey with our reliable and affordable car rental services, designed for comfort, convenience, and easy booking.</p>
                            <div class="feature-one__inner-btn-box">
                                <a href="{{ route('contact') }}" class="thm-btn">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="feature-one__inner-single feature-one__inner-single--two wow slideInRight"
                            data-wow-delay="100ms" data-wow-duration="2500ms">
                            <!-- <div class="feature-one__inner-single-bg"
                                style="background-image: url({{ asset('assets/images/backgrounds/feature-one-bg-2.jpg') }});">
                            </div> -->
                            <h3 class="feature-one__inner-title">Do You Want to <br> Rent a Car ?</h3>
                            <p class="feature-one__inner-text">Choose from a wide range of well-maintained cars and enjoy a smooth, flexible, and hassle-free rental experience.</p>
                            <div class="feature-one__inner-btn-box">
                                <a href="https://wa.me/message/ZS5QNMAR2NSCO1" class="thm-btn">Rent Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature One End -->

    <!--Brand One Start -->
    <section class="brand-one brand-three">
        <div class="container">
            <div class="brand-one__carousel owl-theme owl-carousel">
                <!--Brand One Single Start-->
                <div class="item">
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <a href="#"><img src="{{ asset('assets/images/brand/brand-1-1(1).png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <!--Brand One Single End-->
                <!--Brand One Single Start-->
                <div class="item">
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <a href="#"><img src="{{ asset('assets/images/brand/brand-1-2(1).png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <!--Brand One Single End-->
                <!--Brand One Single Start-->
                <div class="item">
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <a href="#"><img src="{{ asset('assets/images/brand/brand-1-3(1).png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <!--Brand One Single End-->
                <!--Brand One Single Start-->
                <div class="item">
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <a href="#"><img src="{{ asset('assets/images/brand/brand-1-4(1).png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <!--Brand One Single End-->
                <!--Brand One Single Start-->
                <div class="item">
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <a href="#"><img src="{{ asset('assets/images/brand/brand-1-5(1).png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <!--Brand One Single End-->
                <!--Brand One Single Start-->
                <div class="item">
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <a href="#"><img src="{{ asset('assets/images/brand/brand-1-6(1).png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <!--Brand One Single End-->
            </div>
        </div>
    </section>
    <!--Brand One End -->

    <!--Download App One Start -->
    <section class="download-app-one">
        <!-- <div class="download-app-one__bg jarallax" data-jarallax data-speed="0.2" data-imgposition="50% 0%"
            style="background-image: url({{ asset('assets/images/backgrounds/download-app-one-bg.jpg') }});"></div> -->
        <div class="container">
            <div class="download-app-one__inner">
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="download-app-one__content sec-title-animation animation-style2">
                            <p class="download-app-one__sub-title">Download Our App</p>
                            <h2 class="download-app-one__title title-animation">Quarkcars User Friendly <br> App
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
                                <img src="{{ asset('assets/images/resources/download-app-car-img-1(1).png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Download App One End -->

    <!--Blog One Start-->
    <section class="blog-one" id="blog">
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